<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GifController extends Controller
{
    public function addForm()
    {
        return view('gif.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'image' => ['required', 'mimes:jpeg,jpg,png,gif'],
                'title' => 'required',
            ],
            [
                'image.required' => 'Image is required',
                'image.mimes' => 'This types of file is not allowed',
                'title.required' => 'Title is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/gif');
            $fileName = str_replace('public/','storage/',$fileName);
        }
        $data = [
            'image' => $fileName,
            'title' => $request->title,
        ];
        $saved = DB::table('gifs')->insert($data);
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
            $rows = DB::table('gifs')
                ->where('title', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $rows = DB::table('gifs')
                ->paginate(50);
        }
        return view('gif.index', compact('rows'));
    }

    public function edit($id)
    {
        $row = DB::table('gifs')
            ->where('id', $id)
            ->first();
        return view('gif.edit', compact('row'));
    }

    public function delete($id)
    {
        DB::table('gifs')
            ->where('id', $id)
            ->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title' => 'required',
            ],
            [
                'title.required' => 'English title is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/gif');
            $fileName = str_replace('public/','storage/',$fileName);
            $data = [
                'image' => $fileName,
                'title' => $request->title,
            ];
        }else{
            $data = [
                'title' => $request->title,
            ];
        }
        $saved = DB::table('gifs')->where('id', $request->id)->update($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully updated!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
