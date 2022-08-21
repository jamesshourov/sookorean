<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LearnContentController extends Controller
{
    public function addForm($id)
    {
        $category_id = $id;
        $category = DB::table('learn_subcategories')->where('id', $category_id)->first();
        return view('learn-content.add', compact('category_id', 'category'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title_english' => 'required',
                'category_id' => 'required',
            ],
            [
                'title_english.required' => 'English title is required',
                'category_id.required' => 'No category selected',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/learn');
            $image = str_replace('public/', 'storage/', $image);
        }
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio')->store('public/learn');
            $audio = str_replace('public/', 'storage/', $audio);
        }
        $data = [
            'thumbnail' => $request->hasFile('image') ? $image : null,
            'audio' => $request->hasFile('audio') ? $audio : null,
            'video_link' => $request->video_link,
            'title_english' => $request->title_english,
            'title_japanese' => $request->title_japanese,
            'title_french' => $request->title_french,
            'title_spanish' => $request->title_spanish,
            'title_arabic' => $request->title_arabic,
            'description_english' => $request->title_english,
            'description_japanese' => $request->title_japanese,
            'description_french' => $request->title_french,
            'description_spanish' => $request->title_spanish,
            'description_arabic' => $request->title_arabic,
            'category_id' => $request->category_id,
        ];
        $saved = DB::table('learn_contents')->insert($data);
        if ($saved){
            return redirect()->back()->with('success', 'Successfully saved!');
        }else{
            return redirect()->back()->with('error', 'Something Went wrong!');
        }
    }

    public function all($id, Request $request)
    {
        $category = DB::table('learn_subcategories')
            ->where('id', $id)
            ->first();
        $keyword = $request->keyword;
        if (!empty($keyword)) {
            $rows = DB::table('learn_contents')
                ->where('category_id', $id)
                ->where('title_english', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $rows = DB::table('learn_contents')
                ->where('category_id', $id)
                ->paginate(50);
        }
        return view('learn-content.index', compact('rows', 'category'));
    }

    public function edit($id)
    {
        $row = DB::table('learn_contents')
            ->where('id', $id)
            ->first();
        return view('learn-content.edit', compact('row'));
    }

    public function delete($id)
    {
        DB::table('learn_contents')
            ->where('id', $id)
            ->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title_english' => 'required',
                'id' => 'required',
            ],
            [
                'title_english.required' => 'English title is required',
                'id.required' => 'Question id is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = array();
        $data['title_english'] = $request->title_english;
        $data['title_japanese'] = $request->title_japanese;
        $data['title_french'] = $request->title_french;
        $data['title_spanish'] = $request->title_spanish;
        $data['title_arabic'] = $request->title_arabic;
        $data['description_english'] = $request->description_english;
        $data['description_japanese'] = $request->description_japanese;
        $data['description_french'] = $request->description_french;
        $data['description_spanish'] = $request->description_spanish;
        $data['description_arabic'] = $request->description_arabic;
        $data['video_link'] = $request->video_link;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/learn');
            $image = str_replace('public/', 'storage/', $image);
            $data['thumbnail'] = $image;
        }
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio')->store('public/learn');
            $audio = str_replace('public/', 'storage/', $audio);
            $data['audio'] = $audio;
        }
        $updated = DB::table('learn_contents')->where('id', $request->id)->update($data);
        if ($updated) {
            return redirect()->back()->with('success', 'Successfully updated!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
