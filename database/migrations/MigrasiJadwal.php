<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


*/
class CreateTableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreignId('dosen_id')->references('id')->on('dosen');
            $table->string('judul');
            $table->string('deskripsi');
            $table->dateTime('awal');
            $table->dateTime('akhir');
            $table->dateTime('create_at');
            $table->dateTime('update_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }