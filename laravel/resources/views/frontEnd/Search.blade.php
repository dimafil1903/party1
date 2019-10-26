
@extends('frontEnd.layout')
@section('content')


    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-12">
                <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5">Останні новини</h2>
            </div>

            @foreach($news as $newsitem)
                <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s">
                    <div class="image-container translate-effect-right">
                        <a href="#"><img src="{{URL::asset('/storage/'.$newsitem->image)}}" alt=""></a>
                    </div>
                    <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">{{$newsitem->title}}</a></h2>
                    <p class="fables-fifth-text-color font-13 my-1">{{ date("d.m.Y",strtotime($newsitem->created_at)) }}</p>
                    <div class="text-cut100" id="{{$newsitem->id}}">
                        <p class="fables-forth-text-color font-14">
                            {{ $newsitem->excerpt }}
                        </p>
                    </div>

                    <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a>

                </div>
            @endforeach
        </div>
        {{ $news->links() }}
    </div>



@endsection
