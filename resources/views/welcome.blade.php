<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Studio DVA d.o.o @stop
@section('other_css_links')
    <link rel="stylesheet" href="swipe/dist/css/swiper.min.css">
    <link rel="stylesheet" href="css/home/slider.css">
    <link rel="stylesheet" href="css/home/little_about.css">
    <link rel="stylesheet" href="css/home/cool_circle.css">
    <link rel="stylesheet" href="css/home/reviews.css">
    <link rel="stylesheet" href="css/home/partners.css">
@stop
@section('other_js_links')
    <script src="js/home/wrapper_control.js"></script>
    <script src="js/home/slider.js"></script>
    <script src="js/home/reviews.js"></script>
@stop
<!-- main content of page -->
@section('content')
    @include('includes.parts.home.slider')
    @include('includes.parts.home.little_about')
    @include('includes.parts.home.cool_circle')
    @include('includes.parts.home.reviews')
    @include('includes.parts.home.partners')
@stop