<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $recent_posts = Article::limit(3)->get();
        return view('index', compact('recent_posts'));
    }
}
