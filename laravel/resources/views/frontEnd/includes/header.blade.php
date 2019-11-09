<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="get" action="{{action('SearchController@index')}}" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" name="query" value=""
                           class="form-control palce bg-transparent border-0 search-input" placeholder="Пошук"/>
                </div>
                <div class="col-2 mt-3">
                    <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">
    <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
    </div>
</div>


<!-- /End Top Header -->

<div class="fables-transparent  py-3 py-lg-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 col-md-9 ">
                <nav class="navbar navbar-expand-md row btco-hover-menu  py-lg-2">
                    @if(setting('site.logo'))
                    <a class="navbar-brand image-container fables-logo fables-logo-brand pl-0 " href="{{url('/')}}">


                        <img class=""
                            src="{{URL::asset('/storage/'.setting('site.logo'))}}" alt="{{ setting('site.title')}}"
                            >
                    </a>
                    @else
                        <a class="font-mob"  href="{{url('/')}}" >
                            <h6 class="fables-third-text-color font-mob font-weight-bold  ">{{setting('site.pre_title')}}
                                <span class="fables-second-text-color font-mob">{{setting('site.title')}}</span>
                            </h6>

                    </a>
                    @endif
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="fablesNavDropdown">


                        {{menu('Main menu','frontEnd.includes.menu')}}


                    </div>
                </nav>
            </div>
            <div class=" col-mb-3  icons-header-mobile">
                <div class="fables-header-icons pt-lg-4 text-right">
                    <a href="#" class="open-search fables-third-text-color fables-mega-menu-btn px-4 mr-3  fables-second-hover-color">
                        <span class="fables-iconsearch-icon"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

