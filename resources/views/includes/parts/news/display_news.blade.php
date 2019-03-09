@php use App\User; @endphp

<div class="all_news_w">
    @foreach($news as $new)
        @php $user = User::find($new->user_id); @endphp

        <div class="single_new">
            <div class="new_image_w">
                <img src="/images/new1.jpg" alt="">
            </div>
            <div class="news_short">
                <p> <span>{{$user->name}} {{$user->surname}}</span> {{$new->time}}</p>
                <h2>{{$new->title}}</h2>
                <h5>{{$new->short_description}}</h5>

                <div class="continue_reading">
                    <a href="/novost/{{$new->title}}">
                        <p>Nastavite čitati </p>
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    {{--<div class="single_new">--}}
        {{--<div class="new_image_w">--}}
            {{--<img src="images/new2.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="news_short">--}}
            {{--<p> <span>Aladin Kapić</span> 31. Januar 2019 u 17:56</p>--}}
            {{--<h2>Još jedna novost</h2>--}}
            {{--<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis... Continue...</h5>--}}

            {{--<div class="continue_reading">--}}
                {{--<a href="">--}}
                    {{--<p>Nastavite čitati </p>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


</div>