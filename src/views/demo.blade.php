@extends("laravel-admin::demo-layout")

@section("main_content_start")
    <div class="page-header">
        <h1>Page Title</h1>
    </div>
@endsection

@section("main_content")
    <div class="row">
        <div class="col-md-7">
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
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tom Lynch</td>
                            <td>29</td>
                            <td>Assistant Instructor</td>
                            <td>1st Degree</td>
                        </tr>
                        <tr>
                            <td>Tom Lynch</td>
                            <td>29</td>
                            <td>Assistant Instructor</td>
                            <td>1st Degree</td>
                        </tr>
                        <tr>
                            <td>Tom Lynch</td>
                            <td>29</td>
                            <td>Assistant Instructor</td>
                            <td>1st Degree</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <p>Left content goes here</p>
            </content-panel>
        </div>
        <div class="col-md-5">
            <content-panel>
                Right content goes here
            </content-panel>
            <content-panel>
                Right content goes here
            </content-panel>
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
