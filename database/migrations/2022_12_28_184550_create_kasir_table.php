<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            $table->unsignedInteger('pasien');
            $table->unsignedInteger('dokter');
            $table->unsignedInteger('tindakan')->nullable();
            $table->integer('harga_tindakan')->nullable();
            $table->unsignedInteger('obat');
            $table->integer('jumlah_obat');
            $table->integer('harga_obat');
            $table->integer('jumlah_total');
            $table->string('status');
            $table->unsignedInteger('created_by');
            $table->timestamps();

            $table->foreign('pasien')->references('id')->on('pasien')->onDelete('cascade')->update('cascade');
            $table->foreign('dokter')->references('id')->on('dokter')->onDelete('cascade')->update('cascade');
            $table->foreign('tindakan')->references('id')->on('tindakan')->onDelete('cascade')->update('cascade');
            $table->foreign('obat')->references('id')->on('obat')->onDelete('cascade')->update('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->update('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasir');
    }
}
