<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{asset('assets')}}/admin/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin_home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_categoryList')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_cars')}}">
            <i class="fas fa-car-side"></i>
            <span>Cars</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_setting')}}">
            <i class="fas fa-cogs"></i>
            <span>Settings</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_message')}}">
            <i class="fas fa-envelope-open-text"></i>
            <span>Contact Messages</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_faq')}}">
            <i class="fas fa-question-circle"></i>
            <span>Faq</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_users')}}">
            <i class="fas fa-users"></i>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_review')}}">
            <i class="fas fa-comment-dots"></i>
            <span>Reviews</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin_reservation')}}">
            <i class="fas fa-user-check"></i>
            <span>Reservations</span>
        </a>
    </li>



    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->
