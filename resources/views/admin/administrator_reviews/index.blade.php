<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Recenzije @stop
@section('other_css_links')
    <link rel="stylesheet" href="swipe/dist/css/swiper.min.css">
    <link rel="stylesheet" href="css/home/reviews.css">
    <link rel="stylesheet" href="admin/css/home/slider.css">
@stop
@section('other_js_links')
    <script src="js/home/wrapper_control.js"></script>
    <script src="js/home/slider.js"></script>
@stop

@section('header_icon') fa-home @stop
@section('header_title') Pregled recenzija @stop
@section('header_short') Pregledajte sve unešene recenzije @stop
@section('path') Administracija / Naslovna strana / Pregled recenzija @stop
<!-- main content of page -->
@section('content')
    <div id="reviews">
        <div class="swiper-container swiper1">
            <div class="reviews_header">
                <h2>Od Naših Velikih Klijenata</h2>
            </div>
            <div class="swiper-wrapper">
                @foreach($reviews as $review)
                    <div class="swiper-slide">
                        <div class="review_image">
                            <img src="uploaded_images/{{$review->image->name}}" alt="">
                        </div>
                        <div class="review_text">
                            <h4>@php echo $review->name; @endphp <span>/ @php echo $review->title; @endphp</span></h4>
                            <p>
                                @php echo $review->text; @endphp
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination1"></div>
        </div>



        <!-- Swiper JS -->
        <script src="swipe/dist/js/swiper.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper1', {
                slidesPerView: 2,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination1',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 1,
                    }
                }
            });
        </script>

        <script>
            // create_dots("reviews");
        </script>
    </div>

    <div class="goto">
        <div class="goto_button">
            <a href="administrator_review/create">
                <p>Nova recenzija --></p>
            </a>
        </div>
    </div>
@stop