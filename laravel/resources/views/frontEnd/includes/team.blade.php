<div class="container">
    <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-3 my-lg-5">Team</h2>
    <div class="row overflow-hidden">
        @php
        $iter=0.5;
        $i=0;
        @endphp
        @foreach($deputies as $dep)
            @php
            $i++;
                $iter+=0.2;
            @endphp
        <div class="col-6 col-md-3 mb-4 wow @if($i>4) bounceInUp @else bounceInDown @endif " data-wow-delay="{{$iter}}s" data-wow-duration="{{$iter}}s">
            <div class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                <div class="image-container shine-effect">
                    <a href="#"><img class="w-100" src="{{URL::asset('/storage/'.$dep->photo)}}" alt="Card image cap"></a>
                </div>
                <div class="card-body">
                    <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">{{$dep->name}}</a></h5>
                    <p class="font-13 fables-forth-text-color my-1">{{$dep->position}}</p>
                    <ul class="nav fables-team-social-links">
                        <li><a href="{{$dep->social}}" target="_blank"><span class="fables-iconfacebook fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
            @endforeach

    </div>
    <div class="col-12 col-md-12 offset-xl-12 position-sticky col-xl-12 text-center">
        <a href="{{url('/deputies')}}" class="btn fables-second-background-color fables-btn-rounded white-color m-3 position-relative z-index font-19 px-5 py-2 white-color-hover">Вся команда</a>
    </div>

</div>
