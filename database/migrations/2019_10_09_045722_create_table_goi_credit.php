<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGoiCredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GoiCredit', function (Blueprint $table) {
            $table->increments('cre_id');
            $table->string('ten_goi');
            $table->integer('credit');
            $table->integer('so_tien');
            $table->boolean('xoa');
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
        Schema::dropIfExists('GoiCredit');
    }
}
