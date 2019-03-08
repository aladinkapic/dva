<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Unesite novi slider element @stop
@section('other_css_links')
    <link rel="stylesheet" href="swipe/dist/css/swiper.min.css">
    <link rel="stylesheet" href="css/home/slider.css">
    <link rel="stylesheet" href="admin/css/home/slider.css">
@stop
@section('other_js_links')
    <script src="js/home/wrapper_control.js"></script>
    <script src="js/home/slider.js"></script>
@stop

@section('header_icon') fa-home @stop
@section('header_title') Pregled slajdera @stop
@section('header_short') Pregledajte slajdera u stvarnom obliku @stop
@section('path') Administracija / Naslovna strana / Pregled slajdera @stop
<!-- main content of page -->
@section('content')
    <div class="main_slider">
        @php $counter = 0; @endphp
        @foreach($posts as $post)
            <div class="image @php if($counter++ != 0) echo 'image_hidden'; @endphp">
                <img class="desktop_image" src="uploaded_images/{{$post->huge_image}}">
                <img class="mobile_image" src="uploaded_images/{{$post->small_image}}">
            </div>
        @endforeach

        <div class="slider_shadow">
            <div class="text_wrapper">
                <div class="top_line"></div>
                <div class="right_line"></div>
                <div class="bottom_line"></div>
                <div class="left_line"></div>
                <!-- count for hidden elements -->
                @php $counter = 0; @endphp
                @foreach($posts as $post)
                    <div class="slider_texts @php if($counter++ != 0) echo 'slider_texts_hidden'; @endphp">
                        <h4>{{$post->small_title}}</h4>
                        <h1>
                            {{$post->huge_title}}
                        </h1>

                        <a href="{{$post->link}}">
                            <h5>See project --></h5>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="slider_bars">
                @php $counter = 0; @endphp
                @foreach($posts as $post)
                    <div class="slider_arrow @php if($counter == 0) echo 'slider_arrow_active'; @endphp" onclick="set_slide('@php echo $counter++; @endphp');"></div>
                @endforeach

                <!-- <div class="slider_arrow" onclick="set_slide(1);"></div>
                <div class="slider_arrow" onclick="set_slide(2);"></div> -->
            </div>
        </div>
    </div>

    <div class="goto">
        <div class="goto_button">
            <a href="administrator_slider/create">
                <p>Unesite novi slajder --></p>
            </a>
        </div>
    </div>
@stop