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
        Schema::create('informasi_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->char('nama', 50);
            $table->char('alamat', 50);
            $table->char('kota', 50);
            $table->char('provinsi', 50);
            $table->char('negara', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_pelanggans');
    }
};
