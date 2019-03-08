<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Studio DVA d.o.o @stop
@section('other_css_links')
    <link rel="stylesheet" type="text/css" href="/css/projects/all_projects.css">
    <link rel="stylesheet" type="text/css" href="/css/modules/all_modules.css">
@stop
@section('other_js_links')
    <script src="/js/projects/project_align.js"></script>
@stop
<!-- main content of page -->
@section('content')
    <!-- page includes -->
    <div class="header_one">
        <div class="header_line"></div>
        <h1>
            {{$category_name}}
        </h1>
    </div>

    @include('includes.parts.projects.all_projects')
@stop