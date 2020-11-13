<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\T4RekBayarBas;
use App\Models\T4RekTagih;
use Illuminate\Http\Request;

class T4BayarTagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function bayar(Request $request)
    {
        $search = $request->input('idpel');
        $item_rektagih =  T4RekTagih::where('idpel', '=', $search)
            ->get();

        /*$item_rekbayar = T4RekBayarBas::create([
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
        ]);*/


        //$store = T4RekBayarBas::create($item);
        return response()->json($item_rektagih);
    }

    public function lihat()
    {
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
