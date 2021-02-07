@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.main')
@section('title','Contact-'. $setting->title)
@section('description'){{$setting->description}}
@endsection
@section('keywords',$setting->keywords)


@section('content')
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Contact</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                {!!$setting->contact!!}

                <h4 class="title" style="text-align: center">İletişim Formu</h4>
                @include('home.message')
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form bg-light margin-right">
                                        <h2>Send us a message</h2>
                                        <span class="underline left"></span>
                                        <div class="contact-fields">
                                            <form id="contact" name="contact"
                                                  action="{{route('sendmessage')}}"
                                                  method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="name"
                                                                   placeholder="Name & Surname"
                                                                   name="name" id="first-name" size="30" value=""
                                                                   aria-required="true"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text"
                                                                   placeholder="Subject"
                                                                   name="subject" size="30" value=""
                                                                   aria-required="true"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email"
                                                                   pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                                   placeholder="Email" name="email" id="email" size="30"
                                                                   value="" aria-required="true"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text"
                                                                   placeholder="Phone Number" name="phone" id="phone"
                                                                   size="30" value="" aria-required="true"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                        <textarea class="form-control" placeholder="Your message"
                                                                  id="message" name="message"
                                                                  aria-required="true"></textarea>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-submit">
                                                            <button class="btn-dark" type="submit" >
                                                                Send Message
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Cart Section -->
    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery-1.12.4.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery-ui.min.js"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.min.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="{{asset('assets')}}/js/mmenu.min.js"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="{{asset('assets')}}/js/harvey.min.js"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="{{asset('assets')}}/js/waypoints.min.js"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="{{asset('assets')}}/js/facts.counter.min.js"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="{{asset('assets')}}/js/mixitup.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('assets')}}/js/owl.carousel.min.js"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="{{asset('assets')}}/js/accordion.min.js"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="{{asset('assets')}}/js/responsive.tabs.min.js"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="{{asset('assets')}}/js/responsive.table.min.js"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="{{asset('assets')}}/js/masonry.min.js"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="{{asset('assets')}}/js/carousel.swipe.min.js"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="{{asset('assets')}}/js/bxslider.min.js"></script>

    <!-- Google Map API -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"></script>

    <!-- Google Map (Custom Style) -->
    <script type="text/javascript" src="{{asset('assets')}}/js/google.map.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>
@endsection
