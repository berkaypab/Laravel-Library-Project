@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.main')
@section('title','About Us-'. $setting->title)
@section('description'){{$setting->description}}
@endsection
@section('keywords',$setting->keywords)


@section('content')
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>About Us</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                {!!$setting->aboutus!!}
            </main>
        </div>
    </div>
    <!-- End: Cart Section -->
@endsection
