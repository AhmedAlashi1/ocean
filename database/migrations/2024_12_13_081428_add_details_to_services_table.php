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
        Schema::table('services', function (Blueprint $table) {
            //image
            $table->string('image2')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->longText('content_ar')->nullable();
            $table->longText('content_en')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
};
