
<li class="@if(isset($item['children']) && count($item['children'])) has-children @endif
    @if(checkChildUrl($item)) active @endif">
    <a href="{{ isset($item['url']) ? url($item['url']) : "#" }}">
        @if(isset($item['icon']) && !isset($subNav))
            <span class="menu-icon">{!! $item['icon'] !!}</span>
        @endif

        <span class="menu-label">{{ $item['label'] }}</span>

        @if(isset($item['children']))
            <span class="children-indicator">
                <i class="fa fa-fw fa-chevron-down"></i>
            </span>
        @endif

        @if(isset($item['counter']) && intval($item['counter']) > 0)
            <span class="counter">{{ number_format(intval($item['counter']), 0, ".", ",") }}</span>
        @endif
    </a>
    @if(isset($item['children']) && count($item['children']))
        <ul>
            @foreach($item['children'] as $subItem)
                @include("laravel-admin::partials.nav-item", ['item' => $subItem, 'subNav' => true])
            @endforeach
        </ul>
    @endif
</li>
