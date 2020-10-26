<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header tittle-header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('product.index')}}">
                    <i class="fa fa-shopping-cart"></i> <span>Product</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Pages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/mailbox/mailbox.html">
                    <i class="fa fa-users"></i> <span>Subscriber</span>
                </a>
            </li>
            <hr>
            <li><a href="https://adminlte.io/docs"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-arrow-left"></i></i> <span>Logout</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>