<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\article;

class webcontroller extends Controller
{
    public function home(){
        $article = article::all();
        return view('welcome',compact('article'));
    }
}
