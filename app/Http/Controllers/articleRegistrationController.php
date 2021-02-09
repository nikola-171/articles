<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Article;

class articleRegistrationController extends Controller
{
    const SUCCESS = 'you sucessfully posted a blog';

    public function register_article(Request $request){
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required|max:255',
            'author' => 'required|max:50',
            'date' => 'required'
        ]);

        $data = [
            'title' =>  $request->input('title', 50),
            'content' => $request->input('content'),
            'author' => $request->input('author', 50),
            'date' => $request->input('date')
        ];

        Article::create($data);

        return view('home')->with('success', articleRegistrationController::SUCCESS);
    }
}
