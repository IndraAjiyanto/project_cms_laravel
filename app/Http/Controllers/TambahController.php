<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function index(){
        return view('tambah',['tittle'=>'Tambah Article']);
    }
}
