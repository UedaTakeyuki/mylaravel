<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class ArticlesController extends Controller
{
    //
    public function index() {
        $articles = Article::all();
 
        return view('articles.index', compact('articles'));
    }
 
    public function show($id) {
        // return $id;
        $article = Article::findOrFail($id);
         return view('articles.show', compact('article'));

    }
    
    public function create()
    {
        return view('articles.create');
    }
    
    public function store() {
        // ①フォームの入力値を取得
        $inputs = \Request::all();
 
        // ②マスアサインメントを使って、記事をDBに作成
        Article::create($inputs);
 
        // ③記事一覧へリダイレクト
        return redirect('articles');
    }
}
