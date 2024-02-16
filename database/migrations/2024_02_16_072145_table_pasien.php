<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tbl_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien')->unique();
            $table->string('alamat');
            $table->string('email');
            $table->string('telepon');
            $table->unsignedBigInteger('id_rumahSakit');

            $table->foreign('id_rumahSakit')->references('id')->on('tabel_rumah_sakit');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
