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
        Schema::create('daftar_produks', function (Blueprint $table) {
            $table->id();
            $table->char('deskripsi', 50);
            $table->decimal('kuantitas', 10, 2);
            $table->decimal('harga', 10, 2);
            $table->integer('pajak');
            $table->decimal('totalHarga', 10, 2);
            $table->integer('invoiceID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_produks');
    }
};
