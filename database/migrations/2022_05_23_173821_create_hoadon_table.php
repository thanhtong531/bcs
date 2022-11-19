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
        Schema::create('hoadon', function (Blueprint $table) {
            $table->increments('hd_ma');
            $table->datetime('hd_ngaykt');
            $table->datetime('hd_ngaytt');
            $table->float('hd_tongtien');
            $table->string('hd_diachi');
            $table->string('hd_tinhtrang')->default('0');
            $table->integer('kh_ma')->unsigned();
            $table->integer('nv_ma')->unsigned();
            $table->integer('tt_ma')->unsigned();
            $table->integer('vc_ma')->unsigned();

            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang');
            $table->foreign('nv_ma')->references('nv_ma')->on('nhanvien');
            $table->foreign('tt_ma')->references('tt_ma')->on('thanhtoan');
            $table->foreign('vc_ma')->references('vc_ma')->on('vanchuyen');
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
        Schema::dropIfExists('hoadon');
    }
};
