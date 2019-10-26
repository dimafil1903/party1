<!-- Start page content -->
<div class="container">
    <div class="row my-3 my-md-5 overflow-hidden" id="first_block">
        @foreach($blocks as $block)
        <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
            <span class="{{$block->faicon}} fables-second-text-color fa-3x"></span>
            <h2 class="fables-main-text-color font-18 my-2">{{$block->title}}</h2>
            <p class="fables-forth-text-color font-15">
               {!! $block->body !!}
            </p>
        </div>
            @endforeach
    </div>

</div>
