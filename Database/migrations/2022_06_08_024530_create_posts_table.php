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
            $table->string('title');
            $table->string('category_id');
            $table->string('max_lantai');
            $table->string('max_kamarT');
            $table->string('max_kamarM');
            $table->string('alamat_kost');
            $table->string('jalur_transportasi');
            $table->string('fasilitas_kamar');
            $table->string('fasilitas_sekitar');
            $table->string('maps');
            $table->string('harga');
            $table->string('picture');
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