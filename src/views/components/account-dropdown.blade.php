<account-dropdown
    @if(isset($label)) :label="'{{ $label }}'" @endif
    @if(isset($avatar)) :avatar-image="'{{ $avatar }}'" @endif
    @if(isset($menuLinks)) :menu-links="{{ la_isJson($menuLinks) ? $menuLinks : json_encode($menuLinks) }}" @endif
/>

