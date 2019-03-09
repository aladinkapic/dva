<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Slider; // To use Post model
use App\Image;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session; // To use Image model


class sliderController extends Controller{
    public function  __construct(){
        $this->middleware('role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $posts = Slider::all();
        //return dd($posts);
        return view('admin.administrator_slider.index', compact('posts'));
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
            $post = new Slider();
            $post->small_title = $request->small_header;
            $post->huge_title = $request->title;
            $post->link = $request->link;
            $post->huge_image = Session::get('huge_image');
            $post->small_image = Session::get('small_image');
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
                Session::put("huge_image", $name);
            }
        }else if($request->hasFile('slider_mobile')) {
            $files = $request->file('slider_mobile');

            echo $hash = $request->hash;
            // if we have single of it, there is no need for foreach loop
            foreach ($files as $file){
                $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
                echo $name = md5($file->getClientOriginalName().time()).'.'.$ext;

                $file->move("uploaded_images", $name);
                Session::put("small_image", $name);
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
