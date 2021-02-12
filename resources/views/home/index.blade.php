@extends('layouts.main')

@section('title', $setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')

    <div class="booksmedia-fullwidth booksmedia-popular-list">
        <h2 class="section-title text-center">Popular Items</h2>
        <span class="underline center"></span>

        <ul class="popular-items-detail-v1">
            @foreach($picked as $rs)
                <li>
                    <figure>
                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">  <img src="{{Storage::url($rs->image)}}" alt="Book"></a>
                        <figcaption>
                            <header>
                                <h4><a href="#.">{{$rs->title}}</a></h4>
                                <p><strong>Author:</strong>{{$rs->publisher}}</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            {!!$rs->detail!!}
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="{{route('addtocart',['id'=>$rs->id])}}" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                                           data-toggle="blog-tags" data-placement="top"
                                           title="Detail">
                                            <i class="fa fa-info"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Mail"><i
                                                class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Reservation">
                                            <i class="fa fa-ticket "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Print">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </li>
            @endforeach
        </ul>
    </div><br><br>

    <div class="booksmedia-fullwidth booksmedia-popular-list">
        <h2 class="section-title text-center">Picked For You</h2>
        <span class="underline center"></span>

        <ul class="popular-items-detail-v1">
            @foreach($daily as $rs)
                <li>
                    <figure>
                      <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">  <img src="{{Storage::url($rs->image)}}" alt="Book"></a>
                        <figcaption>
                            <header>
                                <h4><a href="#.">{{$rs->title}}</a></h4>
                                <p><strong>Author:</strong>{{$rs->publisher}}</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            {!!$rs->detail!!}
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="{{route('addtocart',['id'=>$rs->id])}}" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                                           data-toggle="blog-tags" data-placement="top"
                                           title="Detail">
                                            <i class="fa fa-info"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Mail"><i
                                                class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Reservation">
                                            <i class="fa fa-ticket "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                           title="Print">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </li>
            @endforeach
        </ul>
    </div><br><br>
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


@endsection

