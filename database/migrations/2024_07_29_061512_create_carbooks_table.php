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
        Schema::create('carbooks', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_station');
            $table->string('drop_station'); 
            $table->string('book_date');
            $table->string('book_off');
            $table->string('time_pick');
            $table->integer('total_kilometer'); 
            $table->string('mobile'); 
            $table->timestamps();
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carbooks');
    }
};
