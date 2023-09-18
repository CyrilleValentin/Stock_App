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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('montre_id');
            $table->string('nom_montre');
            $table->string('marque_montre');
            $table->integer('quantite_vendue');
            $table->decimal('montant_total', 10, 2);
            $table->date('date_vente')->default(now());
            $table->timestamps();

            $table->foreign('montre_id')->references('id')->on('montres')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventes');
    }
};
