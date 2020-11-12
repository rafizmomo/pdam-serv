<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT4rekbayarbasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t4rekbayarbas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpel');
            $table->unsignedInteger('idjln');
            $table->string('kdpellama');
            $table->string('keltarif');
            $table->string('gol');
            $table->string('kelompok');
            $table->string('novocer');
            $table->string('aktno');
            $table->string('bulan');
            $table->unsignedInteger('meter_sbl');
            $table->unsignedInteger('meter_skr');
            $table->unsignedInteger('mpakai');
            $table->unsignedInteger('minn');
            $table->unsignedInteger('adm');
            $table->unsignedInteger('dmeter');
            $table->unsignedInteger('dlain');
            $table->unsignedInteger('denda');
            $table->unsignedInteger('h1');
            $table->unsignedInteger('h2');
            $table->unsignedInteger('h3');
            $table->unsignedInteger('h4');
            $table->unsignedInteger('s1');
            $table->unsignedInteger('s2');
            $table->unsignedInteger('s3');
            $table->unsignedInteger('s4');
            $table->unsignedInteger('total');
            $table->date('tanggal');
            $table->string('loket');
            $table->string('users');
            $table->string('setatus');
            $table->string('Keterangan');
            $table->string('haspaid');
            $table->unsignedInteger('harga');
            $table->time('waktu');
            $table->string('statuscetak');
            $table->timestamp('tanggalupload');
            $table->string('kantorbayar');


            $table->foreign('idpel')
                ->references('idpel')
                ->on('t4pelanggan')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t4rekbayarbas');
    }
}
