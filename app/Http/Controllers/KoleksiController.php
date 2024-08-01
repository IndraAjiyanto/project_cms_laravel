<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class KoleksiController extends Controller
{
    public function index(){
        return view('koleksi',['articles'=> Article::all()]);
    }

}
