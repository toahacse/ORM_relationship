<?php

namespace App\Http\Controllers\ManyToMany;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $serials = !is_null(request()->page) ? (request()->page-1) *20 : 0;
        $tags = Tag::all();
        return view('many-to-many.tag.index', compact('tags','serials'));
    }

    public function create(){
        return view('many-to-many.tag.create');
    }

    public function store(Request $request){
        try {
            Tag::create($request->all());
            return redirect(url('/many-to-many/tag'));
        } catch (QueryException $e) {
            return redirect()->back();
        }
    }

    public function edit($id){
        $tag = Tag::findOrFail($id);
        return view('many-to-many.tag.edit', compact('tag'));
    }

    public function update(Request $request, $id){
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return redirect(url('/many-to-many/tag'));
    }

    public function destroy($id) {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect(url('/many-to-many/tag'));
    }
}
