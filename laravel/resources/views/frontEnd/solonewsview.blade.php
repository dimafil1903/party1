@extends('frontEnd.layout')
@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v4.0&appId=381713045665388&autoLogAppEvents=1"></script>

<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                <li class="breadcrumb-item"><a href="{{url('/')}}" class="fables-second-text-color">Головна</a></li>
                <li class="breadcrumb-item"><a href="{{url('/news')}}" class="fables-second-text-color">Новини</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /End Breadcrumbs -->

<!-- Start page content -->
<div class="container">
    <div class="row my-4 my-lg-5">
        <div class="col-12 col-lg-8">
            <img src="{{asset('/storage/'.$news->image)}}" alt="" class="img-fluid">
            <h2 class="font-23 semi-font my-3"><a  class="fables-main-text-color fables-second-hover-color">{{$news->title}}</a></h2>
            <h2 class="font-17 bold-font fables-second-text-color my-3">{{$news->excerpt}}</h2>
            <div class="fables-forth-text-color fables-blog-date">
                <div class="row">
                    <div class="col-12 col-sm-10 pt-2">
                        <span class="fables-icondata fables-second-text-color mr-1"></span>
                        <span class="mr-3">{{$news->created_at}}</span>
                        <a href="#fb-comments"><span class="fables-iconcomment fables-second-text-color mr-1"></span></a>
                        <a href="#fb-comments" class="fables-forth-text-color fables-second-hover-color position-relative z-index"><span class="fb-comments-count" data-href="{{url('news/'.$news->id)}}"></span></a>
                        <span class="fables-forth-text-color fables-single-tags ml-4">
                                          <span class="fables-icontags-light fables-second-text-color"></span>
                                          @php
                                              $pieces = explode(" ", $news->meta_keywords);

                                                    foreach ($pieces as $piece){
                                                    echo "<a href='".url('searh/?query='.$piece)."'>$piece</a>";
                                                    }
                                          @endphp
                                      </span>

                    </div>
                </div>

            </div>
            <p class="fables-forth-text-color fables-single-blog font-14 my-3">
            {!! $news->body !!}
            </p>
            <div class="fabales-single-share">
                <div class="row mt-3 mb-4">
                    <div class="col-3 col-sm-2">
                        <span class="fables-forth-text-color underline  mt-2 font-18 d-inline-block">Поділитись</span>
                    </div>
                    <div class="col-7 px-0 px-sm-3">
                        <ul class="nav mt-2">


                            <li><a onclick="window.open('fb-messenger://share?link={{url()->current()}}'  + '&app_id={{setting('general.app_id')}}', 'Поділитись', 'width=400,height=500'); return false;" href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fab fa-facebook-messenger"></i></a></li>
                            <li><a  onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}', 'Поділитись', 'width=400,height=500'); return false;"href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fables-iconfacebook"></i></a></li>
                            <li><a href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fables-iconinstagram"></i></a></li>
                            <li><a  onclick="window.open('https://telegram.me/share/url?url={{url()->current()}}', 'Поділитись', 'width=400,height=500'); return false;" href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class=" fab fa-telegram"></i></a></li>
                            <li><a onclick="window.open('https://twitter.com/intent/tweet?url={{url()->current()}}', 'Поділитись', 'width=400,height=500'); return false;" href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fables-icontwitter"></i></a></li>
                            <li><a href="mailto:info@example.com?&subject=&body={{url()->current()}} " class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fables-iconemail"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-3 mt-3 mt-sm-0 text-center">
                        <button class="btn btn-link fables-forth-border-color fables-forth-hover-backround-color fables-forth-text-color text-center font-14 float-none float-sm-right py-2 px-4" onclick="window.print();"><span class="fables-iconprint"></span> Надрукувати статтю</button>
                    </div>

                </div>

            </div>
            <hr>



            <div class="fables-comments" id="fb-comments">

                    <div class="fb-comments" data-href="{{url('news/'.$news->id)}}" data-width="" data-numposts="5"></div>

            </div>



        </div>
        <div class="col-12 col-lg-4">
            <div class="fables-blog-search">
                <form action="{{action('SearchController@index')}}" method="GET">
                    <div class="row">
                        <div class="col-12 col-sm-9 col-md-8 mb-3 mb-md-0">
                            <div class="input-icon">
                                <span class="fables-iconsearch-icon fables-input-icon font-14"></span>
                                <input type="text" name="query" class="form-control rounded-0 py-2 width-100">
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 col-md-4 pl-md-0">
                            <button type="submit" class="btn fables-second-background-color rounded-0 text-white font-15 semi-font py-2 btn-block">Пошук</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="mt-4">
                <h2 class="position-relative font-23 semi-font fables-blog-category-head fables-main-text-color fables-second-before pl-3 mb-4">Останні новини</h2>
                @foreach($latest_news as $latestnewsitem)


                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{url('news/'.$latestnewsitem->id)}}"><img src="{{asset('/storage/'.$latestnewsitem->image)}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-8 pl-0">
                        <a href="{{url('news/'.$latestnewsitem->id)}}" class="fables-main-text-color bold-font fables-second-hover-color blog-smaller-head">{{$latestnewsitem->title}}</a>
                        <p class="fables-forth-text-color fables-blog-date-cat font-14 mt-1">{{$latestnewsitem->created_at}}</p>
                    </div>
                </div>

                @endforeach
                <div class="text-right">
                    <a href="{{url('news')}}" class="btn fables-second-text-color underline fables-main-text-color font-14">Більше</a>
                </div>
                <hr>
            </div>
            <div class="mt-4">
                <h2 class="position-relative font-23 semi-font fables-blog-category-head fables-main-text-color fables-second-before pl-3 mb-4">РЕКЛАМА</h2>
                <hr>
            </div>
            <div class="mt-4">
                <h2 class="position-relative font-23 semi-font fables-blog-category-head fables-main-text-color fables-second-before pl-3 mb-4">Теги</h2>
                <ul class="nav fables-blog-cat-list fables-forth-text-color fables-second-hover-color-link fables-blog-cat-tags">
                    @php
                        $pieces = explode(" ", $news->meta_keywords);

                              foreach ($pieces as $piece){
                              echo " <li><a href='".url('/search/?query='.$piece)."'>$piece</a></li>";
                              }
                    @endphp

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /End page content -->
@endsection
