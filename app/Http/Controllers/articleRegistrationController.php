<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Article;

class articleRegistrationController extends Controller
{
    //add new article
    public function register_article(Request $request){
        $data = [
            'title' =>  $request->input('title', 50),
            'content' => $request->input('content'),
            'author' => $request->input('author', 50),
            'date' => $request->input('date')
        ];

        Article::create($data);

        return redirect('/');
    }
}
