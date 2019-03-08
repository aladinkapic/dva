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
@section('header_title') Pregled kategorija @stop
@section('header_short') Pregledajte kategorije projekata @stop
@section('path') Administracija / Naši projekti / Pregled kategorija @stop
<!-- main content of page -->
@section('content')
    <!-- set counter -->
    @php $counter = 0; $counter2 = 0; @endphp

    @foreach($categories as $category)
        @if($category->parent == null)
            <div class="single_category">
                {{ Form::open(array('url' => 'administrator_categories/' . $category->id)) }}
                {{ Form::hidden('_method', 'PATCH') }}
                <input type="text" value="{{$category->name}}" name="name" autocomplete="off">
                <input type="text" value="{{$category->name_eng}}" name="name_eng"  autocomplete="off">
                <input type="text" value="{{$category->name_de}}" name="name_de" autocomplete="off">
                <label for="edit_button@php echo $counter2; @endphp">
                    <div class="delete_it update_it">
                        <i class="far fa-edit"></i>
                    </div>
                </label>
                {{ Form::submit('', array('class' => 'hidden_input', 'id' => 'edit_button'.$counter2++)) }}
                {{ Form::close() }}


            <!-- preview projects -->
                <div class="delete_it see_it">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="delete_it">
                    <i class="fas fa-trash-alt"></i>
                </div>

                {{ Form::open(array('url' => 'administrator_categories/' . $category->id)) }}
                {{ Form::hidden('_method', 'DELETE') }}
                <label for="delete_button@php echo $counter; @endphp">
                    <div class="delete_it">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                </label>
                {{ Form::submit('', array('class' => 'hidden_input', 'id' => 'delete_button'.$counter++)) }}
                {{ Form::close() }}

            </div>

            <div class="all_subcategories">
                @foreach($categories as $subcategory)
                    @if($subcategory->parent == $category->id)
                        <div class="single_category single_category_2">
                            {{ Form::open(array('url' => 'administrator_categories/' . $subcategory->id)) }}
                            {{ Form::hidden('_method', 'PATCH') }}
                            <input type="text" value="{{$subcategory->name}}" name="name" autocomplete="off">
                            <input type="text" class="input_2" value="{{$subcategory->name_eng}}" name="name_eng"  autocomplete="off">
                            <input type="text" class="input_3" value="{{$subcategory->name_de}}" name="name_de" autocomplete="off">
                            <label for="edit_button@php echo $counter2; @endphp">
                                <div class="delete_it update_it">
                                    <i class="far fa-edit"></i>
                                </div>
                            </label>
                            {{ Form::submit('', array('class' => 'hidden_input', 'id' => 'edit_button'.$counter2++)) }}
                            {{ Form::close() }}


                        <!-- preview projects -->
                            <a href="administrator_projects/{{$subcategory->id}}">
                                <div class="delete_it see_it">
                                    <i class="fas fa-eye"></i>
                                </div>

                            </a>


                            {{ Form::open(array('url' => 'administrator_categories/' . $subcategory->id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <label for="delete_button@php echo $counter; @endphp">
                                <div class="delete_it">
                                    <i class="fas fa-trash-alt"></i>
                                </div>
                            </label>
                            {{ Form::submit('', array('class' => 'hidden_input', 'id' => 'delete_button'.$counter++)) }}
                            {{ Form::close() }}

                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    @endforeach

    <div class="single_category insert_new_category">
        <form action="administrator_categories" method="post">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="text" name="name" placeholder="Naziv kategorije">
            <input type="text" name="name_eng" placeholder="Eng .. ">
            <input type="text" name="name_de" placeholder="De ..">
            <input type="submit" class="save_button" value="SPREMITE">
        </form>
    </div>
@stop