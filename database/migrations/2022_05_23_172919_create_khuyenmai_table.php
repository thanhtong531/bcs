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
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->increments('km_ma');
            $table->string('km_phantram');
            $table->string('km_ngaybd');
            $table->string('km_ngaykt');
            $table->string('km_noidung');
            $table->string('km_giaban');
            $table->string('km_soluong');
            $table->string('km_tinhtrang')->default('1');

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
        Schema::dropIfExists('khuyenmai');
    }
};
