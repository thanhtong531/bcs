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
        Schema::create('cthoadon', function (Blueprint $table) {
            $table->unsignedInteger('sp_ma');
            $table->unsignedInteger('hd_ma');
            $table->integer('soluong');
            $table->float('giaban');
            $table->string('thanhtien');
            $table->primary(['sp_ma','hd_ma']);
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
            $table->foreign('hd_ma')->references('hd_ma')->on('hoadon');
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
        Schema::dropIfExists('cthoadon');
    }
};
