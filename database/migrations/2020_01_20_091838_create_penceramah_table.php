<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenceramahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penceramah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama');
            $table->string('ic_no');
            $table->string('email');
            $table->integer('umur');
            $table->string('jantina');
            $table->text('alamat1');
            $table->text('alamat2');
            $table->string('poskod');
            $table->string('bandar');
            $table->string('negeri');
            $table->string('phone_rumah');
            $table->string('phone_bimbit');
            $table->string('tajuk');
            $table->date('Date_mula_kuliah');
            $table->date('End_date');
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
        Schema::dropIfExists('penceramah');
    }
}
