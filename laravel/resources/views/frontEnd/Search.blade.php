
@extends('frontEnd.layout')
@section('content')



    @if(!$news->isEmpty() && !$deputies->isEmpty())
        <div class="container-fluid mb-5">
            <div class="row ">
                <div class="col-12 mt-5 col-lg-8">
                    <h2 class="font-35 font-weight-bold fables-main-text-color">Результат пошуку по: {{$request}} </h2>
                </div>

                <div class="col-12 mt-5 col-lg-3">
                    <div class="fables-blog-search">
                        <form action="{{action('SearchController@index')}}" method="GET">
                            <div class="row">
                                <div class="col-12 col-sm-9 col-md-8 mb-3 mb-md-0">
                                    <div class="input-icon">
                                        <span class="fables-iconsearch-icon fables-input-icon font-14"></span>
                                        <input type="text" name="query" class="form-control rounded-0 py-2 width-100"
                                               style="padding-left: 15%">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-md-4 pl-md-0">
                                    <button type="submit"
                                            class="btn fables-second-background-color rounded-0 text-white font-15 semi-font py-2 btn-block">
                                        Пошук
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="data_news" class="col-12 col-lg-7  row owl-hidden ">
                    @include('frontEnd.includes.pagination_news')
            </div>

                <div id="data_dep" class="col-12 col-lg-5 owl-hidden ">
                    @include('frontEnd.includes.pagination_dep')
                </div>
                    </div>


                </div>
    @elseif($news->isEmpty() && $deputies->isEmpty())
        <div class="container mb-5 p-lg-">
            <div class="row ">
                <div class="col-12 mt-5 col-lg-8">
                    <h2 class="font-35 font-weight-bold fables-main-text-color">Результат пошуку по: {{$request}} </h2>
                </div>

                <div class="col-12 mt-5 col-lg-4">
                    <div class="fables-blog-search">
                        <form action="{{action('SearchController@index')}}" method="GET">
                            <div class="row">
                                <div class="col-12 col-sm-9 col-md-8 mb-3 mb-md-0">
                                    <div class="input-icon">
                                        <span class="fables-iconsearch-icon fables-input-icon font-14"></span>
                                        <input type="text" name="query" class="form-control rounded-0  py-2 width-100"
                                               style="padding-left: 15%">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-md-4 pl-md-0">
                                    <button type="submit"
                                            class="btn fables-second-background-color rounded-0 text-white font-15 semi-font py-2 btn-block">
                                        Пошук
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="text-center my-4 my-lg-5 py-4 py-lg-5">
                        <span class="fables-iconsearch-icon fables-second-text-color font-250 font-weight-bold "></span>
                        <h3 class="font-30 font-weight-bold fables-second-text-color">Нічого не знайдено!</h3>
                        <p class="font-20 fables-fifth-text-color my-2">Ми не можемо знайти те, що ви шукаєте</p>
                        <a href="{{url('/')}}"
                           class="btn fables-second-border-color fables-btn-rounded fables-background-link font-20 white-color px-5 py-2 mt-4">До
                            головної</a>
                    </div>
                </div>
            </div>


        </div>
    @else
        <div class="container mb-5">
            <div class="row ">
                <div class="col-12 mt-5 col-lg-8">
                    <h2 class="font-35 font-weight-bold fables-main-text-color">Результат пошуку по: {{$request}} </h2>
                </div>

                <div class="col-12 mt-5 col-lg-4">
                    <div class="fables-blog-search">
                        <form action="{{action('SearchController@index')}}" method="GET">
                            <div class="row">
                                <div class="col-12 col-sm-9 col-md-8 mb-3 mb-md-0">
                                    <div class="input-icon">
                                        <span class="fables-iconsearch-icon fables-input-icon font-14"></span>
                                        <input type="text" name="query" class="form-control rounded-0  width-100"
                                               style="padding-left: 15%">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-md-4 pl-md-0">
                                    <button type="submit"
                                            class="btn fables-second-background-color rounded-0 text-white font-15 semi-font py-2 btn-block">
                                        Пошук
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="data_news" class="col-12  row ">
                    @include('frontEnd.includes.pagination_news')
                </div>

                <div id="data_dep" class="col-12">
                    @include('frontEnd.includes.pagination_dep')
                </div>
            </div>


        </div>
    @endif
    <script>
        $(document).ready(function () {

            $(document).on('click', '#dep a', function (event) {
                event.preventDefault();

                var page = $(this).attr('href').split('page=')[1];
                fetch_dep(page);
            });
            $(document).on('click', '#news a', function (event) {
                event.preventDefault();

                var page = $(this).attr('href').split('page=')[1];
                fetch_news(page);
            });

            function fetch_dep(page) {
                $.ajax({
                    url: "/search/fetch_dep?query={{$request}}&page=" + page,
                    success: function (data) {
                        $('#data_dep').empty().html(data);
                    }
                });
            }

            function fetch_news(page) {
                $.ajax({
                    url: "/search/fetch_news?query={{$request}}&page=" + page,
                    success: function (data) {
                        $('#data_news').empty().html(data);
                        console.log(data);
                    }
                });
            }

        });
    </script>


@endsection
