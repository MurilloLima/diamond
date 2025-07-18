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
        Schema::create('diamonds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->string('slug');
            $table->integer('cat_id');
            $table->string('total');
            $table->string('disponiveis');
            $table->string('vendidos');
            $table->string('tipo_anuncio');
            $table->string('desc_anuncio');
            $table->longText('desc');
            $table->decimal('valor', 12,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diamonds');
    }
};
