<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Image;
use App\Review;

class ReviewsController extends Controller{

    public function  __construct(){
        $this->middleware('role');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $reviews = Review::all();
        return view('admin.administrator_reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.administrator_reviews.create');
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
        }

        if(isset($request->name)){
            $review = new Review();
            $review->name     = $request->name;
            $review->title    = $request->title;
            $review->image_id = $request->image_id;
            $review->text    = $request->details;

            $review->save();
            return redirect("administrator_review");
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
