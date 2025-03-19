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
        Schema::create('gembalas', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->date('tgl_column: lahir');
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_peneguhan');
            $table->string('nik_ktp')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_tinggal')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('wilayah_id')->nullable();
            $table->integer('kecamatan_id')->nullable();
            $table->enum('jk',['L', 'P'])->default('L');
            $table->string('no_hp')->nullable();;
            $table->string('no_wa')->nullable();
            $table->string('email')->nullable();
            $table->string('hobi')->nullable();
            $table->enum('status_menikah',['Menikah','Belum Menikah'])->default('Belum Menikah');
            $table->date('tgl_nikah')->nullable();
            $table->string(column: 'nama_istri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gembalas');
    }
};
