@extends('layouts.main')
@section('title','Product List-'. $data->title)
@section('description'){{$data->description}}
@endsection
@section('keywords',$data->keywords)


@section('content')

    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Product Detail</h2>
                <span class="underline center"></span>

            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category ,$data->category->title)}}
                        /
                    </li>
                    <li>{{$data->title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <!-- Start: Products Section -->

                <div id="content" class="site-content">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="booksmedia-detail-main">
                                <div class="container">
                                    <div class="row">
                                        <!-- Start: Search Section -->
                                        <section class="search-filters">
                                            <div class="container">
                                                <div class="filter-box">
                                                    <h3>What are you looking for at the library?</h3>
                                                    <form action="http://libraria.demo.presstigers.com/index.html"
                                                          method="get">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="keywords">Search by
                                                                    Keyword</label>
                                                                <input class="form-control"
                                                                       placeholder="Search by Keyword" id="keywords"
                                                                       name="keywords" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-group">
                                                                <select name="catalog" id="catalog"
                                                                        class="form-control">
                                                                    <option>Search the Catalog</option>
                                                                    <option>Catalog 01</option>
                                                                    <option>Catalog 02</option>
                                                                    <option>Catalog 03</option>
                                                                    <option>Catalog 04</option>
                                                                    <option>Catalog 05</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-group">
                                                                <select name="category" id="category"
                                                                        class="form-control">
                                                                    <option>All Categories</option>
                                                                    <option>Category 01</option>
                                                                    <option>Category 02</option>
                                                                    <option>Category 03</option>
                                                                    <option>Category 04</option>
                                                                    <option>Category 05</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" type="submit"
                                                                       value="Search">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- End: Search Section -->
                                    </div>
                                    <div class="booksmedia-detail-box">

                                        <div class="detailed-box">
                                            <div class="col-xs-12 col-sm-5 col-md-3">

                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon blue-icon"></div>
                                                    <img src="{{Storage::url($data->image)}}" alt="Book Image">
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-7 col-md-6">
                                                <div class="post-center-content">
                                                    <h2>{{$data->title}}</h2>
                                                    <p><strong>Yazar:</strong>{{$data->publisher}}</p>
                                                    <p><strong>ISBN:</strong> 9781581573268, 9780062419385</p>
                                                    <p><strong>Puanlama:</strong></p>
                                                    <p><strong>Baskı:</strong> First edition</p>
                                                    <p><strong>Yıl:</strong>{{$data->year}}</p>
                                                    <p><strong>Adet:</strong>{{$data->quantity}}</p>
                                                    <p><strong>Description:</strong>{{$data->description}}</p>
                                                    <p><strong>Dil:</strong> Icelandic dialogue; English subtitles.</p>
                                                    <p><strong>Konu:</strong>{{$data->keywords}}</p>
                                                    <div class="actions">
                                                        <ul>
                                                            <li>
                                                                <a href="{{route('addtocart',['id'=>$data->id])}}"
                                                                   target="_blank" data-toggle="blog-tags"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Add To Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('product',['id'=>$data->id,'slug'=>$data->slug])}}"
                                                                   data-toggle="blog-tags" data-placement="top" title=""
                                                                   data-original-title="Like">
                                                                    <i class="fa fa-info"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Mail">
                                                                    <i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Print">
                                                                    <i class="fa fa-share-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 ">
                                                <div class="post-right-content">
                                                    <h4>Available now</h4>
                                                    <p><strong>Total Copies:</strong> 01</p>
                                                    <p><strong>Available:</strong> 019780062419385</p>
                                                    <p><strong>Holds:</strong> 01</p>
                                                    <p><strong>On the shelves now at:</strong> Lawrence Public Library
                                                    </p>
                                                    <p><strong>Call #:</strong> 747 STRUTT C</p>
                                                    <a href="#." class="available-location">Availability by Location <i
                                                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                    <a href="#." class="btn btn-dark-gray">Place a Hold</a>
                                                    <a href="#." class="btn btn-dark-gray">View sample</a>
                                                    <a href="#." class="btn btn-dark-gray">Find Similar Titles</a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p><strong>Summary:</strong>{!! $data->detail !!}</p>


                                        <form id="reservation" name="reservation"
                                              action="{{route('reservation',['id'=>$data->id])}}"
                                              method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="isim"
                                                               id="UserName" name="UserName"
                                                               value="{{$data->username}}"
                                                               aria-required="true" disabled>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <label type="">Rezervasyon Başlangıc tarihi </label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="date"
                                                               id="reservationdate"
                                                               name="reservationdate">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <label> Rezervasyon Bitiş tarihi </label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="date"
                                                               id="reservationdatelast"
                                                               name="reservationdatelast">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <label> Adres: </label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Adres"
                                                               id="address" name="address"
                                                               aria-required="true">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <label> Telefon No: </label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Phone"
                                                               id="phone" name="phone" type="tel"
                                                               aria-required="true">
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <label> Note: </label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Your message"
                                                                  id="message" name="message"
                                                                  aria-required="true"></textarea>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-sm-12">
                                                <div class="form-group form-submit">
                                                    <button class="btn-dark" type="submit">
                                                        Reservasyon Oluştur
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </main>
        </div>
        <!-- End: Products Section -->
        </main>
    </div>
    </div>
@endsection

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

<!-- Custom Scripts -->
<script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>
