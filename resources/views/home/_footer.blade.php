@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Start: Footer -->
<footer class="site-footer">
    <div class="container">
        <div id="footer-widgets">
            <div class="row">
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="footer-widget-title">Kitap Yurdu Hakkında</h3>
                        <span class="underline left"></span>
                        <div class="textwidget">
                            {{$setting->description}}
                        </div>
                        <address>
                            <div class="info">
                                <i class="fa fa-location-arrow"></i>
                                <span>{{$setting->address}}</span>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:support@libraria.com">{{$setting->email}}</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:{{$setting->email}}">{{$setting->phone}}</a></span>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 widget-container">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="footer-widget-title">Hızlı Linkler</h3>
                        <span class="underline left"></span>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li><a href="#">Library News</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Meet Our Staff</a></li>
                                <li><a href="#">Board of Trustees</a></li>
                                <li><a href="#">Budget</a></li>
                                <li><a href="#">Annual Report</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                <div class="col-md-2 col-sm-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">Çalışma Saatleri</h3>
                        <span class="underline left"></span>
                        <div class="timming-text-widget">
                            <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                            <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                            <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                            <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="footer-text col-md-3">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                    <div class="col-md-9 pull-right">
                        <ul>
                            <li><a href="{{asset('assets')}}/index-2.html">Home</a></li>
                            <li><a href="{{asset('assets')}}/books-media-list-view.html">Books &amp; Media</a></li>
                            <li><a href="{{asset('assets')}}/news-events-list-view.html">News &amp; Events</a></li>
                            <li><a href="#">Kids &amp; Teens</a></li>
                            <li><a href="{{asset('assets')}}/services.html">Services</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="{{asset('assets')}}/blog.html">Blog</a></li>
                            <li><a href="{{asset('assets')}}/contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <i style="text-align: center">kitapyurdu.com</i>
                    &copy; <?php echo (date('Y') == 2018) ? (date('Y')) : '2018 - ' . date('Y'); ?>
                </div>
            </div>
        </div>
</footer>
<!-- End: Footer -->
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

<!-- Custom Scripts -->
<script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>
