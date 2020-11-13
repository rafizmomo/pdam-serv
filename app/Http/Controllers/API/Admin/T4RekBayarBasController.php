<?php

namespace App\Http\Controllers\API\Admin;

use App\Helpers\APIHelpers;
use App\Http\Controllers\Controller;
use App\Models\T4RekBayarBas;
use Illuminate\Http\Request;

class T4RekBayarBasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function search(Request $request)
    {
        //REVIEW CEK KEMBALI REQUEST
        //$data = $request->all();

        //TODO PAKAI LARAVEL RESOURCE BIAR GAMPANG
        $search = $request->input('namapel');
        $item =  T4RekBayarBas::t4RekBayarBasGetAllWithT4Pelanggan()
            ->where('t4pelanggan.namapel', 'like', "%$search%")
            ->get();

        if (is_null($item)) {
            $response = APIHelpers::createAPIResponse(false, 200, 'Data Search Success', null);
            return response()->json($response, 200);
        } else if ($item) {
            $response = APIHelpers::createAPIResponse(false, 400, 'Data Search Failed',  $item);
            return response()->json($response, 400);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'Data Search Failed',  $item);
            return response()->json($response, 400);
        }

        //TODO Buat T4RekBayarBasRequest
    }
}
