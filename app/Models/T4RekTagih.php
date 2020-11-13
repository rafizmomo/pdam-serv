<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class T4RekTagih extends Model
{
    protected $table = 't4rektagih';

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
        'Keterangan',
        'haspaid',
        'harga',
        'waktu',
        'tanggalupd'
    ];

    public $timestamps = false;

    public function t4pelanggan()
    {
        return $this->belongsTo(T4Pelanggan::class, 'idpel', 'idpel');
    }

    public static function t4RekTagihGetAllWithT4Pelanggan()
    {
        return DB::table('t4rektagih')
            ->join('t4pelanggan', 't4rektagih.idpel', '=', 't4pelanggan.idpel')
            ->select(
                't4rektagih.idpel',
                't4rektagih.denda',
                't4rektagih.total',
                't4rektagih.tanggal',
                't4rektagih.harga',
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
