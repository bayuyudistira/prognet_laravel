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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs',100);
            $table->date('tgl_lahir');
            $table->string('alamat',100);
            $table->string('agama',100);
            $table->string('universitas',50);
            $table->string('fakultas',50);
            $table->string('prodi',50);
            $table->string('nim_mhs',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
