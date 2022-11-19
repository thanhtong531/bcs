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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('sp_ma');
            $table->string('sp_ten');
            $table->string('sp_hinh');
            $table->integer('sp_soluong');
            $table->string('sp_tinhtrang')->default('1');
            $table->integer('nsx_ma')->unsigned();
            $table->integer('dv_ma')->unsigned();
            $table->integer('lsp_ma')->unsigned();
            $table->foreign('lsp_ma')->references('lsp_ma')->on('loaisp');
            $table->foreign('nsx_ma')->references('nsx_ma')->on('nhasanxuat');
            $table->foreign('dv_ma')->references('dv_ma')->on('donvi');
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
        Schema::dropIfExists('sanpham');
    }
};
