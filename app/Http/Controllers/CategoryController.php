<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateFormCategoryRequest;
use App\Http\Requests\CreateFormRequest;
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
        $categories = Category::all();
        return view('category.index_category', compact('categories'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('category.show_category')->with('category', $category);
    }

    /**
     * Show the form for editing the category
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit_category', compact('category'));
    }

    /**
     * Update the category in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateFormCategoryRequest $request, $id)
    {

        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect('category');
    }

    /**
     * Remove category
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('category');
    }
}
