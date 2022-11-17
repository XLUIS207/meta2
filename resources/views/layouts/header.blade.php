<header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo" class="me-lg-auto">
                    <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Meta"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Meta"></a>
                </div><!-- #logo end -->

                {{-- <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->
                </div> --}}

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container one-page-menu">
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('inicio')}}"><div>Inicio</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('nosotros')}}"><div>Nosotros</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('servicios')}}"><div>Productos</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#" data-href="#contacto"><div>Contacto</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="button button-small text-m" href="{{ route('contacto')}}">Afiliate</a>
                        </li>
                    </ul>

                </nav><!-- #primary-menu end -->

                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
