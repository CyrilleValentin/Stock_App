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
        Schema::create('montres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('marque');
            $table->text('description');
            $table->float('prix', 10, 2);
            $table->string('matiere');
            $table->string('bracelet');
            $table->string('mecanisme');
            $table->string('fonction');
            $table->string('image')->nullable();
            $table->integer('quantite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('montres');
    }
};
