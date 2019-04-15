@extends("laravel-admin::components._base")

@section("base_content")
    <div id="laravel-admin_app" class="page-wrapper _laravel-admin">
        <header class="main-header">
            <button class="menu-toggle">
                <i class="fa fa-bars open-menu"></i>
                <i class="fa fa-times close-menu"></i>
            </button>

            <div class="brand-panel">
                @yield("brand_panel", "Laravel Admin")
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

                @if(config("laravel-admin.show_account_dropdown", true))
                    @yield("account_dropdown")
                @endif
            </div> <!-- End .header-content -->
        </header> <!-- End .main-header -->

        <aside class="main-sidebar">
            @stack("sidebar_start")
            @include("laravel-admin::partials.main-navigation", ['title' => 'Menu'])
            @stack("sidebar_end")
        </aside> <!-- End .main-sidebar -->

        <main class="main-content">
            @yield("main_content_start")
            <div class="inner-content">
                <div class="container-fluid">
                    @yield("main_content")
                </div>
            </div>
            @yield("main_content_end")
        </main> <!-- End .main-content -->
    </div> <!-- End .page-wrapper -->
@endsection
