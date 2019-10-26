
<script src="{{asset('assets/vendor/loadscreen/js/ju-loading-screen.js') }}"></script>
<script src="{{asset('assets/vendor/jquery-circle-progress/circle-progress.min.js') }}"></script>
<script src="{{asset('assets/vendor/popper/popper.min.js') }}"></script>
<script src="{{asset('assets/vendor/jQuery.countdown-master/jquery.countdown.min.js') }}"></script>



<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap-4-navbar.js') }}"></script>
<script src="{{asset('assets/vendor/WOW-master/dist/wow.min.js') }}"></script>
<script src="{{asset('assets/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{asset('assets/custom/js/jquery-data-to.js') }}"></script>

<script src="{{asset('assets/vendor/portfolio-filter-gallery/jquery.isotope.min.js') }}"></script>
<script src="{{asset('assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js') }}"></script>
<script src="{{asset('assets/vendor/fancybox-master/jquery.fancybox.min.js') }}"></script>
<script src="{{asset('assets/vendor/timeline/timeline.js') }}"></script>
<script src="{{asset('assets/vendor/timeline/jquery.timelify.js') }}"></script>
<script src="{{asset('assets/vendor/timeline/modernizr.js')}}"></script>
<script src="{{asset('assets/custom/js/custom.js') }}"></script>

<script>
    $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 100;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Детальніше";
        var  lesstext = "Згорнути";


        $('.more').each(function() {
            var content = $(this).html();

            if(content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
</script>

