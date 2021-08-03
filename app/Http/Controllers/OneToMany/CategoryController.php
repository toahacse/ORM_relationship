<?php

namespace App\Http\Controllers\OneToMany;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $serials = !is_null(request()->page) ? (request()->page-1) *20 : 0;
        $categories = Category::all();
        return view('one-to-many.category.index', compact('categories','serials'));
    }

    public function create(){
        return view('one-to-many.category.create');
    }

    public function store(Request $request){
        try {
            Category::create($request->all());
            return redirect(url('/ont-to-many/category'));
        } catch (QueryException $e) {
            return redirect()->back();
        }
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('one-to-many.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect(url('/ont-to-many/category'));
    }

    public function destroy($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(url('/ont-to-many/category'));
    }

}
