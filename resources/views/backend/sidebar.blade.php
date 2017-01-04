<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li {{ (Route::is('home') ? 'class=active' : '') }} >
                <a href="{{route('admin')}}"><i class="fa fa-home"></i><span>{{ trans('system.home') }}</span></a>
            </li>
            @if (Auth::user()->hasRole('viewUsersList') || Auth::user()->hasRole('addUser') ||  Auth::user()->hasRole('deleteUser') || Auth::user()->hasRole('viewUserGroupList') || Auth::user()->hasRole('addUserGroup'))
                <li class="treeview {{ (Route::is('users-list') ? ' active' : '') }} {{ (Route::is('create-user') ? ' active' : '') }} {{ (Route::is('user-group-list') ? ' active' : '') }} {{ (Route::is('create-user-group') ? ' active' : '') }}
                {{ (Route::is('edit-user-group') ? ' active' : '') }}">
                    <a href="#"> <i class="fa fa-users"></i><span>{{ trans('user.users') }}</span><span
                                class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                    <ul class="treeview-menu">
                        @if (Auth::user()->hasRole('viewUsersList'))
                            <li {{ (Route::is('users-list') ? 'class  =active' : '') }}><a
                                        href="{{ route('users-list') }}"><i
                                            class="fa fa-circle-o"></i> {{ trans('user.list') }}</a></li>
                        @endif
                        @if (Auth::user()->hasRole('addUser'))
                            <li {{ (Route::is('create-user') ? 'class  =active' : '') }}><a
                                        href="{{ route('create-user') }}"><i
                                            class="fa fa-circle-o"></i> {{ trans('user.add') }}</a></li>
                        @endif
                        @if (Auth::user()->hasRole('viewUserGroupList'))
                            <li {{ (Route::is('user-group-list') ? 'class  =active' : '') }} {{ (Route::is('create-user-group') ? 'class  =active' : '') }} {{ (Route::is('edit-user-group') ? 'class  =active' : '') }} >
                                <a href="{{ route('user-group-list') }}"><i
                                            class="fa fa-circle-o"></i> {{ trans('user.user_group') }}</a></li>
                        @endif

                    </ul>
                </li>
            @endif
            @if (Auth::user()->hasRole('viewCategoryList') || Auth::user()->hasRole('addCategory'))
                <li class="treeview {{ (Route::is('category-list') ? ' active' : '') }} {{ (Route::is('category-create') ? ' active' : '') }}">
                    <a href="#"> <i class="fa fa-picture-o"></i><span>{{ trans('category.categories') }}</span><span
                                class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                    <ul class="treeview-menu">
                        @if (Auth::user()->hasRole('viewCategoryList'))
                            <li {{ (Route::is('category-list') ? 'class  =active' : '') }}><a
                                        href="{{ route('category-list') }}"><i
                                            class="fa fa-circle-o"></i> {{ trans('category.list') }}</a></li>
                        @endif
                        @if (Auth::user()->hasRole('addCategory'))
                            <li {{ (Route::is('category-create') ? 'class  =active' : '') }}><a
                                        href="{{ route('category-create') }}"><i
                                            class="fa fa-circle-o"></i> {{ trans('category.add') }}</a></li>
                        @endif
                    </ul>
                </li>
            @endif

            <li class="treeview {{ (Route::is('carousel-list') ? ' active' : '') }} {{ (Route::is('carousel-create') ? ' active' : '') }}">
                <a href="#"> <i class="fa fa-picture-o"></i><span>{{ trans('carousel.carousel') }}</span><span
                            class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                <ul class="treeview-menu">

                    <li {{ (Route::is('carousel-list') ? 'class  =active' : '') }}><a
                                href="{{ route('carousel-list') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('carousel.list') }}</a></li>

                    <li {{ (Route::is('carousel-create') ? 'class  =active' : '') }}><a
                                href="{{ route('carousel-create') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('carousel.add') }}</a></li>

                </ul>
            </li>

            <li class="treeview {{ (Route::is('property-list') ? ' active' : '') }} {{ (Route::is('property-create') ? ' active' : '') }} {{ (Route::is('propertydetail-create') ? ' active' : '') }} {{ (Route::is('propertydetail-list') ? ' active' : '') }}">
                <a href="#"> <i class="fa fa-picture-o"></i><span>{{ trans('property.properties') }}</span><span
                            class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                <ul class="treeview-menu">

                    <li {{ (Route::is('property-list') ? 'class  =active' : '') }}><a
                                href="{{ route('property-list') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('property.list') }}</a></li>

                    <li {{ (Route::is('property-create') ? 'class  =active' : '') }}><a
                                href="{{ route('property-create') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('property.add') }}</a></li>
                    <li {{ (Route::is('propertydetail-list') ? 'class  =active' : '') }}><a
                                href="{{ route('propertydetail-list') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('propertydetail.list') }}</a></li>
                    <li {{ (Route::is('propertydetail-create') ? 'class  =active' : '') }}><a
                                href="{{ route('propertydetail-create') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('propertydetail.add') }}</a></li>
                </ul>
            </li>
            <li class="treeview {{ (Route::is('product-list') ? ' active' : '') }} {{ (Route::is('product-create') ? ' active' : '') }}">
                <a href="#"> <i class="fa fa-picture-o"></i><span>{{ trans('product.products') }}</span><span
                            class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                <ul class="treeview-menu">

                    <li {{ (Route::is('product-list') ? 'class  =active' : '') }}><a
                                href="{{ route('product-list') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('product.list') }}</a></li>

                    <li {{ (Route::is('product-create') ? 'class  =active' : '') }}><a
                                href="{{ route('product-create') }}"><i
                                    class="fa fa-circle-o"></i> {{ trans('product.add') }}</a></li>

                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>