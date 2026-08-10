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
        Schema::create('bahan_baku', function (Blueprint $table) {
            $table->id();

            $table->string('kode_bahan')->unique();
            $table->string('nama_bahan');          
            $table->decimal('stok', 12, 2)->default(0);
            $table->decimal('stok_minimum', 12, 2)->default(0);           
            $table->string('satuan');  
            $table->decimal('harga', 15, 2)->default(0);         
            $table->date('tanggal_expired')->nullable();
            $table->text('deskripsi')->nullable();
            $table->enum('status', ['tersedia', 'habis'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_baku');
    }
};
