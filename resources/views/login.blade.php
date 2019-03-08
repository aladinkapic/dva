<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Studio DVA d.o.o @stop
@section('other_css_links')
    <link rel="stylesheet" href="css/user_part/login.css">
@stop
@section('other_js_links')

@stop
<!-- main content of page -->
@section('content')
    <div class="form_w">
        <form method="post">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="form_text">
                <h3>Prijavite se</h3>
            </div>
            <div class="form_text">
                <p>Vaš email</p>
            </div>
            <div class="input_w">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="form_text">
                <p>Vaša šifra</p>
            </div>
            <div class="input_w">
                <input type="password" name="password" placeholder="Šifra ..">
            </div>
            <br>
            <div class="input_w input_w_b">
                <input type="submit" value="PRIJAVITE SE">
            </div>
        </form>
    </div>
@stop