<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Unesite novi slider element @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="../admin/css/home/slider.css">
@stop
@section('other_js_links')
    <script src="../admin/js/upload_images.js"></script>
@stop

@section('header_icon') fa-home @stop
@section('header_title') Unesite novi slider @stop
@section('header_short') Izaberite fotografije te unesite podatke za slider @stop
@section('path') Administracija / Naslovna strana / Unos slajdera @stop
<!-- main content of page -->
@section('content')
    <div class="image_part">
        <!-- set session -->
        @php Session::put('hash', md5(time())); // a single variable @endphp
        <div class="first_image">
            <img class="hidden_form_images" id="slider_huge_image" src="" alt="">
            <form enctype="multipart/form-data">
            @csrf <!-- {{ csrf_field() }} -->
                <label for="slider_huge">
                    <h1>1800 x 1100</h1>
                </label>
                <input type="file" onchange="upload_slider_image('slider_huge', 'slider_huge_image', '../uploaded_images/');" name="slider_huge[]" id="slider_huge" multiple="multiple" class="hidden_input">
            </form>
        </div>
        <div class="mobile_image">
            <img class="hidden_form_images" id="slider_small_image" src="" alt="">
            <form enctype="multipart/form-data">
            @csrf <!-- {{ csrf_field() }} -->
                <label for="slider_mobile">
                    <h1>720 x 960</h1>
                </label>
                <input type="file" onchange="upload_slider_image('slider_mobile', 'slider_small_image', '../uploaded_images/');" name="slider_mobile[]" id="slider_mobile" multiple="multiple" class="hidden_input">
            </form>
        </div>
    </div>
    <div class="form_part">
        <form action="../administrator_slider " method="post">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="hidden" name="what" value="slider">
            <div class="right_input">
                <input type="text" name="small_header" placeholder="- mali naslov " autocomplete="off">
            </div>
            <div class="right_input">
                <textarea name="title" placeholder="- veliki naslov" autocomplete="off"></textarea>
            </div>
            <div class="right_input">
                <input type="text" name="link" placeholder="- link" autocomplete="off">
            </div>

            <div class="input_save">
                <input type="submit" value="SPREMITE">
            </div>
        </form>
    </div>
@stop