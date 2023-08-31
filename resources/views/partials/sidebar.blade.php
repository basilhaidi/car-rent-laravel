<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Basil Rent</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (Request::is('admin/cars') ? 'active' : '' || Request::is('admin/cars/*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('admin.cars.index') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Car List</span>
        </a>
    </li>
    <li class="nav-item {{ (Request::is('admin/users') ? 'active' : '' || Request::is('admin/cars/*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('admin.messages.index') }}">
            <i class="fas fa-envelope fa-fw"></i>
            <span>Message List</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('homepage') }}">
            <i class="fas fa-home fa-fw"></i>
            <span>Homepage</span>
        </a>
    </li>
</ul>
