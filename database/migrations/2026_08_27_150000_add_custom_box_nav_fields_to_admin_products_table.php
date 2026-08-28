<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('admin_products', function (Blueprint $table) {
            $table->boolean('show_as_custom_box')->default(false)->after('show_home');
            $table->string('nav_image')->nullable()->after('hover_image');
        });
    }

    public function down(): void
    {
        Schema::table('admin_products', function (Blueprint $table) {
            $table->dropColumn(['show_as_custom_box', 'nav_image']);
        });
    }
};
