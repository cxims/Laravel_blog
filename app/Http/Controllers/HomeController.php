<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $articles = Article::orderBy('created_at', 'desc')->simplePaginate(20);
        return view('home', [
            'allArticles' => $articles
        ]);
    }
}
