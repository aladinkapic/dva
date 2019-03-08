<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Unos posta @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="/admin/css/content/content.css">
    <link rel="stylesheet" href="/swipe/dist/css/swiper.min.css">
@stop
@section('other_js_links')
    <script src="/admin/js/upload_images.js"></script>
@stop

@section('header_icon') fa-project-diagram @stop
@section('header_title')
    @if($what == 'huge_header') Veliki naslov @endif
@stop
@section('header_short')  Pregled posta te uređivanje postojećeg  @stop
@section('path') Administracija / Naši projekti / Unos posta @stop
<!-- main content of page -->
@section('content')
    <div class="content_wrapper">
        @if($what == 'huge_header')
        <!-- ovdje idu postavke za veliki naslov -->
            <form action="/insert_header" method="post">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="input_part three_inputs">
                    <textarea name="title" placeholder="Za prelazak u novi red : hit enter"></textarea>
                    <textarea name="title_eng" placeholder="Eng .."></textarea>
                    <textarea name="title_de" placeholder="De .."></textarea>
                    <input type="hidden" name="post_id" value="{{$id}}">
                    <input type="hidden" name="type" value="{{$type}}">
                    <input type="hidden" name="what" value="{{$what}}">
                </div>
                <div class="save_button">
                    <input type="submit" value="SPREMITE">
                </div>
            </form>
        @endif
        @if($what == 'header_and_text')
            <!-- ovdje idu postavke za tekst sa naslovom-->
            <form action="/insert_header_text" method="post">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="input_part three_inputs">
                    <input type="text" name="title" placeholder="Naslov .." autocomplete="off">
                    <input type="text" name="title_eng" placeholder="Eng .." autocomplete="off">
                    <input type="text" class="last_one" placeholder="De .." name="title_de" autocomplete="off">

                    <textarea name="detailed" placeholder="Za prelazak u novi red : hit enter"></textarea>
                    <textarea name="detailed_eng" placeholder="Eng .."></textarea>
                    <textarea name="detailed_de"  class="last_one" placeholder="De .."></textarea>
                    <input type="hidden" name="post_id" value="{{$id}}">
                    <input type="hidden" name="type" value="{{$type}}">
                    <input type="hidden" name="what" value="{{$what}}">
                </div>
                <div class="save_button">
                    <input type="submit" value="SPREMITE">
                </div>
            </form>
        @endif
        @if($what == 'single_image')

            @php Session::put('one_of_them', md5(time())); @endphp

            <!-- ovdje idu postavke za veliki naslov -->
                <div class="single_image">
                    <div class="swiper-container swiper1">
                        <div class="swiper-wrapper">

                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                        <!-- Add Pagination -->
                        <div class="swiper-pagination swiper-pagination1"></div>
                    </div>



                    <!-- Swiper JS -->
                    <script src="/swipe/dist/js/swiper.min.js"></script>


                    <form enctype="multipart/form-data">
                    @csrf <!-- {{ csrf_field() }} -->
                        <label for="image">
                            <div class="single_image_shadow">
                                <h2>1300 x 580</h2>
                            </div>
                        </label>
                        <input type="file" onchange="upload_one_of_them('image', 'project_image', '../../../../uploaded_images/', '/insert_one_of_them');" name="image" id="image" class="hidden_input">
                    </form>
                </div>


            <form action="/save_image" method="post">
            @csrf <!-- {{ csrf_field() }} -->
                <input type="hidden" name="hash" id="hash" value="@php echo Session::get('one_of_them'); @endphp">

                <input type="hidden" name="post_id" value="{{$id}}">
                <input type="hidden" name="type" value="{{$type}}">
                <input type="hidden" name="what" value="{{$what}}">
                <div class="save_button">
                    <input type="submit" value="SPREMITE">
                </div>
            </form>
        @endif
        @if($what == 'two_images')

            <div class="two_images">
                <form enctype="multipart/form-data">
                @csrf <!-- {{ csrf_field() }} -->
                    <label for="image">
                        <div class="one_image">
                            <img src="/uploaded_images/7870d36e74de1a615a6c394920c273e9.jpg" id="project_image" alt="">
                            <div class="image_shadow">
                                <h1>370 x 370</h1>
                            </div>
                        </div>
                    </label>
                    <input type="file" onchange="upload_image('image', 'project_image', '../../../../uploaded_images/', '/insert_image', 'image_id');" name="image" id="image" class="hidden_input">
                </form>

                <form enctype="multipart/form-data">
                @csrf <!-- {{ csrf_field() }} -->
                    <label for="image2">
                        <div class="one_image one_image_2">
                            <img src="/uploaded_images/7870d36e74de1a615a6c394920c273e9.jpg" id="project_image2" alt="">
                            <div class="image_shadow">
                                <h1>370 x 370</h1>
                            </div>
                        </div>
                    </label>
                    <input type="file" onchange="upload_image('image2', 'project_image2', '../../../../uploaded_images/', '/insert_image', 'image_id2');" name="image2" id="image2" class="hidden_input">
                </form>
            </div>
            <!-- ovdje idu postavke za tekst sa naslovom-->
            <form action="/insert_two_images" method="post">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="input_part three_inputs">

                    <input type="hidden" name="image_id2" id="image_id2">
                    <input type="hidden" name="image_id" id="image_id">
                    <input type="hidden" name="post_id" value="{{$id}}">
                    <input type="hidden" name="type" value="{{$type}}">
                    <input type="hidden" name="what" value="{{$what}}">
                </div>
                <div class="save_button">
                    <input type="submit" value="SPREMITE">
                </div>
            </form>
        @endif

            @if($what == 'engineers' or $what == 'arhitecture_gays')
            <!-- ovdje idu postavke za veliki naslov -->

                <form enctype="multipart/form-data">
                @csrf <!-- {{ csrf_field() }} -->
                    <label for="image">
                        <div class="user_image_part">
                            <img src="" id="project_image" alt="">
                            <div class="image_shadow">
                                <h1>1300 X 580</h1>
                            </div>
                        </div>
                    </label>
                    <input type="file" onchange="upload_image('image', 'project_image', '../../../../uploaded_images/', '/insert_image', 'image_id');" name="image" id="image" class="hidden_input">
                </form>

                <form action="/save_user" method="post">
                    @csrf <!-- {{ csrf_field() }} -->

                    <div class="insert_details">
                        <div class="input_wr">
                            <input type="text" placeholder="Ime i prezime" name="name">
                            <i class="fas fa-user-tag"></i>
                        </div>
                        <div class="input_wr">
                            <input type="text" placeholder="Facebook profil" name="fb">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="input_wr">
                            <input type="text" placeholder="Linkedin profil" name="li">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="input_wr">
                            <input type="text" placeholder="Twitter profil" name="tw">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="input_wr">
                            <input type="text" placeholder="Github profil" name="git">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="input_wr">
                            <input type="text" placeholder="Arhitekta - Elektro inženjer - Programer - Vanjski saradnik" name="role_in_company">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="input_wr">
                            <input type="text" placeholder="Arhitekta - Elektro inženjer - Programer - Vanjski saradnik - EN" name="role_in_company_en">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="input_wr">
                            <input type="text" placeholder="Arhitekta - Elektro inženjer - Programer - Vanjski saradnik - DE" name="role_in_company_de">
                            <i class="fas fa-info-circle"></i>
                        </div>
                    </div>

                    <input type="hidden" name="image_name" id="image_name">
                    <input type="hidden" name="image_id" id="image_id">
                    <input type="hidden" name="post_id" value="{{$id}}">
                    <input type="hidden" name="type" value="{{$type}}">
                    <input type="hidden" name="what" value="{{$what}}">
                    <div class="save_button">
                        <input type="submit" value="SPREMITE">
                    </div>

                </form>

            @endif
    </div>
@stop