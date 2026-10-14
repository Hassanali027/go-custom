<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('admin_categories', function (Blueprint $table) {
            // When true, this category is only a navigation group (parent) that
            // organises other categories in the menu. It has no public page of
            // its own, so visiting its slug returns 404.
            $table->boolean('is_nav_group')->default(false)->after('parent_id');
        });
    }

    public function down(): void
    {
        Schema::table('admin_categories', function (Blueprint $table) {
            $table->dropColumn('is_nav_group');
        });
    }
};
