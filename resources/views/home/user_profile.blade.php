@extends('layouts.main')

@section('title','User Profile')



@section('content')
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>User Page</h2>
                <span class="underline center"></span>

            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Userpanel</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <!-- Main -->


                <div id="main" class="col-md-10">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>






@endsection
