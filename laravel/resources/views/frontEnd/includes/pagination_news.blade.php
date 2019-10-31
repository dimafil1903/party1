@if(!$news->isEmpty())


    <h2 class="col-12 mt-5 mb-5 font-weight-bold fables-second-text-color">Новини</h2>
    @foreach($news as $newsitem)
        <div class="col-12 col-lg-6 wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s">
            <div class="image-container translate-effect-right">
                <a href="{{url('/news/'.$newsitem->id)}}"><img src="{{URL::asset('/storage/'.$newsitem->image)}}"
                                                               alt=""></a>
            </div>
            <h2 class="font-18 semi-font font-18  mt-3"><a href="{{url('/news/'.$newsitem->id)}}"
                                                           class="fables-main-text-color fables-second-hover-color">{{$newsitem->title}}</a>
            </h2>
            <p class="fables-fifth-text-color font-13">{{ date("d.m.Y",strtotime($newsitem->created_at)) }}</p>
            <div class="text-cut100" id="{{$newsitem->id}}">
                <p class="fables-forth-text-color font-14">
                    {{ $newsitem->excerpt }}
                </p>
            </div>

            <a href="{{url('/news/'.$newsitem->id)}}"
               class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Читати більше</a>

        </div>
    @endforeach
    <div id="news" class="col-12">
        {!! $news->links() !!}
    </div>


@endif
