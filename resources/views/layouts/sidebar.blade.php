<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item mt-4">
                <a href="{{ url('admin') }}" class="nav-link @if(Request::is('admin')) active @endif">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/users') }}" class="nav-link @if(Request::is('admin/users*')) active @endif">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/activities') }}" class="nav-link @if(Request::is('admin/activities*'))  active @endif">
                    <i class="nav-icon far fa-calendar"></i>
                    <p>
                        Activities
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/rewards') }}" class="nav-link @if(Request::is('admin/rewards*')) active @endif">
                    <i class="nav-icon far fa-star"></i>
                    <p>
                        Rewards
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/tracking_rewards') }}" class="nav-link @if(Request::is('admin/tracking_rewards')) active @endif">
                    <i class="nav-icon fas fa-box"></i>
                    <p>
                        Tracking Rewards
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
