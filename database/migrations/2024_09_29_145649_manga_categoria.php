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
        Schema::create("manga_cagoria", function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("id_manga");
            $table->unsignedInteger("id_categoria");
            $table->dateTime('created')->nullable();
            $table->dateTime('modified')->nullable();

            $table->foreign("id_manga")->references("id")->on("manga")->onDelete("cascade");
            $table->foreign("id_categoria")->references("id")->on("categoria")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("manga_categoria");
    }
};
