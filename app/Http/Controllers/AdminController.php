<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.index', compact('articles'));
    }

    public function category()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }
}
