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
        Schema::create('immobilieres', function (Blueprint $table) {
            $table->id();
            $table->string('Titre');
            $table->string('Adresse');
            $table->double('Prix');
            $table->unsignedBigInteger('type_id');
            $table->boolean('Disponible');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immobilieres');
    }
};
