<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.api:api', ['except' => ['login','signup']]);
    }
    public function signup(Request $request){
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'social_type' => 'required',
                'email' => ['string', 'email', 'unique:users', 'required_if:social_type,normal'],
                'password' => ['required_if:social_type,normal'],
            ],
            [
                'social_type.required' => 'Social type is required',
                'name.required' => 'Name is required',
                'email.required_if' => 'Email is required',
                'password.required_if' => 'Password is required',
                'email.unique' => 'Email already used',
            ]
        );
        if ($validator->fails()) {
            $status = false;
            $errors = $validator->errors();
            return response()->json(compact('status', 'errors'));
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'korean_level' => $request->korean_level,
            'premium' => $request->premium,
            'social_type' => $request->social_type,
            'social_id' => $request->social_id,
            'device_type' => $request->device_type,
            'password' => Hash::make($request->password),
        ];
        $saved = DB::table('users')->insert($data);
        if ($saved) {
            $status = true;
            $message = 'Successfully signup.';
            return response()->json(compact('status', 'message'));
        } else {
            $status = false;
            $message = 'Something went wrong';
            return response()->json(compact('status', 'message'));
        }
    }
}
