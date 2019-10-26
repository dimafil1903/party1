
<div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
    <div class="container position-relative z-index">
        <div class="row">
            <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0" data-wow-delay="1s" data-wow-duration="1.5s">
                <img src="assets/custom/images/choose-img.jpg" alt="" class="w-100">
            </div>
            <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.5s">
                <h2 class="font-30 font-weight-bold fables-second-text-color">Передвиборна програма</h2>
                <p class="fables-main-text-color font-14 my-3">
                    Україна потребує кардинальних змін. Це підтвердило голосування за Володимира Зеленського на президентських виборах 2019 року. Але стара політична система, система корупції, брехні та свавілля, не хоче й не здатна змінитися. Необхідна консолідація всіх гілок влади.
                </p>
                <p class="fables-main-text-color font-14 my-3 collapse  show" data-parent="#accordion" aria-labelledby="heading1" >
                Ми втілимо курс президента Зеленського в конкретні законопроекти і політичні рішення, сформуємо професійний уряд, якому буде довіряти народ України, і разом запровадимо кардинальні зміни, які дозволять нам зробити Україну вільною, незалежною, процвітаючою Країною Мрії.
                </p>
                <div id="accordion">



                    @foreach($programs as $program)
                    <div class="card border-0 mb-2">
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
                <div class="col-12 col-md-12 offset-xl-12 position-sticky col-xl-12 text-center">
                    <a href="contactus1.html" class="btn fables-second-background-color fables-btn-rounded white-color mt-3 position-relative z-index font-19 px-5 py-2 white-color-hover">Вся програма</a>
                </div>
            </div>
        </div>

    </div>
</div>
