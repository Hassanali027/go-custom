<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('admin_authors', function (Blueprint $table) {
            if (!Schema::hasColumn('admin_authors', 'toc_title')) {
                $table->string('toc_title')->nullable()->default('Table Of Content')->after('bio');
            }
        });
    }

    public function down(): void
    {
        Schema::table('admin_authors', function (Blueprint $table) {
            if (Schema::hasColumn('admin_authors', 'toc_title')) {
                $table->dropColumn('toc_title');
            }
        });
    }
};
