@extends('frontEnd.layout')

@section('content')
    <div id="wrapper">
    @include('frontEnd.includes.slider')

    <!-- Start Header -->

    <!-- /End Header -->
    @include('frontEnd.includes.first_block')
    @include('frontEnd.includes.program')
    @include('frontEnd.includes.statblock')

    <div class="fables-testimonial fables-after-overlay py-5 bg-rules">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="fables-contact-caption-txt">
                        <h3 class="font-25 font-weight-bold white-color mb-3 position-relative z-index">У нас сама крута команда!!!</h3>
                        <p class="fables-third-text-color position-relative z-index font-weight-light">Будемо радів якщо вона поповниться</p>

                    </div>
                </div>
                <div class="col-12 col-md-4 offset-xl-2 col-xl-2 text-center">
                    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Напиши нам</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mx-3">
                                    <div class="row">
                                        <div class="col-12" >
                                            <form class="fables-contact-form" action="{{url('/sendformmsg')}}" method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="text" name="first_name" required class="form-control p-3 rounded-0" placeholder="Ім’я">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control p-3 rounded-0"  name="last_name"  required placeholder="Прізвище">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="email" class="form-control p-3 rounded-0" name="email" required placeholder="Email">
                                                    </div>


                                                    <div class="form-group col-md-6">
                                                        <input type="tel" class="form-control p-3 rounded-0" name="phone" pattern="[+][3][8][0][0-9]{9}" value="+380" required placeholder="Телефон">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <textarea class="form-control p-3 rounded-0" placeholder="Повідомлення" name="message" rows="4" required style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12 text-center">
                                                        <button type="submit" class="btn fables-second-background-color fables-btn-rounded white-color px-7 font-20 py-2">Відправити</button>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            </form>


                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <a href="" class="btn  fables-third-background-color fables-background-link modal-title font-weight-bold fables-btn-rounded  white-color mt-3  z-index font-19 px-5  "
                       data-toggle="modal" data-target="#modalContactForm">Напиши нам</a>
                </div>
            </div>

        </div>
    </div>
    @include('frontEnd.includes.newsblock')
   @include('frontEnd.includes.ComentsBlock')


    @include('frontEnd.includes.team')
    <!-- /End page content -->

    <!-- Start Footer 2 Background Image  -->

    <script src="{{asset('assets/vendor/jquery-circle-progress/circle.js') }}"></script>
    </div>
@endsection
