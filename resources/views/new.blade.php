<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Studio DVA d.o.o @stop
@section('other_css_links')
    <link rel="stylesheet" type="text/css" href="css/news/all_news.css">
    <link rel="stylesheet" type="text/css" href="css/modules/all_modules.css">
@stop
@section('other_js_links')

@stop
<!-- main content of page -->
@section('content')
    @include('includes.parts.modules.header_one')
    @include('includes.parts.news.display_news')
@stop