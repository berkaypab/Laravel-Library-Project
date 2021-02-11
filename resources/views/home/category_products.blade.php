@php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList();
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
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
                <h2>{{$data->title}}</h2>
                <span class="underline center"></span>

            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products List</a></li>
                    <li> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data ,$data->title)}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <!-- Start: Book & Media Section -->
                <div id="content" class="site-content">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="books-media-list">
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
                                    <div class="row">
                                        <div class="col-md-9 col-md-push-3">
                                            <div class="filter-options margin-list">
                                                <div class="row">

                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="filter-result">Showing items 1 to 9 of 19 total
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 pull-right">
                                                        <div class="filter-toggle">
                                                            <a href="books-media-gird-view-v1.html"><i
                                                                    class="glyphicon glyphicon-th-large"></i></a>
                                                            <a href="books-media-list-view.html" class="active"><i
                                                                    class="glyphicon glyphicon-th-list"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="books-list">
                                                @foreach($datalist as $rs)
                                                    <article>
                                                        <div class="single-book-box">
                                                            <div class="post-thumbnail">

                                                                <a href="books-media-detail-v1.html"><img alt="Book"
                                                                                                          src="{{Storage::url($rs->image)}}"/></a>
                                                            </div>
                                                            <div class="post-detail">
                                                                <div class="books-social-sharing">
                                                                    <ul>
                                                                        <li><a href="{{$setting->facebook}}"
                                                                               target="_blank"><i
                                                                                    class="fa fa-facebook"></i></a></li>
                                                                        <li><a href="{{$setting->twitter}}"
                                                                               target="_blank"><i
                                                                                    class="fa fa-twitter"></i></a></li>
                                                                        <li><a href="#" target="_blank"><i
                                                                                    class="fa fa-google-plus"></i></a>
                                                                        </li>
                                                                        <li><a href="#" target="_blank"><i
                                                                                    class="fa fa-rss"></i></a></li>
                                                                        <li><a href="#" target="_blank"><i
                                                                                    class="fa fa-linkedin"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="optional-links">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="{{route('addtocart',['id'=>$rs->id])}}"
                                                                               target="_blank"
                                                                               data-toggle="blog-tags"
                                                                               data-placement="top"
                                                                               title="Add TO CART">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                                                                               data-toggle="blog-tags"
                                                                               data-placement="top"
                                                                               title="Detail">
                                                                                <i class="fa fa-info"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" target="_blank"
                                                                               data-toggle="blog-tags"
                                                                               data-placement="top"
                                                                               title="Mail"><i
                                                                                    class="fa fa-envelope"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" target="_blank"
                                                                               data-toggle="blog-tags"
                                                                               data-placement="top"
                                                                               title="Search">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" target="_blank"
                                                                               data-toggle="blog-tags"
                                                                               data-placement="top"
                                                                               title="Print">
                                                                                <i class="fa fa-print"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <header class="entry-header">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <h3 class="entry-title">
                                                                                <a href="books-media-detail-v1.html">{{$rs->title}}</a>
                                                                            </h3>
                                                                            <ul>
                                                                                <li>
                                                                                    <strong>Author:</strong> {{$rs->publisher}}
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <ul>
                                                                                <li><strong>Edition:</strong> First
                                                                                    editio
                                                                                </li>
                                                                                <li><strong>Local Availability:</strong>
                                                                                    {{$rs->quantity}}
                                                                                </li>
                                                                                <li>
                                                                                    <div class="rating">
                                                                                        <strong>Rating: </strong>
                                                                                        <span>☆</span>
                                                                                        <span>☆</span>
                                                                                        <span>☆</span>
                                                                                        <span>☆</span>
                                                                                        <span>☆</span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <div class="entry-content">
                                                                    <p>{!! $rs->detail !!}</p>
                                                                </div>
                                                                <footer class="entry-footer">
                                                                    <a class="btn btn-dark-gray"
                                                                       href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Read More</a>
                                                                </footer>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </article>
                                                @endforeach
                                            </div>
                                            <nav class="navigation pagination text-center">
                                                <h2 class="screen-reader-text">Posts navigation</h2>
                                                <div class="nav-links">
                                                    <a class="prev page-numbers" href="#."><i
                                                            class="fa fa-long-arrow-left"></i> Previous</a>
                                                    <a class="page-numbers" href="#.">1</a>
                                                    <span class="page-numbers current">2</span>
                                                    <a class="page-numbers" href="#.">3</a>
                                                    <a class="page-numbers" href="#.">4</a>
                                                    <a class="next page-numbers" href="#.">Next <i
                                                            class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="col-md-3 col-md-pull-9">
                                            <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                                <div class="widget widget_related_search open" data-accordion>
                                                    <h4 class="widget-title" data-control>Related Searches</h4>
                                                    <div data-content>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Subject</h5>
                                                            <div class="widget_categories" data-content>
                                                                <ul>
                                                                    <li><a href="#">Love stories <span>(18)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Texas <span>(04)</span></a></li>
                                                                    <li><a href="#">Rich people <span>(03)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Humorous stories
                                                                            <span>(02)</span></a></li>
                                                                    <li><a href="#">Widows <span>(02)</span></a></li>
                                                                    <li><a href="#">Women <span>(11)</span></a></li>
                                                                    <li><a href="#">Babysitters <span>(25)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Law firms <span>(09)</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Authors</h5>
                                                            <div class="widget_categories" data-content>
                                                                <ul>
                                                                    <li><a href="#">Love stories <span>(18)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Texas <span>(04)</span></a></li>
                                                                    <li><a href="#">Rich people <span>(03)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Humorous stories
                                                                            <span>(02)</span></a></li>
                                                                    <li><a href="#">Widows <span>(02)</span></a></li>
                                                                    <li><a href="#">Women <span>(11)</span></a></li>
                                                                    <li><a href="#">Babysitters <span>(25)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Law firms <span>(09)</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Series</h5>
                                                            <div class="widget_categories" data-content>
                                                                <ul>
                                                                    <li><a href="#">Love stories <span>(18)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Texas <span>(04)</span></a></li>
                                                                    <li><a href="#">Rich people <span>(03)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Humorous stories
                                                                            <span>(02)</span></a></li>
                                                                    <li><a href="#">Widows <span>(02)</span></a></li>
                                                                    <li><a href="#">Women <span>(11)</span></a></li>
                                                                    <li><a href="#">Babysitters <span>(25)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Law firms <span>(09)</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Other
                                                                Searches</h5>
                                                            <div class="widget_categories" data-content>
                                                                <ul>
                                                                    <li><a href="#">Love stories <span>(18)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Texas <span>(04)</span></a></li>
                                                                    <li><a href="#">Rich people <span>(03)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Humorous stories
                                                                            <span>(02)</span></a></li>
                                                                    <li><a href="#">Widows <span>(02)</span></a></li>
                                                                    <li><a href="#">Women <span>(11)</span></a></li>
                                                                    <li><a href="#">Babysitters <span>(25)</span></a>
                                                                    </li>
                                                                    <li><a href="#">Law firms <span>(09)</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="widget widget_narrow_search" data-accordion>
                                                    <h4 class="widget-title" data-control>Narrow your search</h4>
                                                    <div data-content>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Type of
                                                                Material</h5>
                                                            <div class="widget_material" data-content>
                                                                <form action="#">
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="books"> Books</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="electronic" checked> Electronic
                                                                        Resources</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="ebooks"> ebooks</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="soundrecording" checked> Sound
                                                                        Recording</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="largeprint"> Large
                                                                        Print</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="audioebooks" checked> Audio
                                                                        eBooks</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Publishing
                                                                Date </h5>
                                                            <div class="widget widget_material" data-content>
                                                                <form action="#">
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="books"> Books</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="electronic" checked> Electronic
                                                                        Resources</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="ebooks"> ebooks</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="soundrecording" checked> Sound
                                                                        Recording</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="largeprint"> Large
                                                                        Print</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="audioebooks" checked> Audio
                                                                        eBooks</label>
                                                                </form>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Popularity </h5>
                                                            <div class="widget widget_material" data-content>
                                                                <form action="#">
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="books"> Books</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="electronic" checked> Electronic
                                                                        Resources</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="ebooks"> ebooks</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="soundrecording" checked> Sound
                                                                        Recording</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="largeprint"> Large
                                                                        Print</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="audioebooks" checked> Audio
                                                                        eBooks</label>
                                                                </form>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div data-accordion>
                                                            <h5 class="widget-sub-title" data-control>Language </h5>
                                                            <div class="widget widget_material" data-content>
                                                                <form action="#">
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="books"> Books</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="electronic" checked> Electronic
                                                                        Resources</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="ebooks"> ebooks</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="soundrecording" checked> Sound
                                                                        Recording</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="largeprint"> Large
                                                                        Print</label>
                                                                    <label><input type="checkbox" name="material"
                                                                                  value="audioebooks" checked> Audio
                                                                        eBooks</label>
                                                                </form>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="widget widget_recent_releases">
                                                    <h4 class="widget-title">New Releases</h4>
                                                    <ul>
                                                        <li><a href="#">Books</a></li>
                                                        <li><a href="#">eBooks</a></li>
                                                        <li><a href="#">DVDS</a></li>
                                                        <li><a href="#">Magazines</a></li>
                                                        <li><a href="#">Audio</a></li>
                                                        <li><a href="#">eAudio</a></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="widget widget_recent_entries">
                                                    <h4 class="widget-title">On-Order Items</h4>
                                                    <ul>
                                                        <li>
                                                            <figure>

                                                                <img src="{{asset('assets')}}/images/order-item-01.jpg"
                                                                     alt="product"/>
                                                            </figure>
                                                            <a href="#">The Sonic Boom</a>
                                                            <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>

                                                            <div class="rating">
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                        <li>
                                                            <figure>
                                                                <img src="{{asset('assets')}}/images/order-item-02.jpg"
                                                                     alt="product"/>
                                                            </figure>
                                                            <a href="#">The Sonic Boom</a>
                                                            <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>

                                                            <div class="rating">
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                        <li>
                                                            <figure>
                                                                <img src="{{asset('assets')}}/images/order-item-03.jpg"
                                                                     alt="product"/>
                                                            </figure>
                                                            <a href="#">The Sonic Boom</a>
                                                            <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>

                                                            <div class="rating">
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                                <span>☆</span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
                <!-- End: Books & Media Section -->
            </main>
        </div>
    </div><br><br>
    @include('home.popular')
    <!-- End: Cart Section -->
@endsection

