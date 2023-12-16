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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_post');
            // $table->integer('id_alumni');
            $table->string('nama_loker',50);
            $table->string('nama_perusahaan',50);
            $table->enum('tipe',['Full Time','Part Time']);
            $table->enum('kategori',['Web Developer','Web Designer']);
            $table->string('alamat',50);
            $table->string('gaji_min',50);
            $table->string('gaji_max',50);
            $table->text('deskripsi');
            $table->string('email')->unique();
            $table->string('kontak',13);
            $table->text('foto_post');
            $table->date('periode');
            $table->enum('status',['Draft','Approved','Rejected'])->default('Draft');
            //Persyaratan
            $table->enum('pengalaman',['Fresh Graduate','1 Tahun','2 Tahun','3 Tahun']);
            $table->enum('gender',['Pria','Wanita','Pria & Wanita']);
            $table->enum('pendidikan',['SMK','Universitas','Umum']);
            //Akhir persyaratan
            // $table->timestamps();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
