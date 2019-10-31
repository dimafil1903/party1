@extends('frontEnd.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="text-center my-4 my-lg-5 py-4 py-lg-5">
                    <h1 class="fables-second-text-color font-250 font-weight-bold"></h1>
                    <h3 class="font-30 font-weight-bold fables-second-text-color">Нічого не знайдено!</h3>
                    <p class="font-20 fables-fifth-text-color my-2">Ми не можемо знайти сторінку, яку ви шукаєте</p>
                    <a href="{{url('/')}}" class="btn fables-second-border-color fables-btn-rounded fables-background-link font-20 white-color px-5 py-2 mt-4">До головної</a>
                </div>
            </div>
        </div>

    </div>
@endsection
