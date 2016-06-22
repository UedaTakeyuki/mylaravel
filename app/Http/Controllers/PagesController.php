<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function about() {
        // 配列に値をセット
        /*
        $data = [];
        $data["first_name"] = "Luke";
        $data["last_name"] = "Skywalker";

        // view関数の第２引数に配列を渡す
        return view('pages.about', $data);        
        */
        // ↓上と同じ
        // 変数に値をセット
        $first_name = "Luke";
        $last_name = "Skywalker";
 
        // view関数の第２引数に compact関数を使う
        return view('pages.about', compact('first_name', 'last_name'));        
       
        /* 以前のコード
        return view('pages.about');
        */
    }
    public function contact() {
        return view('pages.contact');
    }
}
