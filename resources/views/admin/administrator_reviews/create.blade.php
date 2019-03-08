<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Recenzije @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="/swipe/dist/css/swiper.min.css">
    <link rel="stylesheet" href="/admin/css/home/reviews.css">
@stop
@section('other_js_links')
    <script src="../admin/js/upload_images.js"></script>
@stop

@section('header_icon') fa-home @stop
@section('header_title') Pregled recenzija @stop
@section('header_short') Pregledajte sve unešene recenzije @stop
@section('path') Administracija / Naslovna strana / Pregled recenzija @stop
<!-- main content of page -->
@section('content')
    <form action="/administrator_review" method="post" enctype="multipart/form-data">
    @csrf <!-- {{ csrf_field() }} -->
        <div class="image_part">
            <img id="review_image" src="" alt="">
            <form enctype="multipart/form-data">
            @csrf <!-- {{ csrf_field() }} -->
                <label for="image">
                    <h5>270 x 270</h5>
                </label>
                <input type="file" onchange="upload_image('image', 'review_image', '../uploaded_images/', '../administrator_review', 'image_id');" name="image" id="image" class="hidden_input">
            </form>
        </div>
        <form action="../administrator_review" method="post">
            <div class="reviews_details">
                @csrf <!-- {{ csrf_field() }} -->

                <div class="fancy-input-text fancy-input-text-h">
                    <p>Ime i prezime</p>
                </div>
                <div class="fancy-input-text fancy-input-text-h">
                    <p>Titula</p>
                </div>
                <input type="text" class="fancy-input fancy-input-h" name="name">
                <input type="text" class="fancy-input fancy-input-h" name="title">

                <!-- set image id -->
                <input type="hidden" name="image_id" id="image_id">
                <div class="fancy-input-text">
                    <p>Recenzija</p>
                </div>
                <textarea name="details" class="fancy-area"></textarea>

                <div class="fancy-submit-w">
                    <input type="submit" class="fancy-submit-button-b" value="SPREMITE">
                </div>
            </div>
        </form>
    </form>
@stop