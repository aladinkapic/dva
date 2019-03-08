<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories = Category::all();
        return view('admin.administrator_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $category = new Category();

        if(isset($request->name)){
            $category->name     = $request->name;
            $category->name_eng = $request->name_eng;
            $category->name_de  = $request->name_de;

            $category->save();

            return redirect('administrator_categories');
        }else if(isset($request->parent)){
            $category->name     = $request->parent;
            $category->name_eng = $request->parent_eng;
            $category->name_de  = $request->parent_de;
            $category->parent = $request->parent_id;
            $category->save();
            return redirect('administrator_subcategories');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name     = $request->name;
        $category->name_eng = $request->name_eng;
        $category->name_de  = $request->name_de;
        $category->update();

        return redirect('administrator_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Category::destroy($id);
        return redirect('administrator_categories');
    }
}
