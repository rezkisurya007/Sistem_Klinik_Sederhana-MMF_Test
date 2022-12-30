<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->string('pasien');
            $table->string('dokter');
            $table->string('tindakan')->nullable();
            $table->integer('harga_tindakan')->nullable();
            $table->string('obat');
            $table->integer('jumlah_obat');
            $table->integer('harga_obat');
            $table->integer('jumlah_total');
            $table->string('status');
            $table->string('created_by');
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
        Schema::dropIfExists('histori');
    }
}
