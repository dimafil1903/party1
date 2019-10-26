<div class="fables-testimonial fables-after-overlay py-4 py-lg-5 bg-rules">
    <div class="container">
        <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4">Testimonial</h2>
        <div class="owl-carousel owl-theme" id="fables-testimonial-carousel">




            @foreach($comment_blocks as $block)

                <div class="row text-center fables-testimonial-carousel-item rounded py-4">
                    <div class="col-12 col-md-3">
                        <img src="{{URL::asset('/storage/'.$block->photo)}}" alt="Fables Template" class="fables-testimonial-carousel-img">
                        <h3 class="font-14 semi-font text-white">{{$block->person_name}}</h3>
                        <h3 class="font-14 font-italic text-white mt-2">{{$block->position}}</h3>
                    </div>
                    <div class="col-12 col-md-9 p-0 p-md-2">
                        <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative">
                            {!! $block->comment !!}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>





