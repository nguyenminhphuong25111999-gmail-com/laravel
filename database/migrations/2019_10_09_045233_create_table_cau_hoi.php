<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCauHoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CauHoi', function (Blueprint $table) {
            $table->increments('cauhoi_id');
            $table->text('noidung');
            $table->string('cauhoi_slug');
            $table->integer('linh_vuc_id')->unsigned();
            $table->foreign('linh_vuc_id')
                ->references('id')
                ->on('LinhVuc')
                ->onDelete('cascade');
            $table->string('phuong_an_a');
            $table->string('phuong_an_b');
            $table->string('phuong_an_c');
            $table->string('phuong_an_d');
            $table->string('dap_an');
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
        Schema::dropIfExists('CauHoi');
    }
}
