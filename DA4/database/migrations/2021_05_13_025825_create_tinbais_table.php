<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinbaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinbais', function (Blueprint $table) {
            $table->id();
            $table->text('tentin');
            $table->text('tieude');
            $table->string('hinhanh');
            $table->text('noidung');
            $table->date('ngaydang');
            $table->integer('loaitinid');
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
        Schema::dropIfExists('tinbais');
    }
}
