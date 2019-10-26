@extends('frontEnd.layout')
@section('content')


    <div class="fables-bussiness-section bg-rules ">
        <div class="container-fluid ">
            <div class="row overflow-hidden">
                <div class=" py-3 py-lg-0 col-sm-6 offset-sm-6 p-sm-0">
                    <div class="fables-bussiness-caption p-4" >
                        <h2 class="fables-second-text-color my-0 font-30 font-weight-bold position-relative z-index wow fadeInRight" data-wow-duration="2s">Приєднуйся до нашої команди бла бла бла </h2>
                        <div class="fables-forth-text-color position-relative z-index  mt-4 mb-5  wow fadeInRight" data-wow-duration="2s">
                            Приєднуйся до нашої команди бла бла бла текст  Приєднуйся до нашої команди бла бла бла текст  Приєднуйся до нашої команди бла бла бла текст<br> <br>
                            Приєднуйся до нашої команди бла бла бла текст  Приєднуйся до нашої команди бла бла бла текст  Приєднуйся до нашої команди бла бла бла текст
                            <br><br>
                            Приєднуйся до нашої команди бла бла бла текст. <br> <br>
                            Приєднуйся до нашої команди бла бла бла тек Приєднуйся до нашої команди бла бла бла текст Приєднуйся до нашої команди бла бла бла Приєднуйся до нашої команди бла бла бла текстre,
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-7">
    <div class="row pt-7">
        <div class="col-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            <form class="fables-contact-form" action="{{url('/sendform')}}" method="POST">
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
                        <select name="position" class="form-control h-100 rounded-0"   required>
                            <option  value="" >Оберіть діяльнсть</option>
                            <option value="Прихильник">
                                Прихильник
                            </option>
                            <option value="Експерт">
                                Експерт
                            </option>
                            <option value="Член партії">
                                Член партії
                            </option>
                        </select>

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
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
                        <button type="submit" class="btn fables-second-background-color fables-btn-rounded white-color px-7 font-20 py-2">Приєднатися</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            </form>


        </div>
    </div>
    </div>
@endsection
