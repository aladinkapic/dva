<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Studio DVA d.o.o @stop
@section('other_css_links')
    <link rel="stylesheet" type="text/css" href="/css/modules/all_modules.css">
    <link rel="stylesheet" href="/swipe/dist/css/swiper.min.css">@stop
@section('other_js_links')

@stop
<!-- main content of page -->
@section('content')
    @php $counter = 0; @endphp
    @foreach($content as $part)
        @if($part->what == 'huge_header')
            <div class="header_one preview_item">
                <div class="header_line"></div>
                <h1>
                    {!! nl2br($part->title ) !!}
                </h1>
            </div>

        @endif
        @if($part->what == 'header_and_text')
            <div class="right_text preview_item">
                <div class="header_line"></div>
                <div class="right_text_box">
                    <h3>{{$part->title}}</h3>
                    <p>
                        {!! nl2br($part->detailed ) !!}
                    </p>
                </div>
            </div>
        @endif

        @if($part->what == 'single_image')
            <div class="single_image preview_item">
                <div class="swiper-container swiper1">
                    <div class="swiper-wrapper">
                        @foreach($images as $image)
                            <div class="swiper-slide">
                                <img src="/uploaded_images/{{$image->name}}" alt="">
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
                <script src="/swipe/dist/js/swiper.min.js"></script>

                <script>
                    var swiper = new Swiper('.swiper1', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        }
                    });
                </script>

            </div>
        @endif

        @if($part->what == 'two_images')
            <div class="two_images preview_item" style="left:15px; width:calc(100% - 90px);">
                <div class="two_images_image">
                    <img src="/uploaded_images/{{$part->image->name}}" alt="">
                </div>
                <div class="two_images_image two_images_image2">
                    <img src="/uploaded_images/{{$part->image2->name}}" alt="">
                </div>
            </div>
        @endif
    @endforeach
@stop