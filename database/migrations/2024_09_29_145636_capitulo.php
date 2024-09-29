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
        Schema::create("capitulo", function (Blueprint $table) {
            $table->increments('id');
            $table->string('caminho_capitulo', 255);
            $table->dateTime('created')->nullable();
            $table->dateTime('modified')->nullable();
            $table->unsignedInteger('id_manga');

            $table->foreign('id_manga')->references('id')->on('manga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capitulo');
    }
};
