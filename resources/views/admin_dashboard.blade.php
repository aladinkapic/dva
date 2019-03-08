<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Studio DVA d.o.o @stop
@section('other_css_links')

@stop
@section('other_js_links')

@stop
<!-- main content of page -->
@section('content')
    @php echo $role; @endphp
@stop