@extends("laravel-admin::components.base")

@section("base_content")
    <div id="laravel-admin_app" class="page-wrapper _laravel-admin">
        <header class="main-header">
            <button class="menu-toggle">
                <i class="fa fa-bars open-menu"></i>
                <i class="fa fa-times close-menu"></i>
            </button>

            <div class="brand-panel">
                @yield("brand_panel", "Brand Panel")
            </div> <!-- End .brand-panel -->

            @if(config("laravel-admin.show_header_search", true))
                <button class="show-search">
                    <i class="fa fa-search"></i>
                </button>
                <search-form></search-form>
            @else
                <div class="show-search">&nbsp;</div>
            @endif

            <div class="header-content">
                <div class="notifications-area">
                    @yield("notifications_area")
                </div>

                @yield("account_dropdown")
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
