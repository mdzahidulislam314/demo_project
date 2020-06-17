<header class="main-header">
    <!-- Logo -->
    <a href="{{route('admin.home')}}" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>Coder,S</b> Blog </span>
    </a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">

                    @if(Auth::guard('admin')->check())
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs"> {{ Auth::guard('admin')->user()->name }}</span>
                        </a>
                    @endif

                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::guard('admin')->user()->name }}
                                <small>Member since:
                                    <b>{{ Auth::guard('admin')->user()->created_at->toFormattedDateString() }}</b></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>

                            @if(Auth::guard('admin')->check())
                            <div class="btn btn-default pull-right btn-flat">
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                                    Logout
                                </a>
                                <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            @endif

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>