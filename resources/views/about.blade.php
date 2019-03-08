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
        @if($part->type == 'aboutus')
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
        @endif
    @endforeach

    <div class="our_team">
        <div class="header_line"></div>
        <div class="our_team_us">

            <div class="team_section">
                <h4>ODSJEK ZA ARHITEKTURU</h4>
            </div>
            @foreach($architects as $architect)
                <div class="our_team_me">
                    <img src="/uploaded_images/{{$architect->image->name}}" alt="">
                    <div class="mine_wrapper">
                        <h4>{{$architect->name}}</h4>
                        <p>{{$architect->role_in_company}} </p>
                        <div class="mine_social">
                            @if(!empty($architect->facebook))
                                <a target="_blank" href="{{$architect->facebook}}"><i class="fab fa-facebook-square" title="Facebook profil"></i></a>
                            @endif
                            @if(!empty($architect->linkedin))
                                <a target="_blank" href="{{$architect->linkedin}}"><i class="fab fa-linkedin-in" title="Linkedin profil"></i></a>
                            @endif
                            @if(!empty($architect->twitter))
                                <a target="_blank" href="{{$architect->twitter}}"><i class="fab fa-twitter" title="Twitter profil"></i></a>
                            @endif
                            @if(!empty($architect->github))
                                <a target="_blank" href="{{$architect->github}}"><i class="fab fa-github" title="Github profil"></i></a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




    <div class="our_team">
        <div class="header_line"></div>
        <div class="our_team_us">

            <div class="team_section">
                <h4>ODSJEK ZA ELEKTROTEHNIKU I ELEKTRONIKU</h4>
            </div>
            @foreach($engineers as $engineer)
                <div class="our_team_me">
                    <img src="/uploaded_images/{{$engineer->image->name}}" alt="">
                    <div class="mine_wrapper">
                        <h4>{{$engineer->name}}</h4>
                        <p>{{$engineer->role_in_company}} </p>
                        <div class="mine_social">
                            @if(!empty($engineer->facebook))
                                <a target="_blank" href="{{$engineer->facebook}}"><i class="fab fa-facebook-square" title="Facebook profil"></i></a>
                            @endif
                            @if(!empty($engineer->linkedin))
                                <a target="_blank" href="{{$engineer->linkedin}}"><i class="fab fa-linkedin-in" title="Linkedin profil"></i></a>
                            @endif
                            @if(!empty($engineer->twitter))
                                <a target="_blank" href="{{$engineer->twitter}}"><i class="fab fa-twitter" title="Twitter profil"></i></a>
                            @endif
                            @if(!empty($engineer->github))
                                <a target="_blank" href="{{$engineer->github}}"><i class="fab fa-github" title="Github profil"></i></a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop