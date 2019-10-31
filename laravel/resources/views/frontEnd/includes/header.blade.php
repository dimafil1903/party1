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
            <div class="col-12 col-md-10 pr-md-0">
                <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                    <a class="navbar-brand fables-logo-brand pl-0" href="{{url('/')}}"><img
                            src="{{URL::asset('/storage/'.setting('site.logo'))}}" alt="{{ setting('site.title')}}"
                            class="fables-logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="fablesNavDropdown">


                        {{menu('Main menu','frontEnd.includes.menu')}}


                    </div>
                </nav>
            </div>
            <div class="col-5 mt-3 col-md-2 pr-md-0 icons-header-mobile">
                <div class="fables-header-icons pt-lg-4 text-right">
                    <a href="#" class="open-search fables-third-text-color fables-mega-menu-btn px-4  fables-second-hover-color">
                        <span class="fables-iconsearch-icon"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

