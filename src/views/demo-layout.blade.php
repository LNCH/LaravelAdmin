@extends("laravel-admin::layout")

{{-- Top Left Brand Area --}}
@section("brand_panel")
    Hot Holidays
@endsection

@section("account_dropdown")
    @include("laravel-admin::components.account-dropdown", [
        'label' => 'Tom Lynch',
        'avatar' => 'https://randomuser.me/api/portraits/women/91.jpg',
        'menuLinks' => config("laravel-admin.account_dropdown_menu")
    ])
@endsection

@section("notifications_area")

    @component("laravel-admin::components.notification-dropdown", [
        'id' => 'messages',
        'title' => 'Messages',
        'icon' => 'fa-envelope-o',
        'showMoreUrl' => url("/messages"),
        'hasUnread' => true
    ])
        <ul>
            <li><a href="#">Someone sent a message</a></li>
            <li><a href="#">Someone sent a message</a></li>
            <li><a href="#">Someone sent a message</a></li>
        </ul>
    @endcomponent

    @component("laravel-admin::components.notification-dropdown", [
        'id' => 'alerts',
        'title' => 'Alerts',
        'icon' => 'fa-bell-o',
        'showMoreUrl' => url("/alerts"),
        'hasUnread' => true
    ])
        <ul>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
            <li><a href="#">Someone ordered a thing</a></li>
        </ul>
    @endcomponent

@endsection
