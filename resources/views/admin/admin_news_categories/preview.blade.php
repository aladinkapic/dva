<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@php use App\User; @endphp
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Unesite novi post @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="/css/news/all_news.css">
@stop
@section('other_js_links')
    <script src="/admin/js/projects/projects.js"></script>
    <script src="/admin/js/upload_images.js"></script>
@stop

@section('header_icon') fa-newspaper @stop
@section('header_title') Pregled postova - {{$news_cat['name']}}@stop
@section('header_short') Pregled postova iz kategorije {{$news_cat['name']}} @stop
@section('path') Administracija / Novosti / Pregled postova - {{$news_cat['name']}} @stop
<!-- main content of page -->
@section('content')
    <div class="all_news_w">
        @foreach($news as $new)
            @php $user = User::find($new->user_id); @endphp

            <div class="single_new">
                <div class="new_image_w">
                    <img src="/images/new1.jpg" alt="">
                </div>
                <div class="news_short">
                    <p> <span>{{$user->name}} {{$user->surname}}</span> {{$new->time}}</p>
                    <h2>{{$new->title}}</h2>
                    <h5>{{$new->short_description}}</h5>

                    <div class="continue_reading">
                        <a href="/administrator_content/{{$new->id}}/news">
                            <p>Izmijenite sadržaj </p>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@stop