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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title_en');
            $table->string('title_ar')->nullable();
            $table->string('short_link')->nullable();
            $table->longText('desc_en')->nullable();
            $table->longText('desc_ar')->nullable();
            $table->longText('content_en')->nullable();
            $table->longText('content_ar')->nullable();
            $table->string('by');
            $table->enum('is_default', array('0', '1'))->default('0')->comment('0: hide, 1: display');
            $table->bigInteger('blog_type_id')->unsigned();
            $table->foreign('blog_type_id')->references('id')->on('blog__types');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
