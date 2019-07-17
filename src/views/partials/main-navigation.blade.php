<nav class="main-navigation">
    @if(isset($title))
        <div class="menu-title">{{ $title }}</div>
    @endif

    <ul>
    @foreach(config("laravel-admin.main_navigation") as $item)
        @if($item !== null)
            @if(isset($item['title']))
                <li class="title">
                    {{ $item['title'] }}
                </li>
            @else
                @include("laravel-admin::partials.nav-item", ['item' => $item])
            @endif
        @endif
    @endforeach
    </ul>
</nav>
