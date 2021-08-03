<?php

namespace App\Http\Controllers\ManyToMany;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('many-to-many.blog.index',compact('blogs'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('many-to-many.blog.create',compact('tags'));
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $image              =     $request->file('photo');
        $image_name         =     $image->getClientOriginalName();
        $image_directory    =     'Blog_images/';
        $image_url          =      $image_directory.$image_name;
        $image->move($image_directory, $image_name);

        $tag = $request['tag'];
        $blog->title       = $request->title;
        $blog->body        = $request->body;
        $blog->photo       = $image_url;
        $blog->save();
        $blog->tags()->attach($tag);
        return redirect(url('/many-to-many/blog'));
    }

    public function edit($id){
        $blog = Blog::findOrfail($id);
        $tags = Tag::all();
        $seleced_tag = $blog->tags;
        return view('many-to-many.blog.edit',compact('blog','tags','seleced_tag'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $tags = $request->tag;
        $image = $request->file('photo');
        if ($image) {
            unlink($blog->photo);
            $image              =     $request->file('photo');
            $image_name         =     $image->getClientOriginalName();
            $image_directory    =     'Blog_images/';
            $image_url          =      $image_directory.$image_name;
            $image->move($image_directory, $image_name);
            $blog->photo        =$image_url;
        }
        $blog->title       = $request->title;
        $blog->body        = $request->body;
        $blog->save();
        $blog->tags()->sync($tags);
        return redirect(url('/many-to-many/blog'));
    }

    public function destroy($id){
        $blog = Blog::find($id);
        $tags = $blog['tags'];
        $blog->tags()->detach($tags);
        $blog->delete();;
        return redirect(url('/many-to-many/blog'));
    }

}
