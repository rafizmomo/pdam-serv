<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /*NOTE
    
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
    */

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $response = ['token' => $token];
        return response()->json($response, 200);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()], 422);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response()->json($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response()->json($response, 422);
            }
        } else {
            $response = ["message" => 'User does not exist'];
            return response()->json($response, 422);
        }
    }
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response()->json($response, 200);
    }
}
