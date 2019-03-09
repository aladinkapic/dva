<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Unesite novi post @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="/admin/css/projects/project.css">
@stop
@section('other_js_links')
    <script src="/admin/js/projects/projects.js"></script>
    <script src="/admin/js/upload_images.js"></script>
@stop

@section('header_icon') fa-newspaper @stop
@section('header_title') Unesite novi post @stop
@section('header_short') Unesite novi poste te njehove krakte detalje @stop
@section('path') Administracija / Novosti / Unesite novi post @stop
<!-- main content of page -->
@section('content')
    <div class="project_insert">
        <div class="project_image">
            <img id="project_image" src="" alt="">
            <form enctype="multipart/form-data">
            @csrf <!-- {{ csrf_field() }} -->
                <label for="image">
                    <h5>770 x 555</h5>
                </label>
                <input type="file" onchange="upload_image('image', 'project_image', '../uploaded_images/', '../administrator_news', 'image_id');" name="image" id="image" class="hidden_input">
            </form>
        </div>
        <form action="/administrator_news" method="post">
        @csrf <!-- {{ csrf_field() }} -->
            <div class="rest_part">
                <div class="single_inpu">
                    <input type="text" name="title" placeholder="Naziv posta" autocomplete="off">
                    <input type="hidden" name="what" value="project">
                    <!-- set image id -->
                    <input type="hidden" id="image_id" name="image_id">
                </div>
                <div class="single_inpu">
                    <input type="text" name="title_eng" placeholder="Naziv posta - eng" autocomplete="off">
                </div>
                <div class="single_inpu">
                    <input type="text" name="title_de" placeholder="Naziv posta - de" autocomplete="off">
                </div>
                <div class="single_inpu">
                    <input type="text" name="" value="Kategorija posta" readonly id="object_category">
                    <input type="hidden" name="category_id" id="category_id">
                    <div class="category_arrow" onclick="open_subcats();">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="all_categories" id="main_categories">
                        @foreach($categories as $category)
                            @if($category->parent == null)
                                <div class="single_pick_cat" onclick="choose_news_category('{{$category->id}}', '{{$category->name}}');">
                                    <p>{{$category->name}}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="single_inpu single_inpu_2">
                    <textarea name="short_desc" placeholder="Kratki opis posta" maxlength="280"></textarea>
                </div>
                <div class="single_inpu single_inpu_2">
                    <textarea name="short_desc_eng" placeholder="Kratki opis posta - eng"  maxlength="280"></textarea>
                </div>
                <div class="single_inpu single_inpu_2">
                    <textarea name="short_desc_de" placeholder="Kratki opis posta - de"  maxlength="280"></textarea>
                </div>
                <div class="single_inpu single_inpu_b">
                    <input type="submit" value="SPREMITE">
                </div>
            </div>
        </form>
    </div>
@stop