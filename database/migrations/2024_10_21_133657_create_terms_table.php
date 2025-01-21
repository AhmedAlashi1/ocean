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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
//            $table->bigInteger('service_id')->unsigned();
//            $table->foreign('service_id')->references('id')->on('services');
            $table->string('service_name_en');
            $table->string('service_name_ar')->nullable();
            $table->text('desc_en');
            $table->text('desc_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
