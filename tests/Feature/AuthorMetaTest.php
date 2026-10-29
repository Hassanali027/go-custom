<?php

namespace Tests\Feature;

use App\Http\Middleware\CanonicalTrailingSlash;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AuthorMetaTest extends TestCase
{
    public function test_author_page_renders_author_and_publisher_meta_tags(): void
    {
        $this->withoutMiddleware(CanonicalTrailingSlash::class);

        $author = DB::table('admin_authors')->first();
        $expectedAuthorName = ($author && !empty($author->title)) ? $author->title : 'Farukh Abdullah';
        $url = $author ? ('/author/' . $author->slug) : '/author/farukh-abdullah';

        $response = $this->get($url);
        $response->assertStatus(200);
        $response->assertSee('<meta name="author" content="' . $expectedAuthorName . '">', false);
        $response->assertSee('<meta name="publisher" content="Go Custom Boxes">', false);
        $response->assertSee('<meta name="theme-color" content="#0B2240">', false);
    }

    public function test_pages_render_theme_color_meta_tag(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('<meta name="theme-color" content="#0B2240">', false);
    }
}
