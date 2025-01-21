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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_ar')->nullable();
            $table->enum('status', array('0', '1'))->default('0')->comment('0: hide, 1: display');
            $table->enum('is_contact_us', array('0', '1'))->default('0')->comment('0: hide on contact us page, 1: display on contact us page');
            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
