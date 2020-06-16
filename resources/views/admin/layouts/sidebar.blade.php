<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('diamond.png') }}"
             alt="logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Paaila Tech</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('profile.png')}}" class="img-circle elevation-2" alt="User Profile">
            </div>
            <div class="info">
                <a href="{{route('home')}}" class="d-block">Anshu Mallik</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link @yield('dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link @yield('category')">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link @yield('product')">
                        <i class="nav-icon fas fa-shopping-basket"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('slider.index')}}" class="nav-link @yield('slider')">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('partner.index')}}" class="nav-link @yield('partner')">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Partner</p>
                    </a>
                </li>


            </ul>
        </nav>
    </div>
</aside>