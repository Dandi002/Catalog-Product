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
        Schema::create('produks', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('harga');
            $table->string('foto');
            $table->string('nama_tas');
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_merk');
            $table->foreign('id_merk')->references('id')->on('merks')->onDelete('cascade');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');
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
        Schema::dropIfExists('produks');
    }
};
