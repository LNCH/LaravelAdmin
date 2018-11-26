<nav class="main-navigation">
    <ul>
    @foreach(config("laravel-admin.main_navigation") as $item)
        @if(isset($item['title']))
            {{--<li>--}}
                {{--<a class="menu-title">{{ $item['title'] }}</a>--}}
            {{--</li>--}}
        @else
            @include("laravel-admin::partials.nav-item", ['item' => $item])
        @endif
    @endforeach
    </ul>
</nav>
