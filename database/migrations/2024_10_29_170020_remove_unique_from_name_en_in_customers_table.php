<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueFromNameEnInCustomersTable extends Migration
{
    public function up(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropUnique(['name_en']);
        });
    }

    public function down(): void
    {
//        Schema::table('customers', function (Blueprint $table) {
//            $table->unique('name_en');
//        });
    }
}
