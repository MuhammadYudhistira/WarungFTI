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
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->unsignedBigInteger("barang_id");
            $table->unsignedBigInteger("penjualan_id");
            $table->integer('quantity');

            $table->foreign("barang_id")->references("id")->on("barang")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign("penjualan_id")->references("id")->on("penjualan")->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penjualan');
    }
};
