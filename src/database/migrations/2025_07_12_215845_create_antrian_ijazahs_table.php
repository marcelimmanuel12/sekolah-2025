<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('antrian_ijazahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_murid');
            $table->string('email_murid')->nullable();
            $table->timestamp('tanggal_antri')->useCurrent();
            $table->enum('status', ['menunggu', 'selesai'])->default('menunggu');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('antrian_ijazahs');
    }
};
