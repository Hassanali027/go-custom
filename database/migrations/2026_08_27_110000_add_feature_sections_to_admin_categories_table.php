<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('admin_categories', function (Blueprint $table) {
            $table->json('feature_sections')->nullable()->after('why_choose_description');
        });
    }

    public function down(): void
    {
        Schema::table('admin_categories', function (Blueprint $table) {
            $table->dropColumn('feature_sections');
        });
    }
};
