@extends("laravel-admin::components.base")

@section("base_content")
    <div id="laravel-admin_app" class="page-wrapper _laravel-admin">
        <header class="main-header">
            <button class="menu-toggle">
                <i class="fa fa-bars open-menu"></i>
                <i class="fa fa-times close-menu"></i>
            </button>

            <div class="brand-panel">
                Brand Panel
            </div> <!-- End .brand-panel -->

            <button class="show-search">
                <i class="fa fa-search"></i>
            </button>

            <search-form></search-form>

            <div class="header-content">
                <div class="notifications-area">

                    <notification-dropdown id="alerts" title="Alerts">
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

                </div>

                <account-dropdown
                    :label="'Tom'"
                    :avatar-image="'https://randomuser.me/api/portraits/women/91.jpg'"
                    :menu-links="{{ json_encode(config("laravel-admin.account_dropdown_menu")) }}"
                />
            </div> <!-- End .header-content -->
        </header> <!-- End .main-header -->

        <aside class="main-sidebar">
            @stack("sidebar_start")
            @include("laravel-admin::partials.main-navigation", ['title' => 'Menu'])
            @stack("sidebar_end")
        </aside> <!-- End .main-sidebar -->

        <main class="main-content">
            <div class="inner-content">

                <div class="container-fluid">
                    @yield("main-content")
                </div>
            </div>
        </main> <!-- End .main-content -->
    </div> <!-- End .page-wrapper -->
@endsection
