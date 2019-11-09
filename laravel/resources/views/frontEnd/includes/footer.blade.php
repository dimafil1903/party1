<div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                <h2 class="font-30 semi-font mb-5">Підписатися на розсилку</h2>
                <form class="form-inline position-relative" method="post" action="{{url('/save_mail')}}">
                    <div class="form-group fables-subscribe-formgroup">
                        <input type="email" name="email" class="form-control fables-subscribe-input fables-btn-rouned" placeholder="Ваш Email">
                    </div>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <button type="submit" class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">Підписатися</button>
                </form>

            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">


                @if(setting('site.logo'))
                    <a href="{{url('/')}}"
                       class="fables-second-border-color image-container border-bottom pb-3 d-block mb-3 mt-minus-13"><img
                            src="{{URL::asset('/storage/'.setting('site.logo'))}}" alt="{{ setting('site.title')}}"
                            alt="fables template"></a>
                @else
                    <a class=""  href="{{url('/')}}">
                        <h5 class="fables-third-text-color font-weight-bold  ">{{setting('site.pre_title')}}
                            <span class="fables-second-text-color font">{{setting('site.title')}}</span>
                        </h5>

                    </a>
                @endif

                <p class="font-15 fables-third-text-color">
                    {!! setting('site.description') !!}
                </p>

            </div>

            <div class="col-12 col-sm-6 col-lg-4">

                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Зв'яжіться з нами</h2>
                @if(setting('site.adress'))
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>Адреса
                    </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">{!! setting('site.adress') !!}</p>
                </div>
                @endif
                @if(setting('site.adress'))
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>Телефон
                    </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">{{setting('site.phone')}}</p>
                </div>
                @endif
                @if(setting('site.adress'))
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                        Пошта </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">{{setting('site.email')}}</p>
                </div>
                @endif
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">Мапа сайту</h2>
                <ul class="nav fables-footer-links">
                    {{menu('Main menu')}}
                </ul>
            </div>

        </div>

    </div>
</div>
<div class="copyright fables-main-background-color mt-0 border-0 white-color">
    <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
        <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
    <p class="mb-0">Copyright © Fables 2018. All rights reserved.</p>

</div>
