<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuanTriVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QuantriVien', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ten_dang_nhap');
            $table->text('mat_khau');
            $table->text('ho_ten');
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
        Schema::dropIfExists('QuantriVien');
    }
}
