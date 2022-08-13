<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BenefitController extends Controller
{
    public function addForm()
    {
        return view('benefit.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'image' => ['mimes:jpeg,jpg,png,gif'],
                'title_english' => 'required',
                'description_english' => 'required',
            ],
            [
                'image.mimes' => 'This types of file is not allowed',
                'title_english.required' => 'English title is required',
                'description_english.required' => 'English description is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/benefit');
            $fileName = str_replace('public/','storage/',$fileName);
        }
        $data = [
            'image' => $fileName ?: '',
            'title_english' => $request->title_english,
            'title_japanese' => $request->title_japanese,
            'title_french' => $request->title_french,
            'title_spanish' => $request->title_spanish,
            'title_arabic' => $request->title_arabic,
            'description_english' => $request->description_english,
            'description_japanese' => $request->description_japanese,
            'description_french' => $request->description_french,
            'description_spanish' => $request->description_spanish,
            'description_arabic' => $request->description_arabic,
        ];
        $saved = DB::table('benefits')->insert($data);
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
            $rows = DB::table('benefits')
                ->where('title_english', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $rows = DB::table('benefits')
                ->paginate(50);
        }
        return view('benefit.index', compact('rows'));
    }

    public function edit($id)
    {
        $row = DB::table('benefits')
            ->where('id', $id)
            ->first();
        return view('benefit.edit', compact('row'));
    }

    public function delete($id)
    {
        DB::table('benefits')
            ->where('id', $id)
            ->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title_english' => 'required',
                'description_english' => 'required',
            ],
            [
                'title_english.required' => 'English title is required',
                'description_english.required' => 'English description is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/benefit');
            $fileName = str_replace('public/','storage/',$fileName);
            $data = [
                'image' => $fileName,
                'title_english' => $request->title_english,
                'title_japanese' => $request->title_japanese,
                'title_french' => $request->title_french,
                'title_spanish' => $request->title_spanish,
                'title_arabic' => $request->title_arabic,
                'description_english' => $request->description_english,
                'description_japanese' => $request->description_japanese,
                'description_french' => $request->description_french,
                'description_spanish' => $request->description_spanish,
                'description_arabic' => $request->description_arabic,
            ];
        }else{
            $data = [
                'title_english' => $request->title_english,
                'title_japanese' => $request->title_japanese,
                'title_french' => $request->title_french,
                'title_spanish' => $request->title_spanish,
                'title_arabic' => $request->title_arabic,
                'description_english' => $request->description_english,
                'description_japanese' => $request->description_japanese,
                'description_french' => $request->description_french,
                'description_spanish' => $request->description_spanish,
                'description_arabic' => $request->description_arabic,
            ];
        }
        $saved = DB::table('benefits')->where('id', $request->id)->update($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully updated!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
