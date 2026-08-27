<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$p = DB::table('admin_products')->first();
if ($p) {
    for ($i = 1; $i <= 4; $i++) {
        $newP = (array) $p;
        unset($newP['id']);
        $newP['title'] = $p->title . ' ' . $i;
        $newP['slug'] = $p->slug . '-' . $i;
        $newP['created_at'] = now();
        $newP['updated_at'] = now();
        DB::table('admin_products')->insert($newP);
    }
}
echo "Added 4 dummy products.\n";
