@if(isset($item['auth']))
    @if(is_array($item['auth']))

        {{-- Auth ability and model --}}
        @can(array_keys($item['auth'])[0], array_values($item['auth'])[0])
            @include("laravel-admin::partials.nav-item-content", ['item' => $item])
        @endcan

    @elseif(is_string($item['auth']))

        {{-- Basic auth, check against a single gate check --}}
        @can($item['auth'])
            @include("laravel-admin::partials.nav-item-content", ['item' => $item])
        @endcan

    @endif
@else
    {{-- No auth required --}}
    @include("laravel-admin::partials.nav-item-content", ['item' => $item])
@endif

