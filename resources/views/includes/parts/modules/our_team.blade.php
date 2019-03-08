

<div class="our_team">
    <div class="header_line"></div>
    <div class="our_team_us">

        <div class="team_section">
            <h4>ODSJEK ZA ARHITEKTURU</h4>
        </div>
        @foreach($architects as $architect)
            <div class="our_team_me">
                <img src="/uploaded_images/{{$architect->image->name}}" alt="">
                <div class="mine_wrapper">
                    <h4>{{$architect->name}}</h4>
                    <p>{{$architect->role_in_company}} </p>
                    <div class="mine_social">
                        @if(!empty($architect->facebook))
                            <a target="_blank" href="{{$architect->facebook}}"><i class="fab fa-facebook-square" title="Facebook profil"></i></a>
                        @endif
                        @if(!empty($architect->linkedin))
                            <a target="_blank" href="{{$architect->linkedin}}"><i class="fab fa-linkedin-in" title="Linkedin profil"></i></a>
                        @endif
                        @if(!empty($architect->twitter))
                            <a target="_blank" href="{{$architect->twitter}}"><i class="fab fa-twitter" title="Twitter profil"></i></a>
                        @endif
                        @if(!empty($architect->github))
                            <a target="_blank" href="{{$architect->github}}"><i class="fab fa-github" title="Github profil"></i></a>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach

        {{--<div class="our_team_me">--}}
        {{--<img src="images/c4.jpg" alt="">--}}
        {{--<div class="mine_wrapper">--}}
        {{--<h4>Irnes Mujagić</h4>--}}
        {{--<p>Irnes role - Dosada </p>--}}
        {{--<div class="mine_social">--}}
        {{--<a href=""><i class="fab fa-google-plus-square" title="Google plus"></i></a>--}}
        {{--<a href=""><i class="fab fa-youtube" title="Youtube kanal"></i></a>--}}
        {{--<a href=""><i class="fab fa-facebook-square" title="Facebook stranica"></i></a>--}}
        {{--<a href=""><i class="fab fa-instagram" title="Instagram stranica"></i></a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}



    </div>
</div>




<div class="our_team">
    <div class="header_line"></div>
    <div class="our_team_us">

        <div class="team_section">
            <h4>ODSJEK ZA ELEKTROTEHNIKU I ELEKTRONIKU</h4>
        </div>
        @foreach($engineers as $engineer)
            <div class="our_team_me">
                <img src="/uploaded_images/{{$engineer->image->name}}" alt="">
                <div class="mine_wrapper">
                    <h4>{{$engineer->name}}</h4>
                    <p>{{$engineer->role_in_company}} </p>
                    <div class="mine_social">
                        @if(!empty($engineer->facebook))
                            <a target="_blank" href="{{$engineer->facebook}}"><i class="fab fa-facebook-square" title="Facebook profil"></i></a>
                        @endif
                        @if(!empty($engineer->linkedin))
                            <a target="_blank" href="{{$engineer->linkedin}}"><i class="fab fa-linkedin-in" title="Linkedin profil"></i></a>
                        @endif
                        @if(!empty($engineer->twitter))
                            <a target="_blank" href="{{$engineer->twitter}}"><i class="fab fa-twitter" title="Twitter profil"></i></a>
                        @endif
                        @if(!empty($engineer->github))
                            <a target="_blank" href="{{$engineer->github}}"><i class="fab fa-github" title="Github profil"></i></a>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach

        {{--<div class="our_team_me">--}}
        {{--<img src="images/c4.jpg" alt="">--}}
        {{--<div class="mine_wrapper">--}}
        {{--<h4>Irnes Mujagić</h4>--}}
        {{--<p>Irnes role - Dosada </p>--}}
        {{--<div class="mine_social">--}}
        {{--<a href=""><i class="fab fa-google-plus-square" title="Google plus"></i></a>--}}
        {{--<a href=""><i class="fab fa-youtube" title="Youtube kanal"></i></a>--}}
        {{--<a href=""><i class="fab fa-facebook-square" title="Facebook stranica"></i></a>--}}
        {{--<a href=""><i class="fab fa-instagram" title="Instagram stranica"></i></a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}



    </div>
</div>