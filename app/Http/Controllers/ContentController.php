<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Content;
use App\Image;

use Illuminate\Support\Facades\Session; // To use Image mo

class ContentController extends Controller{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $project_name = Project::find($id)->title;

        return view('admin.administrator_content.preview', compact('project_name'));
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
    public function destroy($id, $type){
        return "wee";
    }

    public function delete_content($id, $type, $what, $where){
        $content = Content::find($id);

        /*
        foreach ($parner as $part){
            unlink('uploaded_images/'.$part->image);
        } */

        $content::destroy($id);
        return redirect('/administrator_content/'.$where.'/'.$type);
    }

    public function show_content($id, $type){
        if($type == 'project') $title = Project::find($id)->title;
        else if($type == 'aboutus') $title = 'O nama';
        else if($type == 'news') $title = 'Novosti';
        $content = Content::all();

        $images = '';

        if(count(Content::where('post_id', '=', $id)->where('what', '=', 'single_image')->where('type', '=', $type)->get(['hash']))) $images = Image::where('hash', '=',  Content::where('post_id', '=', $id)->where('what', '=', 'single_image')->where('type', '=', $type)->get(['hash'])[0]['hash'])->get();

        $architects = User::where('what', '=', 'arhitecture_gays')->get();
        $engineers  = User::where('what', '=', 'engineers')->get();

        return view('admin.administrator_content.preview', compact('id', 'type', 'title', 'content', 'architects', 'engineers', 'images'));
    }

    public function insert_header(Request $request){
        $content = new Content();

        $content->post_id = $request->post_id;
        $content->type    = $request->type;
        $content->what    = $request->what;

        $content->title = $request->title;
        $content->title_eng = $request->title_eng;
        $content->title_de = $request->title_de;

        $content->save();

        return redirect('administrator_content/'.$request->post_id.'/'.$request->type);
    }

    public function insert_header_text(Request $request){
        $content = new Content();

        $content->post_id = $request->post_id;
        $content->type    = $request->type;
        $content->what    = $request->what;

        $content->title        = $request->title;
        $content->title_eng    = $request->title_eng;
        $content->title_de     = $request->title_de;

        $content->detailed     = $request->detailed;
        $content->detailed_eng = $request->detailed_eng;
        $content->detailed_de  =  $request->detailed_de;

        $content->save();

        return redirect('administrator_content/'.$request->post_id.'/'.$request->type);
    }

    public function insert_image(Request $request){
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

        if($request->hasFile('image2')){
            $array = array("image" => array(), "id" => array());

            $file = $request->file('image2');
            $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            $name = md5($file->getClientOriginalName().time()).'.'.$ext;
            $file->move("uploaded_images", $name);

            array_push($array['image'], $name);

            $img->name = $name;
            $img->save();
            array_push($array['id'], $img->id);
            echo json_encode($array);
        }
    }

    public function insert_one_of_them(Request $request){
        $img = new Image();


        $file = $request->file('image');
        $ext = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
        $name = md5($file->getClientOriginalName().time()).'.'.$ext;
        $file->move("uploaded_images", $name);

        $img->name = $name;
        $img->hash = Session::get('one_of_them');

        $img->save();

        echo json_encode(Image::where('hash', '=', Session::get('one_of_them'))->get());
    }

    public function save_image(Request $request){
        $content = new Content();

        $content->post_id = $request->post_id;
        $content->type    = $request->type;
        $content->what    = $request->what;

        $content->hash    = $request->hash;

        $content->save();

        return redirect('administrator_content/'.$request->post_id.'/'.$request->type);
    }

    public function save_user(Request $request){
        $user = new User();

        $user->name               = $request->name;
        $user->facebook           = $request->fb;
        $user->linkedin           = $request->li;
        $user->twitter            = $request->tw;
        $user->github             = $request->git;
        $user->role_in_company    = $request->role_in_company;
        $user->role_in_company_en = $request->role_in_company_en;
        $user->role_in_company_de = $request->role_in_company_de;

        $user->what       = $request->what;
        $user->user_image = $request->image_id;

        $user->save();

        return redirect('administrator_content/'.$request->post_id.'/'.$request->type);
    }

    public function insert_two_images(Request $request){
        $content = new Content();

        $content->post_id = $request->post_id;
        $content->type    = $request->type;
        $content->what    = $request->what;

        $content->image_one = $request->image_id;
        $content->image_two = $request->image_id2;

        $content->save();

        return redirect('administrator_content/'.$request->post_id.'/'.$request->type);
    }

    public function show_header_form($id, $type, $what){
        return view('admin.administrator_content.insert', compact('id', 'type', 'what'));
    }
}
