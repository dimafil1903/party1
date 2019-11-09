@extends('frontEnd.layout')
@section('content')
<style>



</style>

    <div class="container py-3 py-lg-5">
        <div class="fables-team my-3">
            <h3 class="fables-second-text-color mb-5 font-weight-bold"> Команда </h3>
        </div>
    </div>




    <div class="container py-3 py-lg-5">
        <div class="fables-team my-3">
            @foreach($deputies as $deputy)
                @php
                $iter++;
                @endphp
                <div id="{{$deputy->id}}" class="  border fables-third-text-color py-4 px-6 mb-4 rounded position-relative shadow-card wow   @if($iter%2==0) {{'bounceInLeft'}} @else {{'bounceInRight'}} @endif" data-wow-delay=".4s" data-wow-duration="1.5s">
                    <div class="row overflow-hidden">
                        <div class="col-12 col-sm-6 text-center image-container translate-effect-right">
                            <img src="{{URL::asset('/storage/'.$deputy->photo)}}"  alt="Fables Template" class="fables-testimonial-block-img fables-third-background-color border-color border-2 ">
                            <div class="col-12 ">
                                <div class="fables-testimonial-block-info">
                                    <h3 class="fables-forth-text-color mt-4 mb-2 font-15 semi-font">{{$deputy->name}}</h3>
                                    <h3 class="fables-fifth-text-color font-italic font-14 mt-2">Посада: {{$deputy->position}}</h3>
                                    @php
                                        $birthday = new DateTime($deputy->date_of_birthday);
                                        $interval = $birthday->diff(new DateTime);
                                        $age=$interval->y;
                                    @endphp
                                    <h3 class="fables-fifth-text-color font-italic font-14 mt-2">Вік: {{$age}}</h3>

                                    <h3 class="fables-fifth-text-color font-italic font-20 mt-2"><a href="https://www.facebook.com/groups/Pidgorodne.Info/?fref=nf" target="_blank"><span class=" fables-iconfacebook fables-first-text-color  "></span></a></h3>


                                </div>
                            </div>



                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="fables-second-text-color font-weight-bold text-center font-18 mt-2">Біографія</h3>
                            <div class="fables-forth-text-color  font-15 semi-font mt-3   d-md-block">
                                <p class="more">
                                    {{  $deputy->bio }}
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                @endforeach
        </div>
    </div>



@endsection
