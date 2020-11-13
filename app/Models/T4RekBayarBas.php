<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class T4RekBayarBas extends Model
{
    protected $table = 't4rekbayarbas';

    protected $fillable = [
        'idpel',
        'idjln',
        'kdpellama',
        'keltarif',
        'gol',
        'kelompok',
        'novocer',
        'aktno',
        'bulan',
        'meter_sbl',
        'meter_skr',
        'mpakai',
        'minn',
        'adm',
        'dmeter',
        'dlain',
        'denda',
        'h1',
        'h2',
        'h3',
        'h4',
        's1',
        's2',
        's3',
        's4',
        'total',
        'tanggal',
        'loket',
        'users',
        'setatus',
        'keterangan',
        'haspaid',
        'harga',
        'waktu',
        'statuscetak',
        'tanggalupload',
        'kantorbayar'
    ];

    public $timestamps = false;

    public function t4pelanggan()
    {
        return $this->belongsTo(T4Pelanggan::class, 'idpel', 'idpel');
    }

    public static function t4RekBayarBasGetAllWithT4Pelanggan()
    {
        return DB::table('t4rekbayarbas')
            ->join('t4pelanggan', 't4rekbayarbas.idpel', '=', 't4pelanggan.idpel')
            ->select(
                't4rekbayarbas.idpel',
                't4rekbayarbas.idjln',
                't4rekbayarbas.kdpellama',
                't4rekbayarbas.keltarif',
                't4rekbayarbas.gol',
                't4rekbayarbas.kelompok',
                't4rekbayarbas.novocer',
                't4rekbayarbas.aktno',
                't4rekbayarbas.bulan',
                't4rekbayarbas.meter_sbl',
                't4rekbayarbas.meter_skr',
                't4rekbayarbas.mpakai',
                't4rekbayarbas.minn',
                't4rekbayarbas.adm',
                't4rekbayarbas.dmeter',
                't4rekbayarbas.dlain',
                't4rekbayarbas.denda',
                't4rekbayarbas.h1',
                't4rekbayarbas.h2',
                't4rekbayarbas.h3',
                't4rekbayarbas.h4',
                't4rekbayarbas.s1',
                't4rekbayarbas.s2',
                't4rekbayarbas.s3',
                't4rekbayarbas.s4',
                't4rekbayarbas.total',
                't4rekbayarbas.tanggal',
                't4rekbayarbas.loket',
                't4rekbayarbas.users',
                't4rekbayarbas.setatus',
                't4rekbayarbas.keterangan',
                't4rekbayarbas.haspaid',
                't4rekbayarbas.harga',
                't4rekbayarbas.waktu',
                't4rekbayarbas.statuscetak',
                't4rekbayarbas.tanggalupload',
                't4rekbayarbas.kantorbayar',
                't4pelanggan.namapel',
                't4pelanggan.alamat',
                't4pelanggan.RT',
                't4pelanggan.RW',
                't4pelanggan.Desa',
                't4pelanggan.Kecamatan',
                't4pelanggan.Contact',
                't4pelanggan.telp'
            );
    }
}
