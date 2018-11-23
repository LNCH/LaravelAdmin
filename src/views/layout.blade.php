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

                <div class="notifications-area"></div>

                <account-dropdown
                    :label="'Tom'"
                    :avatar-image="'https://randomuser.me/api/portraits/women/91.jpg'"
                    :menu-links="{{ json_encode(config("laravel-admin.account_dropdown_menu")) }}"
                />
            </div> <!-- End .header-content -->
        </header> <!-- End .main-header -->

        <aside class="main-sidebar">
            Sidebar
        </aside> <!-- End .main-sidebar -->

        <main class="main-content">
            <div class="inner-content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                                elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id
                                cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                                erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus</p>

                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                                elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id
                                cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                                erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus</p>

                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                                elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id
                                cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                                erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus</p>
                        </div>

                        <div class="col-md-7">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                                elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id
                                cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                                erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus</p>

                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                                elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id
                                cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                                erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus</p>

                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                                elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id
                                cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                                erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus</p>

                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum
                                erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                                elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac
                                dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id
                                cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam
                                erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus</p>
                        </div>
                    </div>
                </div>
            </div>
        </main> <!-- End .main-content -->
    </div> <!-- End .page-wrapper -->
@endsection
