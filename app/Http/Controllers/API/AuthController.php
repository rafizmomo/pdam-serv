<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        //validation data
        $validateData = Validator::make(request()->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'c_password' => 'required|same:password',
        ]);
        if ($validateData->fails()) {
            return response()->json(['error' =>  $validateData->errors()], 401);
        }

        //Get Request Register
        $input = $request->all();

        //Hash Password
        $input['password'] = Hash::make($input['password']);

        //Create data from input
        $user = User::create($input);

        //make success token
        $success['token'] =  $user->createToken('nApp')->accessToken;

        //telling user name success
        $success['name'] =  $user->name;

        //respon json success
        return response()->json(['success' => $success], $this->successStatus);
    }
    public function login()
    {
    }
}
