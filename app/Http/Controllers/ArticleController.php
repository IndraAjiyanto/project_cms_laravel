<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article',['articles'=> Article::all()]);
    }

    public function single(Article $article){
        return view('article_single',['tittle'=>$article->tittle, 'articles'=>$article, 'coments'=>$article->coment]);
    }
}
