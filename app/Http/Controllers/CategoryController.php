<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories=Category::all();
        return view('categories.index',compact('categories'));
    }

    public function create()
    {  
        return view('categories.create');
        
    }

    
    public function store(Request $request)
    {
        $category= new Category([
            'title'=>$request->get('title'),
        ]);
        $category->save();
        return redirect('/categories');
    }



    public function edit($id)
    {
        $category= Category::find($id);
        return view('categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $category= Category::find($id);
        $category->title=$request->get('title');
        $category->save();
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
}
