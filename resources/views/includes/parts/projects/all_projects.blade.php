<div class="all_projects_w">
    <div class="all_projects_categories">
        <div class="category_link">
            <a href="/projekti/{{$id}}">
                <p>Svi projekti</p>
            </a>
        </div>
        @foreach($subcats as $subcat)
            <div class="category_link">
                <a href="">
                    <p>|</p>
                </a>
            </div>
            <div class="category_link">
                <a href="/projekti/{{$id}}/{{$subcat->id}}">
                    <p>{{$subcat->name}}</p>
                </a>
            </div>
        @endforeach
    </div>

    <div class="projects" id="projects_wrapper">
        @foreach($projects as $project)
            <div class="single_project">
                <img src="/uploaded_images/{{$project->image->name}}" alt="">
                <div class="title_of_project">
                    <h2>{!! nl2br($project->title ) !!}</h2>
                </div>
                <div class="project_shadow">
                    <div class="project_shadow_t">
                        <h2>
                            {!! nl2br($project->title ) !!}
                        </h2>
                        <p>{!! nl2br($project->short_d ) !!}</p>
                    </div>
                </div>
                <div class="see_project">
                    <a href="/projekat/{{$project->id}}">
                        <p>Pogledajte projekat </p>
                        <div class="icon_box">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach





        {{--<div class="single_project">--}}
            {{--<img src="/images/i2.png" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="/images/i3.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="single_project">--}}
            {{--<img src="/images/i4.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="images/i5.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="images/i6.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="images/i7.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="images/i8.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="images/i9.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="images/i10.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single_project">--}}
            {{--<img src="images/i11.jpg" alt="">--}}
            {{--<div class="title_of_project">--}}
                {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
            {{--</div>--}}
            {{--<div class="project_shadow">--}}
                {{--<div class="project_shadow_t">--}}
                    {{--<h2>Wooden <br> Horizontal <br> Villa</h2>--}}
                    {{--<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="see_project">--}}
                {{--<a href="">--}}
                    {{--<p>Pogledajte projekat </p>--}}
                    {{--<div class="icon_box">--}}
                        {{--<i class="fas fa-angle-right"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div> --}}

    </div>

    <div class="page_numbers">

    </div>

</div>