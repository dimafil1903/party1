






<ul class="navbar-nav mx-auto fables-nav">

@foreach($items as $menu_item)
        <li class="nav-item"><a class="nav-link" href="{{ url($menu_item->url) }}">{{ $menu_item->title }}</a></li>



        @if($menu_item->children->count())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="sub-nav{{$menu_item->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    {{ $menu_item->title }}</a>

            <ul class="dropdown-menu" aria-labelledby="sub-nav{{$menu_item->id}}" >
                @foreach($menu_item->children as $subItem)
                    <li>
                        <a class="dropdown-item"  href="{{ url($subItem->url) }}">{{ $subItem->title }}</a></li>

                @endforeach
            </ul>
            </li>
        @endif
    @endforeach
</ul>
