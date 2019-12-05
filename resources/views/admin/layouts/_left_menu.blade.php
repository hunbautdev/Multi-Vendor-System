<ul id="menu" class="page-sidebar-menu">
    <li {!! (Request::is('admin') ? 'class="active"' : '') !!}>
        <a href="{{ route('admin.dashboard') }}">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li class = "{!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'active'  : '') !!} hidden">
                <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/product/category') || Request::is('admin/product/categoryAttr') || Request::is('admin/product')? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Product Manage</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/product/category') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/product/category') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Category
                </a>
            </li>
            <li {!! (Request::is('admin/product/categoryAttr') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/product/categoryAttr') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Category Attribute
                </a>
            </li>
            <li {!! (Request::is('admin/product') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/product') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Product
                </a>
            </li>
            <li {!! (Request::is('admin/brand') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/brand') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Brand
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/banner') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Home Manage</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/banner') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/banner') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Banner
                </a>
            </li>
        </ul>
    </li>


    <!-- Menus generated by CRUD generator -->
    {{--@include('admin/layouts/menu')--}}
</ul>
