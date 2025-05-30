<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('client_logos', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('client_logos', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
    
};
