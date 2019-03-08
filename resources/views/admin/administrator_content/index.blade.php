<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Pregled pojedinog projekta @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="/admin/css/content/content.css">
@stop
@section('other_js_links')
    <script src="/admin/js/upload_images.js"></script>
@stop

@section('header_icon') fa-project-diagram @stop
@section('header_title') Pregled projekata @stop
@section('header_short')  Pregled svih projekata iz kategorije {{$subcategory}} @stop
@section('path') Administracija / Naši projekti / Pregled projekata @stop
<!-- main content of page -->
@section('content')

@stop