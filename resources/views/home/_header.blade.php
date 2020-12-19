
<!-- Start: Header Section -->
<header id="header" class="navbar-wrapper">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="menu-wrap">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <h1>
                                <a href="{{asset('assets')}}/index-2.html">
                                    <img src="{{asset('assets')}}/images/libraria-logo-v3.png" alt="LIBRARIA" />
                                </a>
                            </h1>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="navbar-collapse hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li class="dropdown active">
                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{asset('assets')}}/index-2.html">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{asset('assets')}}/index-2.html">Home V1</a></li>
                                    <li><a href="{{asset('assets')}}/home-v2.html">Home V2</a></li>
                                    <li><a href="{{asset('assets')}}/home-v3.html">Home V3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{asset('assets')}}/books-media-list-view.html">Books &amp; Media</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{asset('assets')}}/books-media-list-view.html">Books &amp; Media List View</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{asset('assets')}}/news-events-list-view.html">News &amp; Events</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{asset('assets')}}/news-events-list-view.html">News &amp; Events List View</a></li>
                                    <li><a href="{{asset('assets')}}/news-events-detail.html">News &amp; Events Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{asset('assets')}}/cart.html">Cart</a></li>
                                    <li><a href="{{asset('assets')}}/checkout.html">Checkout</a></li>
                                    <li><a href="{{asset('assets')}}/signin.html">Signin/Register</a></li>
                                    <li><a href="{{asset('assets')}}/404.html">404/Error</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{asset('assets')}}/blog.html">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{asset('assets')}}/blog.html">Blog Grid View</a></li>
                                    <li><a href="{{asset('assets')}}/blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('assets')}}/services.html">Services</a></li>
                            <li><a href="{{asset('assets')}}/contact.html">Contact</a></li>
                        </ul>
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-md">
                            <div class="topbar-links">
                                <a href="{{asset('assets')}}/signin.html"><i class="fa fa-lock"></i>Login / Register</a>
                                <span>|</span>
                                <div class="header-cart dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <small>0</small>
                                    </a>
                                    <div class="dropdown-menu cart-dropdown">
                                        <ul>
                                            <li class="clearfix">
                                                <img src="{{asset('assets')}}/images/header-cart-image-01.jpg" alt="cart item" />
                                                <div class="item-info">
                                                    <div class="name">
                                                        <a href="#">The Great Gatsby</a>
                                                    </div>
                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                    <div class="price">1 X $10.00</div>
                                                </div>
                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('assets')}}/images/header-cart-image-02.jpg" alt="cart item" />
                                                <div class="item-info">
                                                    <div class="name">
                                                        <a href="#">The Great Gatsby</a>
                                                    </div>
                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                    <div class="price">1 X $10.00</div>
                                                </div>
                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('assets')}}/images/header-cart-image-03.jpg" alt="cart item" />
                                                <div class="item-info">
                                                    <div class="name">
                                                        <a href="#">The Great Gatsby</a>
                                                    </div>
                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                    <div class="price">1 X $10.00</div>
                                                </div>
                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                            </li>
                                        </ul>
                                        <div class="cart-total">
                                            <div class="title">SubTotal</div>
                                            <div class="price">$30.00</div>
                                        </div>
                                        <div class="cart-buttons">
                                            <a href="{{asset('assets')}}/cart.html" class="btn btn-dark-gray">View Cart</a>
                                            <a href="{{asset('assets')}}/checkout.html" class="btn btn-primary">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Header Topbar -->
                    </div>
                    <div class="header-socialbar hidden-sm hidden-xs">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                        <ul class="share-links">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="fa fa-share"></i>
                                </a>
                                <div class="dropdown-menu social-dropdown">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu hidden-md hidden-lg">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Navigation</h4>
                                <a href="#" class="close"></a>
                            </li>
                            <li>
                                <a href="{{asset('assets')}}/index-2.html">Home</a>
                                <ul>
                                    <li><a href="{{asset('assets')}}/index-2.html">Home V1</a></li>
                                    <li><a href="{{asset('assets')}}/home-v2.html">Home V2</a></li>
                                    <li><a href="{{asset('assets')}}/home-v3.html">Home V3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('assets')}}/books-media-list-view.html">Books &amp; Media</a>
                                <ul>
                                    <li><a href="{{asset('assets')}}/books-media-list-view.html">Books &amp; Media List View</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                    <li><a href="{{asset('assets')}}/books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('assets')}}/news-events-list-view.html">News &amp; Events</a>
                                <ul>
                                    <li><a href="{{asset('assets')}}/news-events-list-view.html">News &amp; Events List View</a></li>
                                    <li><a href="{{asset('assets')}}/news-events-detail.html">News &amp; Events Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{asset('assets')}}/cart.html">Cart</a></li>
                                    <li><a href="{{asset('assets')}}/checkout.html">Checkout</a></li>
                                    <li><a href="{{asset('assets')}}/signin.html">Signin/Register</a></li>
                                    <li><a href="{{asset('assets')}}/404.html">404/Error</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('assets')}}/blog.html">Blog</a>
                                <ul>
                                    <li><a href="{{asset('assets')}}/blog.html">Blog Grid View</a></li>
                                    <li><a href="{{asset('assets')}}/blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('assets')}}/services.html">Services</a></li>
                            <li><a href="{{asset('assets')}}/contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End: Header Section -->
