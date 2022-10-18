<?php

  

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

  

class CreateProductsTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->text('nama');

            $table->integer('no_identitas');

            $table->string('subjek');

            $table->text('organisasi');

            $table->text('alamat');

            $table->text('kontak');

            $table->text('detail_info_diminta');

            $table->text('tujuan_penggunaan');

            $table->text('cara_memperoleh_info');

            $table->text('cara_mendapat_salinan');

            $table->text('tujuan_skpd');

            $table->date('date');

            $table->string('dokumen');

            $table->string('ttd');

            $table->string('image');

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

        Schema::dropIfExists('products');

    }

}