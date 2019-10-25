<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LuotChoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nguoi_choi_id');
            $table->foreign('nguoi_choi_id')
                ->references('id')
                ->on('NguoiChoi')
                ->onDelete('cascade');
            $table->integer('so_cau');
            $table->text('diem');
            $table->text('ngay_gio');
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
        Schema::dropIfExists('LuotChoi');
    }
}
