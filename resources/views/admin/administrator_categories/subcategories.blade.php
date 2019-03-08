<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Kategorije projekata @stop
@section('other_css_links')
    <link rel="stylesheet" href="admin/css/projects/projects_categories.css">
@stop
@section('other_js_links')
    <script src="admin/js/projects/projects.js"></script>
@stop

@section('header_icon') fa-project-diagram @stop
@section('header_title') Pregled kategorija @stop
@section('header_short') Pregledajte kategorije projekata @stop
@section('path') Administracija / Naši projekti / Pregled kategorija @stop
<!-- main content of page -->
@section('content')
    <div class="single_category insert_new_subcat insert_new_category">
        <div class="select_arrow" onclick="open_subcats();">
            <i class="fas fa-angle-down"></i>
        </div>

        <form action="administrator_categories" method="post">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="text" name="parent" placeholder="Naziv podkategorije">
            <input type="text" name="parent_eng" placeholder="Eng ..">
            <input type="text" name="parent_de" placeholder="De ..">
            <input type="hidden" name="parent_id" id="parent_id">
            <div class="all_categories" id="main_categories">
                @foreach($categories as $category)
                    @if($category->parent == null)
                        <div class="single_pick_cat" onclick="set_category_id('{{$category->id}}');">
                            <p>{{$category->name}}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            <input type="submit" class="save_button save_button2" value="SPREMITE">
        </form>
    </div>
@stop