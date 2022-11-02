<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{   public function add(Request $request)
    {
        $product = new Product;
        $product->name = 'God of War';
        $product->price = 40;

        $product->save();

        $category = Category::find([3, 4]);
        $product->categories()->attach($category);

        return 'Success';
    }

    public function index()
    {
        $products= Product::all();
        
        return view('products.index', compact('products'));


    }

    public function create()
    {
	    $categories=Category::all();
       return view('products.create',compact('categories'));
        
    }
  

    public function store(Request $request)
    {  $request->validate([
        'name'=>'required',
        'price'=>'required'

    ]);
    
    $product= new Product([
        'name'=> $request->get('name'),
        'price'=> $request->get('price'),        

    ]);
    
    $category=Category::find($request->category_id);
    $product->save();

    $product->categories()->attach($category);
    return redirect('/products');

    }

    public function edit($id)
    {
        $product= Product::find($id);
        $categories=Category::all();
        return view('products.edit',compact('product','categories'));

    }

    public function update(Request $request, $id)
    {
        //  $request->validate([
        //     'id'=>'required',
        //     'name'=>'required',
        //     'price'=>'required'
    
        // ]);
    
        $product= Product::find($id);
        $product->name=$request->get('name'); 
        $product->price=$request->get('price'); 

        $category=Category::find($request->category_id);

        $product->categories()->sync($category);
        $product->update();
        return redirect('/products');

    }

    public function destroy($id)
    {
        $product= Product::find($id);
        $product->delete();
        return redirect('/products');
    }

}
