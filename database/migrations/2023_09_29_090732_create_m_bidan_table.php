<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_bidan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->integer('no_telp');
            $table->date('tgl_masuk');
            $table->integer('gaji');
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
        Schema::dropIfExists('m_bidan');
    }
};