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
        Schema::table('software_solutions_services', function (Blueprint $table) {
            $table->bigInteger('service_details_id')->unsigned()->nullable();
            $table->foreign('service_details_id')->references('id')->on('service_details');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('software_solutions_services', function (Blueprint $table) {
            //
        });
    }
};
