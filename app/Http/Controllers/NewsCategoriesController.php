<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\NewsCategories;

class NewsCategoriesController extends Controller{

    public function  __construct(){
        $this->middleware('role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $news_cats = NewsCategories::all();

        return view('admin.admin_news_categories.index', compact('news_cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $new_cat = new NewsCategories();

        $new_cat->name    = $request->name;
        $new_cat->name_en = $request->name_eng;
        $new_cat->name_de = $request->name_de;

        $new_cat->save();

        return redirect('/administrator_news_categories');
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
        $news_cats = NewsCategories::find($id);

        $news_cats->name    = $request->name;
        $news_cats->name_en = $request->name_eng;
        $news_cats->name_de = $request->name_de;

        $news_cats->update();

        return redirect('/administrator_news_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        NewsCategories::destroy($id);

        return redirect('/administrator_news_categories');
    }
}
