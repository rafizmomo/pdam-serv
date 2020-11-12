<?php

namespace App\Http\Controllers\API\Admin;

use App\Helpers\APIHelpers;
use App\Http\Controllers\Controller;
use App\Models\T4Pelanggan;
use Illuminate\Http\Request;
use App\Http\Requests\T4PelangganRequest;

class T4PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = T4Pelanggan::all();

        $response = APIHelpers::createAPIResponse(false, 200, '', $data);
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
        //FIXME CEK KEMBALI REQUEST 

        $data = $request->all();
        $data_save = T4Pelanggan::create($data);

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
    public function show($idpel)
    {
        $item =  T4Pelanggan::getDataT4Pelanggan()->where('idpel', $idpel)->get();

        if ($item != null) {
            $response = APIHelpers::createAPIResponse(false, 200, 'Data ' . $idpel . ' Found', $item);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 404, 'Data ' . $idpel . ' Not Found', null);
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
    public function update(Request $request, $idpel)
    {
        $item =  T4Pelanggan::getDataT4Pelanggan()->where('idpel', $idpel)->get();

        if ($item != null) {
            $response = APIHelpers::createAPIResponse(false, 200, 'Data ' . $idpel . ' Found', $item);
            return response()->json($response, 200);
        } else {
            $response = APIHelpers::createAPIResponse(true, 404, 'Data ' . $idpel . ' Not Found', null);
            return response()->json($response, 404);
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
        //
    }
}
