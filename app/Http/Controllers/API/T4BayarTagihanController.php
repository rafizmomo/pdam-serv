<?php

namespace App\Http\Controllers\API;

use App\Helpers\APIHelpers;
use App\Http\Controllers\Controller;
use App\Models\T4RekBayarBas;
use App\Models\T4RekTagih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            ->first();
        $user = Auth::user(); //dapatin kantornya
        $haspaid = 1; //NOTE Telah dibayar
        $status_cetak = 0; //FIXME untuk nanti kedepannya

        $item_rekbayar = T4RekBayarBas::create([
            'idpel' => $item_rektagih->idpel,
            'idjln' => $item_rektagih->idjln,
            'kdpellama'  => $item_rektagih->kdpellama,
            'keltarif' => $item_rektagih->keltarif,
            'gol'  => $item_rektagih->gol,
            'kelompok'  => $item_rektagih->kelompok,
            'novocer' => $item_rektagih->novocer,
            'aktno' => $item_rektagih->aktno,
            'bulan' => $item_rektagih->bulan,
            'meter_sbl' => $item_rektagih->meter_sbl,
            'meter_skr' => $item_rektagih->meter_skr,
            'mpakai' => $item_rektagih->mpakai,
            'minn' => $item_rektagih->minn,
            'adm' => $item_rektagih->adm,
            'dmeter' => $item_rektagih->dmeter,
            'dlain' => $item_rektagih->dlain,
            'denda' => $item_rektagih->denda,
            'h1' => $item_rektagih->h1,
            'h2' => $item_rektagih->h2,
            'h3' => $item_rektagih->h3,
            'h4' => $item_rektagih->h4,
            's1' => $item_rektagih->s1,
            's2' => $item_rektagih->s2,
            's3' => $item_rektagih->s3,
            's4' => $item_rektagih->s4,
            'total' => $item_rektagih->total,
            'tanggal' => $item_rektagih->tanggal,
            'loket' => $item_rektagih->loket,
            'users' => $item_rektagih->users,
            'setatus' => $item_rektagih->setatus,
            'keterangan' => $item_rektagih->Keterangan,
            'haspaid' => $haspaid,
            'harga' => $item_rektagih->harga,
            'waktu' => DB::raw('now()'),
            'statuscetak' => $status_cetak,
            'tanggalupload' => DB::raw('now()'),
            'kantorbayar' => $user->kantor,
        ]);


        if ($item_rekbayar) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Data Added Success', $item_rekbayar);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Data Added Failed', null);
            return response()->json($response, 400);
        }
    }

    public function lihat(Request $request)
    {
        $search = $request->input('idpel');
        $item_rektagih =  T4RekTagih::where('idpel', '=', $search)
            ->get();

        if ($item_rektagih) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Data Added Success', $item_rektagih);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Data Added Failed', null);
            return response()->json($response, 400);
        }
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
