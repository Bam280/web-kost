<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik_user');
            $table->string('namaKos');
            $table->text('desc');
            $table->string('jenisKos')->nullable();
            $table->string('jumLantai');
            $table->string('jumKamar');
            $table->string('jumKamarMandi');
            $table->string('address');
            $table->string('jalurTransport');
            $table->string('fasilitas_kamar');
            $table->string('fasilitas_sekitar');
            $table->text('maps');
            $table->string('harga');
            $table->string('picture');
            $table->foreign('nik_user')->references('nik')->on('users');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
}

