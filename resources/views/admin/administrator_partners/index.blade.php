<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Partneri @stop
@section('other_css_links')
    <link rel="stylesheet" href="admin/css/home/partners.css">
@stop
@section('other_js_links')

@stop

@section('header_icon') fa-home @stop
@section('header_title') Pregled partnera @stop
@section('header_short') Pregledajte sve unešene partnere @stop
@section('path') Administracija / Naslovna strana / Pregled partnera @stop
<!-- main content of page -->
@section('content')
    <div class="all_partners">
        <!-- set counter -->
        @php $counter = 0; @endphp

        @foreach($partners as $partner)
            <div class="single_partner">
                <img src="uploaded_images/{{$partner->image}}" alt="">
                <!--
                <div class="delete_it" title="Obrišite"> <i class="fas fa-trash-alt"></i> </div>
                        -->

                {{ Form::open(array('url' => 'administrator_partners/' . $partner->id)) }}
                {{ Form::hidden('_method', 'DELETE') }}
                <label for="delete_button@php echo $counter; @endphp">
                    <div class="delete_it" title="Obrišite"> <i class="fas fa-trash-alt"></i> </div>
                </label>
                {{ Form::submit('Delete this Nerd', array('class' => 'hidden_input', 'id' => 'delete_button'.$counter++)) }}
                {{ Form::close() }}
            </div>
        @endforeach
    </div>

    <div class="insert_new">
        <form action="administrator_partners" method="post" enctype="multipart/form-data">
            @csrf <!-- {{ csrf_field() }} -->
            <label for="image">
                <i class="fas fa-image"></i>
                <p>Izaberite sliku</p>
            </label>
            <input type="file" name="image" id="image" class="hidden_input">
            <input type="submit" value="SPREMITE">
        </form>
    </div>
@stop