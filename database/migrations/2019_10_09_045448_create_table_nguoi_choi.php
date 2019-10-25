<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNguoiChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NguoiChoi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('hinh_dai_dien');
            $table->integer('diem_cao_nhat');
            $table->integer('credit');
            $table->boolean('xoa');
            $table->rememberToken();
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
        Schema::dropIfExists('NguoiChoi');
    }
}
