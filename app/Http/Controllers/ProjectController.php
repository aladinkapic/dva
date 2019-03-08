<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;
use App\User;
use App\Image;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id){
        return view('admin.administrator_projects.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories = Category::all();

        return view('admin.administrator_projects.create', compact('categories'));
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
        }else if($request->id){
            $subcats = Category::where('parent', $request->id)->get();
            foreach ($subcats as $subcat){
                ?>
                <div class="single_pick_cat" onclick="choose_subcategory('<?php echo $subcat->id; ?>', '<?php echo $subcat->name; ?>');">
                    <p><?php echo $subcat->name; ?></p>
                </div>
                <?php
            }
        }else if($request->title){
            $project = new Project();


            $project->title       = $request->title;
            $project->title_eng   = $request->title_eng;
            $project->title_de    = $request->title_de;
            $project->cat_id      = $request->category_id;
            $project->subcat_id   = $request->subcategory_id;
            $project->short_d     = $request->short_desc;
            $project->short_d_eng = $request->short_desc_eng;
            $project->short_d_de  = $request->short_desc_de;
            $project->image_id    = $request->image_id;
            $project->what        = $request->what;
            $project->user_id     = Auth::user()->id;

            $project->save();

            return redirect("administrator_projects/".$request->subcategory_id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        // here we are able to show all projects from particular subcategory
        $projects    = Project::where('subcat_id', $id)->get();
        $subcategory = Category::find($id)->name;

        return view('admin.administrator_projects.index', compact('projects', 'subcategory', 'id'));
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

    public function destroy_and_redirect($cat_id, $id){
        Project::destroy($id);

        return redirect('/administrator_projects/'.$cat_id);
    }

    public function visible_or_not($cat_id, $id, $what){
        $project = Project::find($id);
        $project->published = !$what;
        $project->save();

        return redirect('/administrator_projects/'.$cat_id);
    }

    public function destroy($id){
        Project::destroy($id);


        $projects    = Project::where('subcat_id', $id)->get();
        $subcategory = Category::find($id)->name;

        return view('admin.administrator_projects.index', compact('projects', 'subcategory'));
    }
}
