<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Kategorije projekata @stop
@section('other_css_links')
    <link rel="stylesheet" href="admin/css/projects/projects_categories.css">
@stop
@section('other_js_links')
    <script src="/admin/js/projects/projects.js"></script>
@stop

@section('header_icon') fa-project-diagram @stop
@section('header_title') Pregled kategorija novosti @stop
@section('header_short') Pregledajte te uredite sve kategorije novosti @stop
@section('path') Administracija / Novosti / Pregled kategorija novosti @stop
<!-- main content of page -->
@section('content')
    <!-- set counter -->
    @php $counter = 0;  @endphp

    @foreach($news_cats as $news_cat)
        <div class="single_category">
            {{ Form::open(array('url' => 'administrator_news_categories/'.$news_cat->id )) }}
            {{ Form::hidden('_method', 'PATCH') }}
            <input type="text" value="{{$news_cat->name}}" name="name" autocomplete="off">
            <input type="text" value="{{$news_cat->name_en}}" name="name_eng"  autocomplete="off">
            <input type="text" value="{{$news_cat->name_de}}" name="name_de" autocomplete="off">
            <label for="edit_button@php echo $counter; @endphp">
                <div class="delete_it update_it">
                    <i class="far fa-edit"></i>
                </div>
            </label>
            {{ Form::submit('', array('class' => 'hidden_input', 'id' => 'edit_button'.$counter++)) }}
            {{ Form::close() }}


        <!-- preview projects -->
            <a href="/administrator_news/{{$news_cat->id}}/1">
                <div class="delete_it see_it">
                    <i class="fas fa-eye"></i>
                </div>
            </a>

            <div class="delete_it">
                <i class="fas fa-trash-alt"></i>
            </div>

            {{ Form::open(array('url' => 'administrator_news_categories/'.$news_cat->id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            <label for="delete_button@php echo $counter; @endphp">
                <div class="delete_it">
                    <i class="fas fa-trash-alt"></i>
                </div>
            </label>
            {{ Form::submit('', array('class' => 'hidden_input', 'id' => 'delete_button'.$counter++)) }}
            {{ Form::close() }}

        </div>
    @endforeach

    <div class="single_category insert_new_category">
        <form action="administrator_news_categories" method="post">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="text" name="name" placeholder="Naziv kategorije" autocomplete="off">
            <input type="text" name="name_eng" placeholder="Eng .. " autocomplete="off">
            <input type="text" name="name_de" placeholder="De .." autocomplete="off">
            <input type="submit" class="save_button" value="SPREMITE">
        </form>
    </div>
@stop