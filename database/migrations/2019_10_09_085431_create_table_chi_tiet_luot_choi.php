<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChiTietLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietLuotChoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('luot_choi_id');
            $table->foreign('luot_choi_id')
                ->references('id')
                ->on('LuotChoi')
                ->onDelete('cascade');
            $table->integer('cau_hoi_id');
            $table->foreign('cau_hoi_id')
                ->references('cauhoi_id')
                ->on('CauHoi')
                ->onDelete('cascade');
            $table->text('phuong_an');
            $table->integer('diem');
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
        Schema::dropIfExists('ChiTietLuotChoi');
    }
}
