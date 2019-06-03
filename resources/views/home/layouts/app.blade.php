<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield("title")</title>

    <meta name="description" content="@yield("description")">
    <meta name="author" content="Nestor">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="@yield("title")">
    <meta property="og:site_name" content="Gmodcreators">
    <meta property="og:description" content="@yield("description")">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ url("assets/media/favicons/favicon.png") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url("assets/media/favicons/favicon-192x192.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url("assets/media/favicons/apple-touch-icon-180x180.png") }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ url("assets/css/codebase.min.css") }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    @yield("head")
</head>
<body>

<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-inverse'                           Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-modern'                        Modern Header style
    'page-header-inverse'                       Dark themed Header (works only with classic Header style)
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-inverse side-scroll @yield("nav-header") main-content-boxed"><!--page-header-inverse page-header-fixed-->

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow bg-black-op-10">
                <div class="content-header-section text-center align-parent">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="" style="font-size: 1.6rem !important; font-weight: 700" href="/">
                            <span class="text-dual-primary-dark">gmodcreator</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Main Navigation -->
            <div class="content-side content-side-full">
                <!--
                Mobile navigation, desktop navigation can be found in #page-header

                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                -->
                <ul class="nav-main">
                    <li class=""><!-- open -->
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/market") }}"><i class="si si-basket"></i>Marketplace</a>
                        <ul>
                            <li>
                                <a href="{{ url("/market/all") }}" class="">Tous les addons</a>
                            </li>
                            <li>
                                <a href="{{ url("/market/top") }}" class="">Les plus vendus</a>
                            </li>
                            <li>
                                <a href="{{ url("/market/best-rated") }}" class="">Les mieux notés</a>
                            </li>
                            <li>
                                <a href="{{ url("/market/recently-updated") }}" class="">Mis à jours récemment</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url("/jobs") }}"><i class="si si-briefcase"></i>Jobs</a>
                    </li>
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/forum") }}"><i class="si si-people"></i>Communauté</a>
                        <ul>
                            <li>
                                <a href="{{ url("/social") }}">Social</a>
                            </li>
                            <li>
                                <a href="{{ url("/forum") }}">Forum</a>
                            </li>
                            <li>
                                <a href="{{ url("/members") }}">Voir les membres</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/about") }}"><i class="si si-direction"></i>A propos</a>
                        <ul>
                            <li>
                                <a href="{{ url("/about-us") }}">Qui sommes-nous</a>
                            </li>
                            <li>
                                <a href="{{ url("/team") }}">Equipe</a>
                            </li>
                            <li>
                                <a href="{{ url("/blog") }}">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/help") }}"><i class="si si-support"></i>Aide & Support</a>
                        <ul>
                            <li>
                                <a href="{{ url("/faq") }}">FAQ</a>
                            </li>
                            <li>
                                <a href="{{ url("/help") }}">Aide</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Main Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Logo -->
                <div class="content-header-item">
                    <a class="" style="font-size: 1.6rem !important; font-weight: 700" href="/">
                        <span class="text-dual-primary-dark">gmodcreator</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Middle Section -->
            <div class="content-header-section d-none d-lg-block">
                <!-- Header Navigation -->
                <!--
                Desktop Navigation, mobile navigation can be found in #sidebar

                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                If your sidebar menu includes headings, they won't be visible in your header navigation by default
                If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                -->
                <ul class="nav-main-header">
                    <li class=""><!-- open -->
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/market") }}"><i class="si si-basket"></i>Marketplace</a>
                        <ul>
                            <li>
                                <a href="{{ url("/market/all") }}" class="">Tous les addons</a>
                            </li>
                            <li>
                                <a href="{{ url("/market/top") }}" class="">Les plus vendus</a>
                            </li>
                            <li>
                                <a href="{{ url("/market/best-rated") }}" class="">Les mieux notés</a>
                            </li>
                            <li>
                                <a href="{{ url("/market/recently-updated") }}" class="">Mis à jours récemment</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url("/jobs") }}"><i class="si si-briefcase"></i>Jobs</a>
                    </li>
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/forum") }}"><i class="si si-people"></i>Communauté</a>
                        <ul>
                            <li>
                                <a href="{{ url("/social") }}">Social</a>
                            </li>
                            <li>
                                <a href="{{ url("/forum") }}">Forum</a>
                            </li>
                            <li>
                                <a href="{{ url("/members") }}">Voir les membres</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/about") }}"><i class="si si-direction"></i>A propos</a>
                        <ul>
                            <li>
                                <a href="{{ url("/about-us") }}">Qui sommes-nous</a>
                            </li>
                            <li>
                                <a href="{{ url("/team") }}">Equipe</a>
                            </li>
                            <li>
                                <a href="{{ url("/blog") }}">Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/help") }}"><i class="si si-support"></i>Aide & Support</a>
                        <ul>
                            <li>
                                <a href="{{ url("/faq") }}">FAQ</a>
                            </li>
                            <li>
                                <a href="{{ url("/help") }}">Aide</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- END Header Navigation -->
            </div>

            <!-- END Middle Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- Color Themes + A few of the many header options (used just for demonstration) -->
                <!-- Themes functionality initialized in Template._uiHandleTheme() -->
                <!--
                <div class="btn-group ml-5" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-paint-brush"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-themes-dropdown">
                        <h6 class="dropdown-header text-center">Style</h6>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="header_style_inverse_toggle">Changer la couleur de la navbar</button>
                    </div>
                </div>
                -->
                <!-- END Color Themes + A few of the many header options -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-search"></i>
                </button>
                <!-- END Open Search Section -->

                @auth
                    @php
                    $user = \Illuminate\Support\Facades\Auth::user()
                    @endphp
                <ul class="nav-main-header">
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{ url("/profile") }}">
                            <img class="img-avatar" style="width: 35px; height: 35px" src="{{ $user->avatar }}" alt="">
                        </a>
                        <ul>
                            <li>
                                <a href="{{ url("/user/".$user->username."/profile") }}">Profile</a>
                            </li>
                            <li>
                                <a href="{{ url("/user/".$user->username."/purchases") }}">Vos achats</a>
                            </li>
                            <li>
                                <a href="{{ url("/user/".$user->username."/settings") }}">Paramètres</a>
                            </li>
                            <li>
                                <a href="{{ url("/logout") }}">Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endauth

                @guest
                <a href="{{ url("/login") }}">
                    <button type="button" class="btn  btn-rounded btn-primary ml-5" style="background: #45e29d; border-color: #45e29d">
                        <i class="fa fa-steam"></i>
                        <span class="d-none d-sm-inline">Connexion</span>
                    </button>
                </a>
                @endguest
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Right Section -->
        </div>

        @yield("navbar-profile")
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="/search" method="get">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Close Search Section -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- END Close Search Section -->
                        </div>
                        <input type="text" class="form-control" placeholder="Rechercher..." id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary px-15">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        @yield("hero")
        <!--
        <div class="bg-primary">
            <div class="bg-pattern bg-black-op-25" style="background-image: url('assets/media/various/bg-pattern.png');">
                <div class="content text-center">
                    <div class="pt-50 pb-20">
                        <h1 class="font-w700 text-white mb-10">Dashboard</h1>
                        <h2 class="h4 font-w400 text-white-op">It's your own web application!</h2>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- END Hero -->

        <!-- Page Content -->
        @yield("content")
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Version 1.0
            </div>
            <div class="float-left">
                Sboxstore &copy; <span class="js-year-copy">{{ date("Y") }}</span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/jquery.countTo.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="{{ url("assets/js/codebase.core.min.js") }}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{ url("assets/js/codebase.app.min.js") }}"></script>
@yield("script")
</body>
</html>
