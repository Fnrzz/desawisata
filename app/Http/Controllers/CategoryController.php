<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('admin.category-create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        return redirect('/admin/category');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category-edit', compact('category'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $category = Category::find($id);
        $category->update([
            'name' => $request->name
        ]);

        return redirect('/admin/category');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/category');
    }
}
