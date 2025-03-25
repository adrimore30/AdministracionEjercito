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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('grados');

            // Atributos foráneos
            $table->unsignedBigInteger('armyCorp_id')->nullable();
            $table->unsignedBigInteger('quarter_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();

            // Referenciando la tabla cuerpo ejercito
            $table->foreign('armyCorp_id')
                ->references('id')
                ->on('army_corps')
                ->onDelete('set null');

            // Referenciando la tabla cuartel
            $table->foreign('quarter_id')
                ->references('id')
                ->on('quarters')
                ->onDelete('set null');
         
            // Referenciando la tabla compañia
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
