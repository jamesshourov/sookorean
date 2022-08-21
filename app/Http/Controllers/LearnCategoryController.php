<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LearnCategoryController extends Controller
{
    public function addForm()
    {
        return view('learn-category.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'image' => ['mimes:jpeg,jpg,png,gif'],
                'title_english' => 'required',
            ],
            [
                'image.mimes' => 'This types of file is not allowed',
                'title_english.required' => 'English title is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/learn');
            $fileName = str_replace('public/','storage/',$fileName);
        }
        $data = [
            'image' => $request->hasFile('image') ? $fileName : null,
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
            'background_color' => $request->background_color,
            'subtitle_english' => $request->subtitle_english,
            'subtitle_japanese' => $request->subtitle_japanese,
            'subtitle_french' => $request->subtitle_french,
            'subtitle_spanish' => $request->subtitle_spanish,
            'subtitle_arabic' => $request->subtitle_arabic,
        ];
        $saved = DB::table('learn_categories')->insert($data);
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
            $rows = DB::table('learn_categories')
                ->where('title_english', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $rows = DB::table('learn_categories')
                ->paginate(50);
        }
        return view('learn-category.index', compact('rows'));
    }

    public function edit($id)
    {
        $row = DB::table('learn_categories')
            ->where('id', $id)
            ->first();
        return view('learn-category.edit', compact('row'));
    }

    public function delete($id)
    {
        DB::table('learn_categories')
            ->where('id', $id)
            ->delete();
        DB::table('learn_subcategories')
            ->where('category_id', $id)
            ->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title_english' => 'required',
            ],
            [
                'title_english.required' => 'English title is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/learn');
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
                'background_color' => $request->background_color,
                'subtitle_english' => $request->subtitle_english,
                'subtitle_japanese' => $request->subtitle_japanese,
                'subtitle_french' => $request->subtitle_french,
                'subtitle_spanish' => $request->subtitle_spanish,
                'subtitle_arabic' => $request->subtitle_arabic,
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
                'background_color' => $request->background_color,
                'subtitle_english' => $request->subtitle_english,
                'subtitle_japanese' => $request->subtitle_japanese,
                'subtitle_french' => $request->subtitle_french,
                'subtitle_spanish' => $request->subtitle_spanish,
                'subtitle_arabic' => $request->subtitle_arabic,
            ];
        }
        $saved = DB::table('learn_categories')->where('id', $request->id)->update($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully updated!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
