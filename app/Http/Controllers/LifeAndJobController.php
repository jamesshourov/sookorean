<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LifeAndJobController extends Controller
{
    public function addForm()
    {
        return view('job.add');
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
            $fileName = $request->file('image')->store('public/jobs');
            $fileName = str_replace('public/','storage/',$fileName);
        }
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
            'publisher' => $request->publisher,
        ];
        $saved = DB::table('life_and_jobs')->insert($data);
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
            $rows = DB::table('life_and_jobs')
                ->where('title_english', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $rows = DB::table('life_and_jobs')
                ->paginate(50);
        }
        return view('job.index', compact('rows'));
    }

    public function edit($id)
    {
        $row = DB::table('life_and_jobs')
            ->where('id', $id)
            ->first();
        return view('job.edit', compact('row'));
    }

    public function delete($id)
    {
        DB::table('life_and_jobs')
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
            $fileName = $request->file('image')->store('public/jobs');
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
                'publisher' => $request->publisher,
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
                'publisher' => $request->publisher,
            ];
        }
        $saved = DB::table('life_and_jobs')->where('id', $request->id)->update($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully updated!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
