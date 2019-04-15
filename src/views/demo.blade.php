@extends("laravel-admin::demo-layout")

@section("main_content_start")
    <div class="page-header">
        <div class="left">
            <h1>Users Dashboard</h1>

            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Dashboard</a></li>
            </ul>
        </div> <!-- End .left -->

        <div class="right">
            <button type="button" class="btn btn-success btn-sm">New Record</button>
            <a href="#" class="btn btn-primary btn-sm">
                <i class="fa fa-refresh"></i> Sync
            </a>
        </div> <!-- End .right -->
    </div> <!-- End .page-header -->
@endsection

@section("main_content")
    <div class="row">
        <div class="col-lg-7">
            <content-panel :is-collapsible="true">
                <template slot="header">Registered Users</template>

                <p>Left content goes here</p>
                <div class="table-responsive full-width">
                    <table class="table table-striped table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Position</th>
                                <th>Grade</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tom Lynch</td>
                                <td>29</td>
                                <td>Assistant Instructor</td>
                                <td>1st Degree</td>
                                <td class="actions">
                                    <a href="#" title="View Record">
                                        <span class="sr-only">View</span>
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" title="Edit Record">
                                        <span class="sr-only">Edit</span>
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="#" class="danger" title="Delete Record">
                                        <span class="sr-only">Delete</span>
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tom Lynch</td>
                                <td>29</td>
                                <td>Assistant Instructor</td>
                                <td>1st Degree</td>
                                <td class="actions">
                                    <a href="#" title="View Record">
                                        <span class="sr-only">View</span>
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" title="Edit Record">
                                        <span class="sr-only">Edit</span>
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="#" class="danger" title="Delete Record">
                                        <span class="sr-only">Delete</span>
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tom Lynch</td>
                                <td>29</td>
                                <td>Assistant Instructor</td>
                                <td>1st Degree</td>
                                <td class="actions">
                                    <a href="#" title="View Record">
                                        <span class="sr-only">View</span>
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" title="Edit Record">
                                        <span class="sr-only">Edit</span>
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="#" class="danger" title="Delete Record">
                                        <span class="sr-only">Delete</span>
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li class=""><a href="#">3</a></li>
                        <li class=""><a href="#">4</a></li>
                        <li class=""><a href="#">5</a></li>
                        <li class="disabled"><a href="#">…</a></li>
                        <li><a href="#">13</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>

            </content-panel>
        </div>
        <div class="col-lg-5">
            <content-panel>
                Right content goes here
            </content-panel>
        </div>
    </div>

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
@endsection
