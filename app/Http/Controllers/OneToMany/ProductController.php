<?php

namespace App\Http\Controllers\OneToMany;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $serials = !is_null(request()->page) ? (request()->page-1) * 20 : 0;
        $products = Product::all();
        return view('one-to-many.product.index', compact('products','serials'));
    }

    public function create() {
        $categories = Category::all();
        return view('one-to-many.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $image              =     $request->file('image');
        $image_name         =     $image->getClientOriginalName();
        $image_directory    =     'images/';
        $image_url          =      $image_directory.$image_name;
        $image->move($image_directory, $image_name);

        $product->category_id = $request->category_id;
        $product->title       = $request->title;
        $product->description = $request->description;
        $product->image       = $image_url;
        $product->prize       = $request->prize;
        $product->save();
        return redirect(url('/ont-to-many/product'));
    }

    public function edit($id){
        $product = Product::findOrfail($id);
        $categories = Category::all();
        return view('one-to-many.product.edit',compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $image = $request->file('image');
        if ($image) {
            unlink($product->image);
            $image            = $request->file('image');
            $image_name       = $image->getClientOriginalName();
            $image_directory  = 'images/';
            $image_url        = $image_directory . $image_name;
            $image->move($image_directory, $image_name);
            $product->image        =$image_url;
        }
        $product->category_id = $request->category_id;
        $product->title       = $request->title;
        $product->description = $request->description;
        $product->prize       = $request->prize;
        $product->save();
        return redirect(url('/ont-to-many/product'));
    }

    public function destroy($id){
        $product = Product::findOrfail($id);
        unlink($product->image);
        $product->delete();
        return redirect(url('/ont-to-many/product'));
    }


}
