<div id="left_menu">
    <div class="exit_menu" title="Zatvorite menu" onclick="left_menus();">
        <i class="fas fa-times"></i>
    </div>
    <div class="languages">
        <div class="single_language single_language0">
            <p>BOS</p>
        </div>
        <div class="single_language">
            <p>ENG</p>
        </div>
        <div class="single_language single_language2">
            <p>GER</p>
        </div>
    </div>

    <!-- menu links -->
    <div class="menu_links">
        <div class="menu_link">
            <a href="/home">NASLOVNA</a>
        </div>
        <div class="menu_link" onclick="show_sublinks(0);">
            <a href="#">NAŠI PROJEKTI</a>
        </div>
        <div class="menu_sublinks">
            @foreach($categories as $category)
                @if($category->parent == 0)
                    <div class="menu_sublink">
                        <a href="/projekti/{{$category->id}}">
                            <p># {{$category->name}}</p>
                        </a>
                    </div>
                @endif
            @endforeach

            {{--<div class="menu_sublink">--}}
                {{--<a href="">--}}
                    {{--<p># IT - sektor</p>--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
        <div class="menu_link">
            <a href="#">NOVOSTI</a>
        </div>
        <div class="menu_link">
            <a href="/o-nama">O NAMA</a>
        </div>
        <div class="menu_link">
            <a href="/kontakt">KONTAKT</a>
        </div>
    </div>


    <div class="copyrights">
        <a href="/login">
            <p>	&copy; Copyright <span>DVA d.o.o</span> <?php echo date('Y'); ?></p>
        </a>
    </div>
</div>