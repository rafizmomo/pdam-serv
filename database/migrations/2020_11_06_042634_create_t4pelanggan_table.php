<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT4pelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t4pelanggan', function (Blueprint $table) {
            $table->unsignedInteger('idno')->unique();
            $table->bigIncrements('idpel');
            $table->unsignedInteger('idjln');
            $table->string('namapel');
            $table->string('kelompok');
            $table->string('ketkelompok');
            $table->string('kdpellama');
            $table->string('alamat');
            $table->string('RT');
            $table->string('RW');
            $table->string('Desa');
            $table->string('Kecamatan');
            $table->string('Contact');
            $table->string('telp');
            $table->string('urut');
            $table->string('Loket');
            $table->date('last_update');
            $table->string('user_id');
            $table->string('idprop');
            $table->string('rute');
            $table->string('urutrute');
            $table->string('mtrid');
            $table->string('typemtr');
            $table->date('tglinstall');
            $table->string('jmldigit');
            $table->string('idlama');
            $table->date('tglbaca');
            $table->unsignedInteger('angkamtr');
            $table->string('lokasimtr');
            $table->string('artikel');
            $table->unsignedInteger('urutno');
            $table->string('setatus');
            $table->string('sub_id');
            $table->string('agrtid');
            $table->string('npa_lama');
            $table->string('snmeter');
            $table->string('idpbr');
            $table->string('keterangan');
            $table->string('merkmeter');
            $table->string('kondisimeter');
            $table->date('tgl_lahir');
            $table->string('petugas');
            $table->string('khusus');
            $table->text('Catatan');
            $table->string('lat');
            $table->string('lng');
            $table->timestamp('tanggalupd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t4pelanggan');
    }
}
