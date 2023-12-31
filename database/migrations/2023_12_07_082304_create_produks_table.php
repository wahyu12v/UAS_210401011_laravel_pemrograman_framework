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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->foreignId('id_merek')->references('id')->on('mereks')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kategori')->references('id')->on('kategoris')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('harga');
            $table->string('stok');
            $table->text('description');
            $table->text('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
