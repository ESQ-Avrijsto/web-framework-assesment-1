<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTableMahasiswa extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('tahun_masuk');
            $table->dateTime('create_at');
            $table->dateTime('update_at');            
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}

 ?>