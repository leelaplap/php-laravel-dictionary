<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function index(){
        return view('show_dictionary');
    }

    public function diction(Request $request)
    {
        $eng = $request->eng;
        $mess = 'khong co';
        $arr = ['hello' => "xin chao",
            'dog' => "cho"];

        foreach ($arr as $key => $value) {
            if ($eng == $key) {
                $mess = $value;
            }

        }
        return view('result', compact('mess'));

    }
}
