<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts.admin_master')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Kategorije projekata @stop
<meta name="csrf-token" content="{{{ csrf_token() }}}">
@section('other_css_links')
    <link rel="stylesheet" href="/admin/css/projects/project.css">
@stop
@section('other_js_links')
    <script src="/admin/js/projects/projects.js"></script>
    <script src="/admin/js/upload_images.js"></script>
@stop

@section('header_icon') fa-project-diagram @stop
@section('header_title') Pregled projekata @stop
@section('header_short')  Pregled svih projekata iz kategorije {{$subcategory}} @stop
@section('path') Administracija / Naši projekti / Pregled projekata @stop
<!-- main content of page -->
@section('content')
    <div class="projects_w">
        @php $counter = 0; @endphp
        @foreach($projects as $project)
            <div class="single_project">
                <img src="../uploaded_images/{{$project->image->name}}" alt="">
                <div class="title_of_project">
                    <h2>{{$project->title}}</h2>
                </div>
                <div class="project_shadow">
                    <div class="project_shadow_t">
                        <h2>{{$project->title}}</h2>
                        <p>{{$project->short_d}}</p>
                    </div>


                    <a href="/administrator_projects/{{$id}}/{{$project->id}}">
                        <div class="delete_project">
                            <i class="far fa-trash-alt"></i>
                        </div>
                    </a>


                    <a href="/administrator_projects/{{$id}}/{{$project->id}}/{{$project->published}}">
                        <div class="delete_project delete_project2">
                            @if($project->published) <i class="fas fa-eye-slash" title="Stavite projekat kao neobjavljen"></i> @endif
                            @if(!$project->published) <i class="fas fa-eye" title="Objavite projekat"></i> @endif
                        </div>
                    </a>

                </div>
                <div class="see_project">
                    <a href="/administrator_content/{{$project->id}}/project">
                        <p>Pogledajte projekat </p>
                        <div class="icon_box">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@stop