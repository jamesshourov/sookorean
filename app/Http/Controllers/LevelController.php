<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    public function addForm()
    {
        $categories = DB::table('categories')->get();
        return view('level.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'image' => ['mimes:jpeg,jpg,png,gif'],
                'title_english' => 'required',
                'category_id' => 'required',
            ],
            [
                'image.mimes' => 'This types of file is not allowed',
                'title_english.required' => 'English title is required',
                'category_id.required' => 'Category is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/level');
            $fileName = str_replace('public/','storage/',$fileName);
            $data = [
                'image' => $fileName,
                'title_english' => $request->title_english,
                'title_japanese' => $request->title_japanese,
                'title_french' => $request->title_french,
                'title_spanish' => $request->title_spanish,
                'title_arabic' => $request->title_arabic,
                'category_id' => $request->category_id,
            ];
        }else{
            $data = [
                'title_english' => $request->title_english,
                'title_japanese' => $request->title_japanese,
                'title_french' => $request->title_french,
                'title_spanish' => $request->title_spanish,
                'title_arabic' => $request->title_arabic,
                'category_id' => $request->category_id,
            ];
        }
        $saved = DB::table('levels')->insert($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully saved!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function all(Request $request)
    {
        $categories = DB::table('categories')->get();
        $keyword = $request->keyword;
        $category_id = $request->category_id;
        $query = DB::table('levels')
            ->select('levels.*', 'categories.title_english as category_name')
            ->join('categories', 'categories.id', '=', 'levels.category_id');
        if (!empty($keyword)){
            $query->where('levels.title_english', 'like', '%' . $keyword . '%');
        }
        if (!empty($category_id)){
            $query->where('categories.id', $category_id);
        }
        $rows = $query->paginate(50);
        return view('level.index', compact('rows', 'categories'));
    }

    public function edit($id)
    {
        $categories = DB::table('categories')->get();
        $row = DB::table('levels')
            ->where('id', $id)
            ->first();
        return view('level.edit', compact('row', 'categories'));
    }

    public function delete($id)
    {
        DB::table('levels')
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
                'category_id' => 'required',
            ],
            [
                'title_english.required' => 'English title is required',
                'description_english.required' => 'English description is required',
                'category_id.required' => 'Category is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('public/level');
            $fileName = str_replace('public/','storage/',$fileName);
            $data = [
                'image' => $fileName,
                'title_english' => $request->title_english,
                'title_japanese' => $request->title_japanese,
                'title_french' => $request->title_french,
                'title_spanish' => $request->title_spanish,
                'title_arabic' => $request->title_arabic,
                'category_id' => $request->category_id,
            ];
        }else{
            $data = [
                'title_english' => $request->title_english,
                'title_japanese' => $request->title_japanese,
                'title_french' => $request->title_french,
                'title_spanish' => $request->title_spanish,
                'title_arabic' => $request->title_arabic,
                'category_id' => $request->category_id,
            ];
        }
        $saved = DB::table('levels')->where('id', $request->id)->update($data);
        if ($saved) {
            return redirect()->back()->with('success', 'Successfully updated!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
