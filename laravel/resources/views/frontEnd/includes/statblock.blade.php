
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
            <h2 class="fables-second-text-color font-35 font-weight-bold my-3 mt-md-5 mb-md-4">Статистика\про себе </h2>
            <p class="fables-forth-text-color">
                інформація бла бла бла
            </p>
        </div>
    </div>
    <div class="row mt-4 mt-md-5">
        @foreach($statisticks as $stat)
        <div class="col-6 col-md-3">
            <div class="fables-counter">
                <h3 class="font-14 semi-font fables-forth-text-color mb-3">{{$stat->name}}</h3>
                <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color   d-inline-block px-4 py-2 mb-4" data-count="{{$stat->stat_integer}}">0</h2>

            </div>
        </div>
            @endforeach
    </div>
</div>
