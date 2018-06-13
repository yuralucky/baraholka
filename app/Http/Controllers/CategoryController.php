<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display all categories
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('category.index_category',compact('categories'));
    }

    /**
     * Show the form for creating a new category
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create_category');
    }

    /**
     * Save a new category
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->validate([
           'name'=>'required|min:3|max:20',

        ]);
        Category::create($input);
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=Category::findOrFail($id);
        return view('category.show_category')->with('category',$category);
    }

    /**
     * Show the form for editing the category
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('category.edit_category',compact('category'));
    }

    /**
     * Update the category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input= $request->validate([
            'name'=>'required|min:3|max:20',

        ]);
        $category=Category::findOrFail($id);
        $category->update($input);
        return redirect('category');
    }

    /**
     * Remove category
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('category');
    }
}
