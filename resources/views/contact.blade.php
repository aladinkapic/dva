<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Studio DVA d.o.o @stop
@section('other_css_links')
    <link rel="stylesheet" type="text/css" href="css/contact/contact.css">
@stop
@section('other_js_links')
    <script type="text/javascript" src="js/map.js"></script>
@stop
<!-- main content of page -->
@section('content')
    @include('includes.parts.contact.contactus')
@stop