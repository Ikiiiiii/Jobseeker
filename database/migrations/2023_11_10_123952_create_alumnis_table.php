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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id('id_alumni');
            $table->string('nisn',50);
            $table->string('nama_lengkap',50);
            $table->enum('tahun_lulus', ['20/21','21/22','22/23','23/24'])->default('20/21');
            $table->text('alamat');
            $table->string('tanggal_lahir',50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp',13);
            $table->string('sosmed',50);
            $table->text('foto_alumni');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
