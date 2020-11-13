<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class T4Pelanggan extends Model
{
    protected $table = 't4pelanggan';

    protected $fillable = [
        'idno',
        'idpel',
        'idjln',
        'namapel',
        'kelompok',
        'ketkelompok',
        'kdpellama',
        'alamat',
        'RT',
        'RW',
        'Desa',
        'Kecamatan',
        'Contact',
        'telp',
        'urut',
        'Loket',
        'last_update',
        'user_id',
        'idprop',
        'rute',
        'urutrute',
        'mtrid',
        'typemtr',
        'tglinstall',
        'jmldigit',
        'idlama',
        'tglbaca',
        'angkamtr',
        'lokasimtr',
        'artikel',
        'urutno',
        'setatus',
        'sub_id',
        'agrtid',
        'npa_lama',
        'snmeter',
        'idpbr',
        'keterangan',
        'merkmeter',
        'kondisimeter',
        'tgl_lahir',
        'petugas',
        'khusus',
        'Catatan',
        'lat',
        'lng',
        'tanggalupd'
    ];

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'idpel';
    }

    public static function getDataT4Pelanggan()
    {
        return DB::table('t4pelanggan')
            ->select();
    }

    public static function getProfileT4Pelanggan()
    {
        return DB::table('t4pelanggan')
            ->select(
                'namapel',
                'kelompok',
                'kdpellama',
                'alamat',
                'RT',
                'RW',
                'Desa',
                'Kecamatan',
                'Contact',
                'telp',
                'tgl_lahir',
                'lat',
                'lng'
            );
    }
}
