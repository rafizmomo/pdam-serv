<?php

namespace App\Http\Controllers\API\Admin;

use App\Helpers\APIHelpers;
use App\Http\Controllers\Controller;
use App\Models\T4RekTagih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class T4RekTagihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ANCHOR GET ALL DATA
        //REVIEW INNER JOIN $rektagih_ij
        $rektagih_ij =  T4RekTagih::with(
            't4pelanggan'
        )->get();


        //REVIEW INNER JOIN SELECT $rektagih_ijs
        $rektagih_ijs =  T4RekTagih::select([
            'idpel', 'total', 'tanggal',
        ])->with([
            't4pelanggan:idpel,namapel,alamat,RT,RW,Desa,Kecamatan,Contact,telp'
        ])->get();


        //REVIEW INNER JOIN SELECT QUERY $rektagih3_ijsq
        $rektagih3_ijsq = T4RekTagih::select([
            'idpel', 'total', 'tanggal',
        ])->with(array('t4pelanggan' => function ($query) {
            $query->select('idpel', 'namapel');
        }))->get();


        //REVIEW INNER JOIN DATABASE $rektagih_db
        $rektagih_db = DB::table('t4rektagih')
            ->join('t4pelanggan', 't4rektagih.idpel', '=', 't4pelanggan.idpel')
            ->select(
                't4rektagih.idpel',
                't4rektagih.total',
                't4rektagih.tanggal',
                't4pelanggan.namapel',
                't4pelanggan.alamat',
                't4pelanggan.RT',
                't4pelanggan.RW',
                't4pelanggan.Desa',
                't4pelanggan.Kecamatan',
                't4pelanggan.Contact',
                't4pelanggan.telp'
            )->get();

        //REVIEW INNER JOIN DB FROM MODEL STATIC FUNCTION $rektagih_dbm
        $rektagih_dbm = T4RekTagih::t4RekTagihGetAllWithT4Pelanggan()->get();

        $response = APIHelpers::createAPIResponse(false, 200, '', $rektagih_dbm);
        return response()->json($response, 200);
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
        //REVIEW CEK KEMBALI REQUEST
        $data = $request->all();
        $data_save = T4RekTagih::create($data);

        if ($data_save) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Data Added Success', null);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Data Added Failed', null);
            return response()->json($response, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //REVIEW WITHOUT INNER JOIN 
        $t4rektagih =  T4RekTagih::find($id);

        //REVIEW INNER JOIN DATA ALL 
        $t4rektagih_ij =  T4RekTagih::with(
            't4pelanggan'
        )->find($id);

        //REVIEW INNER JOIN DATA ALL DB
        $t4rektagih_ijDB = T4RekTagih::t4RekTagihGetAllWithT4Pelanggan()->find($id);

        if ($t4rektagih_ijDB != null) {
            $response = APIHelpers::createAPIResponse(false, 200, 'Data ' . $id . ' Found', $t4rektagih_ijDB);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 404, 'Data ' . $id . ' Not Found', null);
            return response()->json($response, 404);
        }
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
        //REVIEW UPDATE DATA
        //FIXME UPDATE DATA


        $item = T4RekTagih::findOrFail($id);
        $data = $request->all();
        $item_update = $item->update($data);

        if ($item_update) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Data Update Success', null);
            return response()->json($response, 201);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Data Update Failed', null);
            return response()->json($response, 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //REVIEW DELETE DATA
        //FIXME DELETE DATA

        $item_destroy = T4RekTagih::destroy($id);

        //$item_destroy = DB::table('t4rekbayarbas')->where('id', $id)->delete();

        if ($item_destroy) {
            $response = APIHelpers::createAPIResponse(false, 200, 'Data Delete Success', null);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Data Delete Failed', null);
            return response()->json($response, 400);
        }
    }

    public function search(Request $request)
    {
        //REVIEW CEK KEMBALI REQUEST
        //$data = $request->all();

        //TODO PAKAI LARAVEL RESOURCE BIAR GAMPANG
        $search = $request->input('namapel');
        $item =  T4RekTagih::t4RekTagihGetAllWithT4Pelanggan()
            ->where('t4pelanggan.namapel', 'like', "%$search%")
            ->get();

        if ($item) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Data Added Success', $item);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Data Added Failed', null);
            return response()->json($response, 400);
        }

        //TODO Buat T4RekBayarBasRequest
    }
}
