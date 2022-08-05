<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tujuan_skpd', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan_skpd');
            $table->string('id_tujuan');
            $table->timestamps();
        });
        
    }
    
    public function down()
    {
        Schema::dropIfExists('tujuan_skpd');
    }
};
