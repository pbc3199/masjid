<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbMasjidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_masjid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama');
            $table->string('ic_no');
            $table->string('email');
            $table->integer('umur');
            $table->text('alamat1');
            $table->text('alamat2');
            $table->string('poskod');
            $table->string('bandar');
            $table->string('negeri');
            $table->string('phone_rumah');
            $table->string('phone_bimbit');
            $table->string('status');
            $table->string('tempoh');
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
        Schema::dropIfExists('db_masjid');
    }
}
