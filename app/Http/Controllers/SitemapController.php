<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function xml()
    {
        $urls = collect([
            ['loc' => url('/'), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => url('/sitemap/'), 'changefreq' => 'monthly', 'priority' => '0.3'],
            ['loc' => url('/contact-us/'), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('/request-quote/'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('/blog/'), 'changefreq' => 'weekly', 'priority' => '0.6'],
            ['loc' => url('/about-us/'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('/why-choose-us/'), 'changefreq' => 'monthly', 'priority' => '0.5'],
        ]);

        $faqSlug = DB::table('homepage_contents')
            ->where('section', 'faq_page')
            ->where('field_key', 'faq_page_slug')
            ->value('value') ?: 'frequentlyAskedQuestions';
        $urls->push(['loc' => url('/' . trim($faqSlug, '/') . '/'), 'changefreq' => 'monthly', 'priority' => '0.6']);

        DB::table('admin_categories')->whereNotNull('slug')->get()->each(function ($row) use ($urls) {
            $urls->push(['loc' => url('/' . trim($row->slug, '/') . '/'), 'changefreq' => 'weekly', 'priority' => '0.8']);
        });
        DB::table('admin_products')->where('status', 'published')->whereNotNull('slug')->get()->each(function ($row) use ($urls) {
            $urls->push(['loc' => url('/' . trim($row->slug, '/') . '/'), 'changefreq' => 'weekly', 'priority' => '0.8']);
        });
        DB::table('admin_blogs')->where('status', 'published')->whereNotNull('slug')->get()->each(function ($row) use ($urls) {
            $urls->push(['loc' => url('/blog/' . trim($row->slug, '/') . '/'), 'changefreq' => 'weekly', 'priority' => '0.6']);
        });
        DB::table('admin_pages')->where('status', 'published')->whereNotNull('slug')->get()->each(function ($row) use ($urls) {
            $urls->push(['loc' => url('/' . trim($row->slug, '/') . '/'), 'changefreq' => 'monthly', 'priority' => '0.5']);
        });

        $xml = view('sitemap-xml', ['urls' => $urls->unique('loc')])->render();
        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    public function index()
    {
        $blogs = DB::table('admin_blogs')->get();
        $pages = DB::table('admin_pages')->get();
        
        $parentCategories = DB::table('admin_categories')->whereNull('parent_id')->get();
        $allCategories = DB::table('admin_categories')->whereNotNull('parent_id')->get();
        $allProducts = DB::table('admin_products')
            ->join('admin_category_product', 'admin_products.id', '=', 'admin_category_product.product_id')
            ->select('admin_products.id', 'admin_products.title', 'admin_products.slug', 'admin_category_product.category_id')
            ->get();
            
        $sitemapData = [];
        foreach ($parentCategories as $parent) {
            $subs = $allCategories->where('parent_id', $parent->id);
            $subcategoriesData = [];
            foreach ($subs as $sub) {
                $prods = $allProducts->where('category_id', $sub->id);
                $subcategoriesData[] = [
                    'category' => $sub,
                    'products' => $prods
                ];
            }
            $sitemapData[] = [
                'parent' => $parent,
                'subcategories' => $subcategoriesData,
                'direct_products' => $allProducts->where('category_id', $parent->id)
            ];
        }
        
        return view('sitemap', compact('blogs', 'pages', 'sitemapData'));
    }

    /**
     * XML sitemap for search engines. All public URLs use the site's
     * canonical trailing-slash format, except the homepage.
     */
    public function xml()
    {
        $baseUrl = rtrim(url('/'), '/');
        $makeUrl = static function (string $path) use ($baseUrl): string {
            $path = trim($path, '/');

            return $path === '' ? $baseUrl . '/' : $baseUrl . '/' . $path . '/';
        };
        $lastModified = static function ($date): ?string {
            return $date ? Carbon::parse($date)->toDateString() : null;
        };

        $entries = collect([
            ['loc' => $makeUrl(''), 'changefreq' => 'daily', 'priority' => '1.0'],
            ['loc' => $makeUrl('about-us'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => $makeUrl('contact-us'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => $makeUrl('popular-products'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => $makeUrl('blog'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => $makeUrl('frequentlyaskedquestions'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => $makeUrl('why-choose-us'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => $makeUrl('request-quote'), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ]);

        $appendRecords = function ($records, string $prefix = '', string $priority = '0.7') use ($entries, $makeUrl, $lastModified) {
            foreach ($records as $record) {
                $entries->push([
                    'loc' => $makeUrl($prefix . $record->slug),
                    'lastmod' => $lastModified($record->updated_at ?? null),
                    'changefreq' => 'weekly',
                    'priority' => $priority,
                ]);
            }
        };

        $published = static function (string $table) {
            return DB::table($table)
                ->where('status', 'published')
                ->whereNotNull('slug')
                ->where('slug', '!=', '')
                ->get(['slug', 'updated_at']);
        };

        $appendRecords($published('admin_categories'), '', '0.8');
        $appendRecords($published('admin_products'), '', '0.9');
        $appendRecords($published('admin_pages'), '', '0.7');
        $appendRecords($published('admin_blogs'), 'blog/', '0.7');
        $appendRecords($published('admin_authors'), 'author/', '0.5');

        return response()
            ->view('sitemap-xml', ['entries' => $entries->unique('loc')->values()])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
