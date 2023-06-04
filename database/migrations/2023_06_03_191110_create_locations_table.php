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
        Schema::disableForeignKeyConstraints();
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('immobiliere_id');
            $table->unsignedBigInteger('client_id');
            $table->dateTime('Date_debut');
            $table->dateTime('Date_fin');
            $table->foreign('immobiliere_id')->references('id')->on('immobilieres')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
