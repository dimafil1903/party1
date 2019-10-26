@extends('frontEnd.layout')
@section('content')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v4.0&appId=381713045665388&autoLogAppEvents=1"></script>
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" class="fables-second-text-color">Головна</a></li>
                    <li class="breadcrumb-item active">Новини</li>

                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="fables-second-text-color mb-4 mb-lg-5 mt-5 text-center font-weight-bold">Рекомендовані</h2>
        <div class="row my-3 my-lg-1">

            <div class="owl-carousel owl-theme px-6 my-0" id="fables-partner-carousel">
                @foreach($featured_news as $featured_news_item)
                <div class="image-container translate-effect-right">
                    <a class="border-bottom" href="{{url('news/'.$featured_news_item->id)}}"><img src="{{asset('/storage/'.$featured_news_item->image)}}" alt="Fables Template" style="height: 180px" class="fables-partner-carousel-img"></a>
                    <h2 class="  font-17 semi-font m-3 text-center    ">
                        <a href="{{url('news/'.$featured_news_item->id)}}" class=" fables-main-text-color fables-second-hover-color ">{{$featured_news_item->title}}</a>
                    </h2>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        </div>
    </div>
    <div class="container">
        <h2 class="fables-second-text-color mb-4 mb-lg-5 mt-5 text-center font-weight-bold">Останні</h2>
        <div id="cd-timeline" class="blog-timeline">
            <span class="fables-second-background-color line"></span>
            {{ csrf_field() }}
        </div>
    </div>
    <script>
        $(document).ready(function(){

            var _token = $('input[name="_token"]').val();

            load_data('', _token);

            function load_data(id="", _token)
            {
                $.ajax({
                    url:"{{ route('loadmore.load_data') }}",
                    method:"POST",
                    data:{id:id, _token:_token},
                    success:function(data)
                    {
                        $('#load_more_button').remove();
                        $('#cd-timeline').append(data);
                        var id = $(this).data('id');
                        console.log(id)
                    }
                });
            }

            $(document).on('click', '#load_more_button', function(){
                var id = $(this).data('id');
                $('#load_more_button').html('<b>Завантаження</b>');
                $('#load_more_button').attr('disabled','disabled');
                load_data(id, _token);
            });


        });
    </script>
@endsection
