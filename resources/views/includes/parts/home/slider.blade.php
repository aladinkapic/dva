<div class="main_slider">
    @php $counter = 0; @endphp
    @foreach($posts as $post)
    <div class="image @php if($counter++ != 0) echo 'image_hidden'; @endphp">
        <img class="desktop_image" src="uploaded_images/{{$post->huge_image}}">
        <img class="mobile_image" src="uploaded_images/{{$post->small_image}}">
    </div>
    @endforeach

    <div class="slider_shadow">
        <div class="text_wrapper">
            <div class="top_line"></div>
            <div class="right_line"></div>
            <div class="bottom_line"></div>
            <div class="left_line"></div>
            <!-- count for hidden elements -->
            @php $counter = 0; @endphp
            @foreach($posts as $post)
            <div class="slider_texts @php if($counter++ != 0) echo 'slider_texts_hidden'; @endphp">
                <h4>{{$post->small_title}}</h4>
                <h1>
                    {!! nl2br($post->huge_title ) !!}
                </h1>

                <a href="{{$post->link}}">
                    <h5>See project --></h5>
                </a>
            </div>
            @endforeach
        </div>

        <div class="slider_bars">
            @php $counter = 0; @endphp
            @foreach($posts as $post)
            <div class="slider_arrow @php if($counter == 0) echo 'slider_arrow_active'; @endphp" onclick="set_slide('@php echo $counter++; @endphp');"></div>
            @endforeach

            <!-- <div class="slider_arrow" onclick="set_slide(1);"></div>
            <div class="slider_arrow" onclick="set_slide(2);"></div> -->
        </div>
    </div>
</div>