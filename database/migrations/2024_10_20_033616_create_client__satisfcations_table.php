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
        Schema::create('client__satisfcations', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->unique();
            $table->string('name_ar')->nullable()->unique();
            $table->string('nick_name_en')->nullable();
            $table->string('nick_name_ar')->nullable();
            $table->enum('ranked', array('1','2','3','4','5'));
            $table->text('content_en');
            $table->text('content_ar')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client__satisfcations');
    }
};
