<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Berkay Pabuççu">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="{{asset('assets')}}/images/favicon.ico" rel="icon" type="image/x-icon"/>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Mobile Menu -->
    <link href="{{asset('assets')}}/css/mmenu.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets')}}/css/mmenu.positioning.css" rel="stylesheet" type="text/css"/>

    <!-- Stylesheet -->
    <link href="{{asset('assets')}}/style.css" rel="stylesheet" type="text/css"/>


    <script src="{{asset('assets')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>


</head>
<body class="layout-v3">
@include('home._header')
@include('home._slider')
@include('home._features')
@section('content')
   Content Area <br>
    <br><br><br><br>


@show
@include('home._welcome')
@include('home._newsletter')
@include('home._categoryfilter')
@include('home._ourcommunity')
@include('home._meetstaff')
@include('home._latestblog')
@include('home._newsevent')
<div class="fullwidth-social-icons">
    <div class="container-fluid">
        <div class="row">
            <ul>
                <li>
                    <a class="facebook" href="#" target="_blank">
                        <span><i class="fa fa-facebook-f"></i> <small>Facebook</small></span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" target="_blank">
                        <span><i class="fa fa-twitter"></i> <small>Twitter</small></span>
                    </a>
                </li>
                <li>
                    <a class="google" href="#" target="_blank">
                        <span><i class="fa fa-google-plus"></i> <small>Google</small></span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <span><i class="fa fa-rss"></i> <small>Rss Feed</small></span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <span><i class="fa fa-linkedin"></i> <small>Linkedin</small></span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="#" target="_blank">
                        <span><i class="fa fa-youtube"></i> <small>Youtube</small></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@include('home._footer')
</body>

</html>
