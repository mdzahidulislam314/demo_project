<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{route('admin.home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Posts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('post.create')}}"><i class="fa fa-circle-o"></i>Add New</a></li>
                    <li><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i>All Post</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-pie-chart"></i>
                    <span>Categories</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>Add New</a></li>
                    <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>All Category</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-pie-chart"></i>
                    <span>Tags</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('tag.create')}}"><i class="fa fa-circle-o"></i>Add New</a></li>
                    <li><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i>All Tags</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{route('user.index')}}"><i class="fa fa-user" aria-hidden="true"></i><span>Users</span></a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>