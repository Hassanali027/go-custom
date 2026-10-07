<?php

namespace App\Support;

use Illuminate\Support\Facades\DB;

class QuoteProductOptions
{
    /** Merge published database products with the imported names without duplicates. */
    public static function all(): array
    {
        $imported = self::importedNames();

        try {
            $published = DB::table('admin_products')
                ->where('status', 'published')
                ->orderBy('title')
                ->pluck('title')
                ->all();
        } catch (\Throwable $exception) {
            $published = [];
        }

        $seen = [];
        $options = [];

        foreach (array_merge($published, $imported) as $name) {
            $name = trim((string) $name);
            $key = (string) preg_replace('/[^a-z0-9]+/', '', strtolower($name));

            if ($name === '' || $key === '' || isset($seen[$key])) {
                continue;
            }

            $seen[$key] = true;
            $options[] = $name;
        }

        natcasesort($options);

        return array_values($options);
    }

    private static function importedNames(): array
    {
        $path = resource_path('data/quote-product-options.json');
        if (!is_file($path)) {
            return [];
        }

        $names = json_decode((string) file_get_contents($path), true);

        return is_array($names) ? $names : [];
    }
}
