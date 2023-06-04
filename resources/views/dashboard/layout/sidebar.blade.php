        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('backend/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('posts')}}">
                                <i class="fas fa-chart-bar"></i>Services</a>
                        </li>
                        <li>
                            <a href="{{route('pproducts')}}">
                                <i class="zmdi zmdi-shopping-cart"></i>Products</a>
                        </li>
                        <li>
                            <a href="{{route('comment')}}">
                                <i class="far fa-comment"></i>Comments</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->