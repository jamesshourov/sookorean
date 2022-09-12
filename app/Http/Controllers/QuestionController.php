<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function addForm($id)
    {
        $level_id = $id;
        $level = DB::table('levels')->where('id', $level_id)->first();
        $category = DB::table('categories')->where('id', $level->category_id)->first();
        return view('question.add', compact('level_id', 'level', 'category'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title_english' => 'required',
                'answer' => 'required',
                'options_english' => 'required',
                'level_id' => 'required',
            ],
            [
                'title_english.required' => 'English title is required',
                'answer.required' => 'Answer is required',
                'options_english.required' => 'Options are required',
                'level_id.required' => 'No level selected',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/question');
            $image = str_replace('public/', 'storage/', $image);
        }
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio')->store('public/question');
            $audio = str_replace('public/', 'storage/', $audio);
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video')->store('public/question');
            $video = str_replace('public/', 'storage/', $video);
        }
        $data = [
            'image' => $request->hasFile('image') ? $image : null,
            'audio' => $request->hasFile('audio') ? $audio : null,
            'video' => $request->hasFile('video') ? $video : null,
            'title' => $request->title,
            'title_english' => $request->title_english,
            'title_japanese' => $request->title_japanese,
            'title_french' => $request->title_french,
            'title_spanish' => $request->title_spanish,
            'title_arabic' => $request->title_arabic,
            'answer' => $request->answer,
            'level_id' => $request->level_id,
        ];
        $id = DB::table('questions')->insertGetId($data);
        $options = $request->options_english;
        $options_japanese = $request->options_japanese;
        $options_french = $request->options_french;
        $options_spanish = $request->options_spanish;
        $optionValues = $request->option_values;
        if (count($options) > 0) {
            for ($i = 0, $n = count($options); $i < $n; $i++) {
                $option = $options[$i];
                $option_japanese = $options_japanese[$i];
                $option_french = $options_french[$i];
                $option_spanish = $options_spanish[$i];
                $optionValue = $optionValues[$i];
                if (!empty($option) && !empty($optionValue)) {
                    DB::table('options')->insert([
                        'question_id' => $id,
                        'option_title_english' => $option,
                        'option_title_japanese' => $option_japanese,
                        'option_title_french' => $option_french,
                        'option_title_spanish' => $option_spanish,
                        'option_value' => $optionValue,
                    ]);
                }
            }
            if ($id) {
                return redirect()->back()->with('success', 'Successfully saved!');
            } else {
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        } else {
            return redirect()->back()->with('Please add at least one option');
        }
    }

    public function all($id, Request $request)
    {
        $level = DB::table('levels')
            ->where('id', $id)
            ->first();
        $keyword = $request->keyword;
        if (!empty($keyword)) {
            $rows = DB::table('questions')
                ->where('title_english', 'like', '%' . $keyword . '%')
                ->paginate(50);
        } else {
            $rows = DB::table('questions')
                ->where('level_id', $id)
                ->paginate(50);
        }
        return view('question.index', compact('rows', 'level'));
    }

    public function edit($id)
    {
        $row = DB::table('questions')
            ->where('id', $id)
            ->first();
        $options = DB::table('options')
            ->where('question_id', $id)
            ->get();
        $level = DB::table('levels')->where('id', $row->level_id)->first();
        $category = DB::table('categories')->where('id', $level->category_id)->first();
        return view('question.edit', compact('row', 'options', 'category'));
    }

    public function delete($id)
    {
        DB::table('questions')
            ->where('id', $id)
            ->delete();
        DB::table('options')->where('question_id', $id)->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title_english' => 'required',
                'answer' => 'required',
                'options_english' => 'required',
                'id' => 'required',
            ],
            [
                'title_english.required' => 'English title is required',
                'answer.required' => 'Answer is required',
                'options_english.required' => 'Options are required',
                'id.required' => 'Question id is required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = array();
        $data['title'] = $request->title;
        $data['title_english'] = $request->title_english;
        $data['title_japanese'] = $request->title_japanese;
        $data['title_french'] = $request->title_french;
        $data['title_spanish'] = $request->title_spanish;
        $data['title_arabic'] = $request->title_arabic;
        $data['answer'] = $request->answer;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/question');
            $image = str_replace('public/', 'storage/', $image);
            $data['image'] = $image;
        }
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio')->store('public/question');
            $audio = str_replace('public/', 'storage/', $audio);
            $data['audio'] = $audio;
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video')->store('public/question');
            $video = str_replace('public/', 'storage/', $video);
            $data['video'] = $video;
        }
        $updated = DB::table('questions')->where('id', $request->id)->update($data);
        DB::table('options')->where('question_id', $request->id)->delete();
        $options = $request->options_english;
        $optionValues = $request->option_values;
        $options_japanese = $request->options_japanese;
        $options_french = $request->options_french;
        $options_spanish = $request->options_spanish;
        if (count($options) > 0) {
            for ($i = 0, $n = count($options); $i < $n; $i++) {
                $option = $options[$i];
                $option_japanese = $options_japanese[$i];
                $option_french = $options_french[$i];
                $option_spanish = $options_spanish[$i];
                $optionValue = $optionValues[$i];
                if (!empty($option) && !empty($optionValue)) {
                    DB::table('options')->insert([
                        'question_id' => $request->id,
                        'option_title_english' => $option,
                        'option_title_japanese' => $option_japanese,
                        'option_title_french' => $option_french,
                        'option_title_spanish' => $option_spanish,
                        'option_value' => $optionValue,
                    ]);
                }
            }
            if ($updated) {
                return redirect()->back()->with('success', 'Successfully updated!');
            } else {
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        } else {
            return redirect()->back()->with('Please add at least one option');
        }
    }
}
