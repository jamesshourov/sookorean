<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
    public function addForm()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => ['required', 'string', 'email', 'unique:users'],
                'date_of_birth' => 'required',
                'korean_level' => 'required',
                'premium' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.unique' => 'Email already used',
                'premium.required' => 'Membership type is required',
                'password.required' => 'Password is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'korean_level' => $request->korean_level,
            'premium' => $request->premium,
            'password' => Hash::make($request->password),
        ];
        $saved = DB::table('users')->insert($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully saved!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function all(Request $request)
    {
        $keyword = $request->keyword;
        if (!empty($keyword)) {
            $users = DB::table('users')
                ->where('role', 'user')
                ->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('email', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $users = DB::table('users')
                ->where('role', 'user')
                ->paginate(50);
        }
        $title = 'All Users';
        return view('user.index', compact('users', 'title'));
    }

    public function edit($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->first();
        return view('user.edit', compact('user'));
    }

    public function delete($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => ['required', 'string', 'email'],
                'date_of_birth' => 'required',
                'korean_level' => 'required',
                'premium' => 'required'
            ],
            [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.unique' => 'Email already used',
                'premium.required' => 'Membership type is required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (!empty($request->password)){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'korean_level' => $request->korean_level,
                'premium' => $request->premium,
                'password' => Hash::make($request->password),
            ];
        }else{
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'korean_level' => $request->korean_level,
                'premium' => $request->premium,
            ];
        }
        $saved = DB::table('users')->where('id', $request->id)->update($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully saved!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function free(Request $request)
    {
        $keyword = $request->keyword;
        if (!empty($keyword)) {
            $users = DB::table('users')
                ->where('role', 'user')
                ->where('premium', 0)
                ->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('email', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $users = DB::table('users')
                ->where('role', 'user')
                ->where('premium', 0)
                ->paginate(50);
        }
        $title = 'Free Users';
        return view('user.index', compact('users','title'));
    }

    public function premium(Request $request)
    {
        $keyword = $request->keyword;
        if (!empty($keyword)) {
            $users = DB::table('users')
                ->where('role', 'user')
                ->where('premium', 1)
                ->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('email', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $users = DB::table('users')
                ->where('role', 'user')
                ->where('premium', 1)
                ->paginate(50);
        }
        $title = 'Premium Users';
        return view('user.index', compact('users','title'));
    }
}
