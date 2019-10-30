@extends('frontEnd.layout')
@section('content')
    <div class="container">
    <div class="col-12 col-lg-12 p-0 font-weight-bold mt-2 wow fadeInLeft mb-3 mb-md-0" data-wow-delay="1s" data-wow-duration="1.5s">
      <div class="row">
        <div class="col-12 col-lg-6">
            <h2 class="font-30 font-weight-bold fables-second-text-color">Передвиборна програма</h2>
        </div>
        <div class="col-12 col-lg-6">
        <p class=" font-16 my-3">
            Україна потребує кардинальних змін. Це підтвердило голосування за Володимира Зеленського на президентських виборах 2019 року. Але стара політична система, система корупції, брехні та свавілля, не хоче й не здатна змінитися. Необхідна консолідація всіх гілок влади.
        </p>
        <p class=" font-16 my-3 collapse  show" data-parent="#accordion" aria-labelledby="heading1" >
            Ми втілимо курс президента Зеленського в конкретні законопроекти і політичні рішення, сформуємо професійний уряд, якому буде довіряти народ України, і разом запровадимо кардинальні зміни, які дозволять нам зробити Україну вільною, незалежною, процвітаючою Країною Мрії.
        </p>
    </div>
      </div>
    </div>
    <div class="container  mt-3 position-relative z-index>
        <div class="row">

            <div class="col-12 col-lg-12 bg-white px-6 py-3  py-md-5 ">

                <div id="accordion">


                    @php
                        $i=0;
                    @endphp
                    @foreach($programs as $program)
                        @php
                        $i++;
                        @endphp
                        <div class="card border-0 mb-2 wow @if($i%2==0) fadeInRight @else  fadeInLeft @endif" data-wow-delay="1s" data-wow-duration="1.5s">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="heading{{$program->id}}">
                                <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block
 position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                                    <button class="btn fables-main-text-color bg-transparent font-14 font-weight-bold  focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0  collapsed" data-toggle="collapse" data-target="#collapse{{$program->id}}" aria-expanded="false" aria-controls="collapse{{$program->id}}">
                                        {{ $program->name}}
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse{{$program->id}}" class="collapse" aria-labelledby="heading{{$program->id}}" data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                    {!! $program->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
