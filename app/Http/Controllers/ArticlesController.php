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

     public function getShow($id)
     {
        $articles = $this->article->find($id);

        return view('articles.show')->withArticle($articles);
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

     public function getEdit($id)
     {
        $article = $this->article->find($id);
 
        return view('articles.edit')->withArticle($article);
     }

     public function postEdit(Request $request,$id)
     {
        $article = $this->article->find($id);
        $data = $request->all();
        $article->fill($data);
        $article->save();
 
        return redirect()->to('articles/index');

     }

     public function postDelete($id)
     {
        $article = $this->article->find($id);
        $article->delete();

        return redirect()->to('articles/index');
     }
}
