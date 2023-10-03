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
        Schema::create('m_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('j_kel');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->integer('no_telp');
            $table->date('tgl_daftar');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_pasien');
    }
};