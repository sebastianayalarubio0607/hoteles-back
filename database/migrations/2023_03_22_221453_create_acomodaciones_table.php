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
        Schema::create('acomodaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 1000)->nullable();


            $table->unsignedBigInteger('estado');
            $table->foreign('estado')->references('id')->on('estados');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acomodaciones');
    }
};
