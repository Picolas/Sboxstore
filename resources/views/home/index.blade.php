@extends("home.layouts.app")

@section("nav-header", "page-header-glass page-header-inverse")

@section("head")
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick/slick.css">
    <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.css">
@endsection


@section("hero")
    <!--<div class="bg-primary">
        <div class="bg-pattern bg-black-op-25" style="background:linear-gradient(90deg, #f8d061 0%,#f8d061 100% );">
            <br>
        </div>
    </div>-->
    <div class="bg-gd-primary overflow-hidden"
         style="background-image: url('https://i.imgur.com/Q6ZmhkZ.png') !important; height: 50vh;">
        <div class="hero" style="height: 50vh;">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <h1 class="display-3 font-w700 text-white mb-10 invisible" data-toggle="appear"
                        data-class="animated fadeInDown" style="margin-top:0px; font-size: 2.9rem; font-weight: bolder;">Le gmodstore français, et sans frais !</h1>
                    <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear"
                        data-class="animated fadeInDown">rechercher parmis une centaine d'addons</h2>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("content")
    <div class="content content-full">
    <!-- Dummy content -->
        <div class="row">
            <div class="col-md-12" style="display: flex; justify-content: center; margin-top: -60px; margin-bottom: 20px;">
                <div class="search-bg" style="    width: 70%;
                            padding-left: 50px;
                            height: 75px;
                            background-color:#fff;
                            border-radius: 0;
                            border-top-left-radius: 75px;
                            border-bottom-left-radius: 75px;
                            font-size: 24px;
                            border: none !important;
                            border-color: transparent !important;
                            border-right: 2px solid #F3F4F7 !important;
                            box-shadow: none;
                            border-top-right-radius: 75px;
                            border-bottom-right-radius: 75px;">
                    <div class="form-material input-group">
                        <input style="width: 93.6%; box-shadow: none !important; margin-top: -5px" type="text" class="form-control" id="material-text" name="material-text" placeholder="RECHERCHER">
                        <div class="input-group-append" style="box-shadow: none !important; margin-top: -5px;">
                            <span class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <!--
            <div class="col-md-12" style="margin-bottom: 24px;">
                <div class="js-slider slick-nav-hover" data-dots="false" data-arrows="true">
                    <div class="bg-image" style="background-image: url('assets/media/photos/photo22.jpg'); height: 350px;">
                        <div class="block block-transparent" style="height: 350px;">
                            <div class="block-content block-content-full bg-primary ribbon ribbon-crystal" style="height: 100vh;">
                                <div class="ribbon-box">
                                    <i class="fa fa-euro"></i> 14.99
                                </div>
                                <div class="text-center py-50">
                                    <h4 class="font-w700 text-white text-uppercase mb-0">Perfect</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->

            <div class="col-sm-4">
                <div class="block">
                    <div class="block-content">
                        <p class="text-center py-100">...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="block">
                    <div class="block-content">
                        <p class="text-center py-100">...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="block">
                    <div class="block-content">
                        <p class="text-center py-100">...</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="block">
                    <div class="block-content">
                        <p class="text-center py-100">...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="block">
                    <div class="block-content">
                        <p class="text-center py-100">...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="block">
                    <div class="block-content">
                        <p class="text-center py-100">...</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="block">
                    <div class="block-content">
                        <p class="text-center py-100">...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Dummy content -->
    </div>
@endsection

@section("script")
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/slick/slick.min.js"></script>

    <!-- Page JS Helpers (Slick Slider plugin) -->
    <script>jQuery(function () {
            Codebase.helpers('slick');
        });
    </script>
@endsection
