<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {

            $table->string('title_html_ar')->nullable()->after('title_ar');
            $table->string('title_html_en')->nullable()->after('title_en');
            $table->longText('desc_html_ar')->nullable()->after('desc_ar');
            $table->longText('desc_html_en')->nullable()->after('desc_en');
            $table->string('key_url')->nullable()->after('short_link');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
};
