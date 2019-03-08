<?php
use App\Post; // Import class Post to all routes
use App\Image;
use App\Slider;
use App\Review;
use App\Project;
use App\Partner;
use App\Category;
use App\User;
use App\View;
use App\Content;
use App\Http\Controllers\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {



    return view('welcome_view');
});


Route::get('home', function () {
    $posts = Slider::all();
    $reviews = Review::all();
    $partners = Partner::all();

    $categories = Category::all();

    /** update views **/
    $day = date('d'); $month = date('m'); $year = date('y');

    if(View::where('day', '=', (int)$day)->where('month', '=', (int)$month)->where('year', '=', (int)$year)->count() == 0){
        $view = new View();
        $view->day   = $day;
        $view->month = $month;
        $view->year  = $year;
        $view->views = 1;

        $view->save();
    }else{
        $view = View::where('day', '=', (int)$day)->where('month', '=', (int)$month)->where('year', '=', (int)$year)->first();
        $view->views = ($view->views + 1);
        $view->save();
    }


    return view('welcome', compact('posts', 'reviews', 'partners', 'categories'));
});

Route::get('login', function () {
    $categories = Category::all();

    return view('login', compact('categories'));
});
Route::post('login', 'UserController@login'); // to login users
Route::get('logout', 'UserController@bye'); // to login users


/*** Simple links ***/
Route::get('kontakt', function(){
    $categories = Category::all();


    return view('contact', compact('categories'));
});

Route::get('novosti', function(){
    $categories = Category::all();


    return view('news', compact('categories'));
});
Route::get('novost', function(){
    $categories = Category::all();


    return view('new', compact('categories'));
});

Route::get('projekti/{id}', function($id){
    $categories = Category::all();
    $projects = Project::where('subcat_id', '=', $id)->where('published', '=', 1)->get();
    $subcats    = Category::where('parent', '=', $id)->get();

    $category_name = Category::where('id', '=', $id)->get()[0]->name;


    return view('projects', compact('projects', 'categories', 'id', 'subcats', 'category_name'));
});

Route::get('projekti/{id}/{cat_id}', function($id, $cat_id){
    $categories = Category::all();
    $projects = Project::where('subcat_id', '=', $cat_id)->where('published', '=', 1)->get();
    $subcats    = Category::where('parent', '=', $id)->get();

    $category_name = Category::where('id', '=', $id)->get()[0]->name;


    return view('projects', compact('projects', 'categories', 'id', 'subcats', 'category_name'));
});

Route::get('projekat/{id}', function($id){
    $categories = Category::all();
    $content = Content::where('post_id', '=', $id)->get();



    $images = '';

    if(count(Content::where('post_id', '=', $id)->where('what', '=', 'single_image')->get(['hash']))) $images = Image::where('hash', '=',  Content::where('post_id', '=', $id)->where('what', '=', 'single_image')->get(['hash'])[0]['hash'])->get();



    return view('project', compact('categories', 'content', 'images'));
});

Route::get('o-nama', function(){
    $categories = Category::all();
    $architects = User::where('what', '=', 'arhitecture_gays')->get();
    $engineers  = User::where('what', '=', 'engineers')->get();

    $title = 'O nama';

    $content = Content::all();

    $images = '';

    if(count(Content::where('type', '=', 'aboutus')->where('what', '=', 'single_image')->get(['hash']))) $images = Image::where('hash', '=',  Content::where('type', '=', 'aboutus')->where('what', '=', 'single_image')->get(['hash'])[0]['hash'])->get();


    return view('about', compact('categories', 'architects', 'engineers', 'title', 'content',  'images'));
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/


Route::get('administrator', function () {
    $role = auth()->user()->role->name;
    return view('admin_dashboard', compact('role'));
});

/** use slider controller **/
Route::resource('administrator_slider', 'sliderController');
/*** Reviews ***/
Route::resource('administrator_review', 'ReviewsController');
/*** Partners ***/
Route::resource('administrator_partners', 'PartnersController');
/*** categories ***/
Route::resource('administrator_categories', 'CategoriesController');

/*** projects ***/
Route::resource('administrator_projects', 'ProjectController');
Route::get('administrator_projects/{cat_id}/{project_id}', 'ProjectController@destroy_and_redirect');
Route::get('administrator_projects/{cat_id}/{project_id}/{update}', 'ProjectController@visible_or_not');

Route::get('administrator_subcategories', function (){
    $categories = Category::all();

   return view('admin.administrator_categories.subcategories', compact('categories'));
});

Route::resource('administrator_content', 'ContentController');



/**** Insert content ****/
Route::get('administrator_content/{id}/{type}', 'ContentController@show_content');
Route::get('administrator_content_insert/{id}/{type}/{what}', 'ContentController@show_header_form');
Route::post('insert_header', 'ContentController@insert_header');
Route::post('insert_header_text', 'ContentController@insert_header_text');
Route::post('insert_image', 'ContentController@insert_image');
Route::post('insert_one_of_them', 'ContentController@insert_one_of_them'); // insert one of slider images : )
Route::post('insert_two_images', 'ContentController@insert_two_images');
Route::post('save_image', 'ContentController@save_image');

Route::post('save_user', 'ContentController@save_user');

/** delete content */
Route::get('delete_content/{id}/{type}/{what}/{where}', 'ContentController@delete_content');


Route::get('views_per_month/{m}/{y}', function($m, $y){

    $views = View::where('month', '=', (int)$m)->where('year', '=', (int)$y)->get();

    $all_views = array();
    foreach($views as $view){
        $point = array("x" => $view->day , "y" => $view->views);
        array_push($all_views, $point);
    }

    $views = json_encode($all_views);

    return view('admin.analytics.views_per_month', compact('m', 'y', 'views'));
});
