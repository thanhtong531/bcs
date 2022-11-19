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
        Schema::create('thuoctinh', function (Blueprint $table) {
            $table->increments('tt_ma');
            $table->string('tt_ten');
            $table->string('tt_noidung');
            $table->string('tt_tinhtrang')->default('1');
            $table->integer('sp_ma')->unsigned();
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
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
        Schema::dropIfExists('thuoctinh');
    }
};
