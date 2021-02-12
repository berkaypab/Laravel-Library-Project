<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            @auth()
                <a href="#" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{asset('assets')}}/admin/assets/images/faces/face8.jpg"
                             alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{Auth::user()->name}}</p>
                        <p class="designation">Premium user</p>
                    </div>
                </a>
            @endauth
        </li>
        <li class="nav-item nav-category">Main Menu</li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_category')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_products')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_message')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Contact Messages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_setting')}}">
                <i class="menu-icon"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('xx')}}">
                <i class="menu-icon"></i>
                <span class="menu-title">Reservation</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('userpanel')}}">
                <i class="menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_login')}}">
                <i class="menu-icon"></i>
                <span class="menu-title">Login</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_logout')}}">
                <i class="menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->

