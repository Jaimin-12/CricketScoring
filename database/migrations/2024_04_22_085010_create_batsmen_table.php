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
        Schema::create('batsmen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');            
            $table->integer('runs')->default(0);            
            $table->integer('balls')->default(0);            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batsmen');
    }
};
