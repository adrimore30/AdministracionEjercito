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
        Schema::create('services_soldiers', function (Blueprint $table) {
            $table->id();

            // Atributos foráneos
            $table->unsignedBigInteger('soldier_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
           
             // Referenciando la tabla soldados
             $table->foreign('soldier_id')
             ->references('id')
             ->on('soldiers')
             ->onDelete('cascade');

            // Referenciando la tabla servicios
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_soldiers');
    }
};
