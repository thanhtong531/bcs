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
        Schema::create('giaban', function (Blueprint $table) {
            $table->unsignedInteger('sp_ma');
            $table->unsignedInteger('n_ma');
            $table->float('giaban');
            $table->float('giamgia');
            $table->string('tinhtrang')->default('1');
            $table->primary(['sp_ma','n_ma']);
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
            $table->foreign('n_ma')->references('n_ma')->on('ngay');
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
        Schema::dropIfExists('giaban');
    }
};
