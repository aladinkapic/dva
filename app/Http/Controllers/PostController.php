<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; // To use Post model
use App\Image; // To use Image model
use Illuminate\Support\Facades\Session;

class PostController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $posts        = Post::all();
        $huge_images  = Image::where('what', 'huge_slider_image')->get();
        $small_images = Image::where('what', 'small_slider_image')->get();
        //return dd($posts);
        return view('admin.administrator_slider.index', compact('posts', 'huge_images', 'small_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.administrator_slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // return $request->what;
        // Post::create($request->all());
        if(empty($request->all())) return redirect('administrator_slider');
        $input = $request->all();

        /***** SLIDER *******/
        if(isset($request->what)){
            $post = new Post();
            $post->what = $request->what;
            $post->content = $request->small_header.'|-|'.$request->title.'|-|'.$request->link;
            $post->hash = $request->hash;
             $post->save();

            return redirect('administrator_slider');
        }

        // check if we are uploading image or not => SLIDER
        if($request->hasFile('slider_huge')) {
            $files = $request->file('slider_huge');

            echo $hash = $request->hash;
            // if we have single of it, there is no need for foreach loop
            foreach ($files as $file){
                $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
                echo $name = md5($file->getClientOriginalName().time()).'.'.$ext;

                $file->move("uploaded_images", $name);

                $image = new Image();
                $image->hash = Session::get('hash');
                $image->what = "huge_slider_image";
                $image->name = $name;
                $image->save();
            }
        }else if($request->hasFile('slider_mobile')) {
            $files = $request->file('slider_mobile');

            echo $hash = $request->hash;
            // if we have single of it, there is no need for foreach loop
            foreach ($files as $file){
                $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
                echo $name = md5($file->getClientOriginalName().time()).'.'.$ext;
                $file->move("uploaded_images", $name);

                $image = new Image();
                $image->hash = Session::get('hash');
                $image->what = "small_slider_image";
                $image->name = $name;
                $image->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }

    public function store_news(){
        //
    }
}
