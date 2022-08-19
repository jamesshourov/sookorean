<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function privacy()
    {
        $content = DB::table('privacy_policies')->first();
        return view('privacy', compact('content'));
    }

    public function updatePrivacy(Request $request)
    {
        $content = DB::table('privacy_policies')->first();
        $data = array(
            'content' => $request->data
        );
        if ($content) {
            $updated = DB::table('privacy_policies')->update($data);
            if ($updated) {
                return redirect()->back()->with('success', 'Successfully updated!');
            } else {
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        }else{
            $updated = DB::table('privacy_policies')->insert($data);
            if ($updated) {
                return redirect()->back()->with('success', 'Successfully updated!');
            } else {
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        }
    }

    public function terms()
    {
        $content = DB::table('terms_and_conditions')->first();
        return view('terms', compact('content'));
    }

    public function updateTerms(Request $request)
    {
        $content = DB::table('terms_and_conditions')->first();
        $data = array(
            'content' => $request->data
        );
        if ($content) {
            $updated = DB::table('terms_and_conditions')->update($data);
            if ($updated) {
                return redirect()->back()->with('success', 'Successfully updated!');
            } else {
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        }else{
            $updated = DB::table('terms_and_conditions')->insert($data);
            if ($updated) {
                return redirect()->back()->with('success', 'Successfully updated!');
            } else {
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        }
    }
}
