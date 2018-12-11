@extends("laravel-admin::layout")

{{-- Top Left Brand Area --}}
@section("brand_panel")
    Hot Holidays
@endsection

@section("account_dropdown")
    <account-dropdown
        :label="'User Name'"
        :avatar-image="'https://randomuser.me/api/portraits/women/91.jpg'"
        :menu-links="{{ json_encode(config("laravel-admin.account_dropdown_menu")) }}"
    />
@endsection

@section("notifications_area")
    <notification-dropdown
            id="messages" title="Messages" icon="fa-envelope-o"
            show-more-text="Show More" show-more-url="{{ url("/messages") }}"
            :has-unread="true">
        <ul>
            <li><a href="#">Someone sent a message</a></li>
            <li><a href="#">Someone sent a message</a></li>
            <li><a href="#">Someone sent a message</a></li>
        </ul>
    </notification-dropdown>

    <notification-dropdown
            id="alerts" title="Alerts" icon="fa-bell-o"
            show-more-text="Show More" show-more-url="{{ url("/alerts") }}"
            :has-unread="true">
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
    </notification-dropdown>
@endsection
