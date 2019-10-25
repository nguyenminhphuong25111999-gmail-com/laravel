<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLichSuMuaCredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LichSuMuaCredit', function (Blueprint $table) {
            $table->increments('hisn_id');
            $table->integer('nguoi_choi_id');
            $table->foreign('nguoi_choi_id')
                ->references('id')
                ->on('NguoiChoi')
                ->onDelete('cascade');
            $table->integer('goi_credit_id');
            $table->foreign('goi_credit_id')
                ->references('cre_id')
                ->on('GoiCredit')
                ->onDelete('cascade');
            $table->integer('so_tien');
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
        Schema::dropIfExists('LichSuMuaCredit');
    }
}
