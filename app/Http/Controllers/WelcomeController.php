<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class WelcomeController extends Controller
{
    function show_articles(){
        $articles = Article::orderBy('id','DESC')->get();

        return view('welcome')->with('articles', $articles);
    }
}
