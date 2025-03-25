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
        Schema::create('companies_quarters', function (Blueprint $table) {
            $table->id();


            // Atributos foráneos
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('quarter_id')->nullable();

            // Referenciando la tabla compañia
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');

            // Referenciando la tabla cuartel
            $table->foreign('quarter_id')
                ->references('id')
                ->on('quarters')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies_quarters');
    }
};
