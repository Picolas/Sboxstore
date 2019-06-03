@extends("home.layouts.app")

@section("nav-header", "page-header-inverse")

@section("head")
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ url("assets/js/plugins/slick/slick.css") }}">
    <link rel="stylesheet" href="{{ url("assets/js/plugins/slick/slick-theme.css") }}">
    <style>
        .navbar-mobile-hover:hover, .navbar-mobile-hover:focus, .navbar-mobile-hover:active {
            background-color: transparent !important;
        }
        .navbar-profile-active a.active, .navbar-profile-active a.active, .navbar-profile-active:active {
            background-color: transparent !important;
            color: #fff;
        }
    </style>
@endsection


@section("hero")
@endsection

@section("navbar-profile")
    <div class="header_profile d-flex justify-content-center" style="background-color: #2a2d31; width: 100%; height: 100%">
        <ul class="nav-main-header navbar-profile-active">
            <li>
                <a class="navbar-mobile-hover active" href="{{ url("/user/".$user->username."/profile") }}">Profile</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/purchases") }}">Achats</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/addons") }}">Addons</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/wishlist") }}">Whishlist</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/reputation") }}">Reputation</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/tweets") }}">Tweets</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/threads") }}">Threads</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/blocked") }}">Utilisateurs bloqués</a>
            </li>
            <li>
                <a class="navbar-mobile-hover" href="{{ url("/user/".$user->username."/jobs") }}">Jobs</a>
            </li>
            <!--
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
            -->
        </ul>
    </div>
@endsection

@section("content")
    <div class="content"><!--content-full-->
        <!-- Dummy content -->
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="block block-rounded text-center font-w600">
                    <div class="block-content block-content-full" style="background: #7e93f3">
                        <div class="block-content">
                            <div class="pb-15 mb-15">
                                <span style="color: #fff; font-weight: bolder; font-size: 1.5rem;">{{ $user->name }}</span>
                            </div>
                        </div>
                        <img class="img-avatar" src="{{ $user->avatar }}" alt="" style="margin-bottom: -60px;width: 80px;height: 80px;">
                    </div>
                    <div class="block-content">
                        <div class="row items-push text-center">
                            <div class="col-6">
                                <div class="mb-5"><i class="si si-wallet fa-2x"></i></div>
                                <div class="font-size-sm text-muted">$3.090</div>
                            </div>
                            <div class="col-6">
                                <div class="mb-5"><i class="si si-trophy fa-2x"></i></div>
                                <div class="font-size-sm text-muted">4 Awards</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b pb-15">
                        <a class="btn btn-rounded btn-alt-primary btn-sm" href="{{ $user->steam_profile_url }}">Profile steam</a>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light" style="background-color: #f6f7f9!important"><!--#e9edf5-->
                        <div class="font-size-sm text-muted"><i class="si si-user"></i> {{ \Illuminate\Support\Carbon::create($user->created_at->toDateTimeString(), "Europe/Paris")->isoFormat("D MMMM YYYY") }}</div>
                    </div>
                </div>

                <!-- Course Info -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default text-center">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-info"></i>
                            A propos
                        </h3>
                    </div>
                    <div class="block-content">
                        <div class="text-warning text-center">
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                        </div>
                        <div class="font-size-sm text-muted text-center mb-20">
                            (258 reviews)
                        </div>
                        <table class="table table-borderless table-striped">
                            <tbody>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-heart mr-10 text-danger"></i> 456 Favorites
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-calendar mr-10"></i> 1 week ago
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-tags mr-10"></i>
                                    <a class="badge badge-primary" href="javascript:void(0)">HTML</a>
                                    <a class="badge badge-primary" href="javascript:void(0)">CSS</a>
                                    <a class="badge badge-primary" href="javascript:void(0)">JavaScript</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Course Info -->
            </div>
        </div>
        <!-- END Dummy content -->
    </div>
@endsection

@section("script")
    <!-- Page JS Plugins -->
    <script src="{{ url("assets/js/plugins/slick/slick.min.js") }}"></script>

    <!-- Page JS Helpers (Slick Slider plugin) -->
    <script>jQuery(function () {
            Codebase.helpers('slick');
        });
    </script>
@endsection
