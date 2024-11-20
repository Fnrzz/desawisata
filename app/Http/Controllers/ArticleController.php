<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    
    public function create(){
        $categories = Category::all();
        return view('admin.article-create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'image' => 'required|image'
        ]);

        $image = $request->file('image');
        $nameFile = rand() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('images', $nameFile, 'public');

        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'image' => $nameFile
        ]);

        return redirect('/admin');
    }

    public function edit($id){
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.article-edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $article = Article::find($id);
        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $nameFile = rand() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->delete('images/' . $article->image);
            $image->storeAs('images', $nameFile, 'public');
            $article->update([
                'image' => $nameFile
            ]);
        }

        return redirect('/admin');
    }
    
    public function delete($id){
        $article = Article::find($id);
        Storage::disk('public')->delete('images/' . $article->image);
        $article->delete();
        return redirect('/admin');
    }
}
