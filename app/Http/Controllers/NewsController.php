<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategories;
use App\Image;
use App\News;
use Illuminate\Support\Facades\Auth;
use App\Date;
use App\User;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories = NewsCategories::all();
        return view('admin.admin_news_categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $img = new Image();

        if($request->hasFile('image')){
            $array = array("image" => array(), "id" => array());

            $file = $request->file('image');
            $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            $name = md5($file->getClientOriginalName().time()).'.'.$ext;
            $file->move("uploaded_images", $name);

            array_push($array['image'], $name);

            $img->name = $name;
            $img->save();
            array_push($array['id'], $img->id);
            echo json_encode($array);
        }else if($request->title){
            $new = new News();


            $new->title       = $request->title;
            $new->title_en    = $request->title_eng;
            $new->title_de    = $request->title_de;
            $new->cat_id      = $request->category_id;


            $new->short_description     = $request->short_desc;
            $new->short_description_en  = $request->short_desc_eng;
            $new->short_description_de  = $request->short_desc_de;

            $new->time = date('d').'. '.Date::get_month_name(date('m')).' 20'.date('y').' u '.date('H').':'.date('i');

            $new->image_id    = $request->image_id;
            $new->user_id     = Auth::user()->id;

            $new->save();

            return redirect("administrator_news/create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $news_cat = NewsCategories::find($id)->get()[0]['name'];


        return view('admin.admin_news_categories.preview', compact('news_cat'));
    }

    public function show_with_page($id, $page){
        $news_cat = NewsCategories::find($id)->get()[0];
        $news = News::all();

        return view('admin.admin_news_categories.preview', compact('news_cat', 'news', 'page'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
