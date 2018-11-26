<li @if(isset($item['children']) && count($item['children'])) class="has-children" @endif>
    <a href="{{ url($item['url']) }}">
        @if(isset($item['icon']) && !isset($subNav))
            <span class="menu-icon">{!! $item['icon'] !!}</span>
        @endif

        <span class="menu-label">{{ $item['label'] }}</span>

        @if(isset($item['children']))
            <span class="children-indicator">
                <i class="fa fa-fw fa-chevron-down"></i>
            </span>
        @endif

        @if(isset($item['counter']))
            <span class="counter">{{ $item['counter'] }}</span>
        @endif
    </a>
    @if(isset($item['children']))
        <ul>
        @foreach($item['children'] as $subItem)
            @include("laravel-admin::partials.nav-item", ['item' => $subItem, 'subNav' => true])
        @endforeach
        </ul>
    @endif
</li>
