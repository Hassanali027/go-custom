<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_blogs', function (Blueprint $table) {
            if (!Schema::hasColumn('admin_blogs', 'set_home')) {
                $table->boolean('set_home')->default(false)->after('show_home');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_blogs', function (Blueprint $table) {
            if (Schema::hasColumn('admin_blogs', 'set_home')) {
                $table->dropColumn('set_home');
            }
        });
    }
};
