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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->string('nama_lengkap',50);
            $table->text('alamat',50);
            $table->date('tanggal_lahir');
            $table->string('kontak',13);
            $table->string('email')->unique();
            $table->text('foto_pengaju');
            $table->text('persyaratan');
            // $table->text('persyaratan');
            $table->enum('status',['Pending','Accepted','Rejected'])->default('Pending');
            $table->date('tanggal_pengajuan')->nullable();
            // $table->timestamps();
        });

        // Schema::table('pengajuans', function (Blueprint $table){
        //     $table->foreignId('id_alumni')->constrained();
        //     $table->foreignId('id_post')->constrained();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
