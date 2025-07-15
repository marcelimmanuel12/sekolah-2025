<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('riwayat_kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id')->index(); 
            $table->string('kelas'); 
            $table->date('tanggal_naik_kelas'); 
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_kelas');
    }
};
