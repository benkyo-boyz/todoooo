<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    protected $article;

    public function __construct(Article $article)
     {
         $this->article = $article;
     }

    public function getIndex()
     {
        $articles = $this->article->all();

        return view('articles.index')->with(compact('articles'));
     }

     public function getShow()
     {

     }

     public function getCreate()
     {
        return view('articles.create');
     }

     public function postCreate(Request $request)
     {
        $data = $request->all();
        $this->article->fill($data);
        $this->article->save();

        return redirect()->to('articles/index');
     }

     public function getEdit()
     {

     }

     public function postEdit()
     {

     }

     public function postDelete()
     {

     }
}
