@extends('layouts.main')

@section('title','User Profile Reservations')



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
                    <li>Reservations</li>
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
                    <section class="content">
                        <div>

                        </div>
                        <h3>Reservations</h3>
                        <hr>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>Your Note</th>
                                <th>Product Name</th>
                                <th>Phone</th>
                                <th>Başlangıç Tarihi</th>
                                <th>Bitiş Tarihi</th>
                                <th>Onay Durumu</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->user_id}}</td>
                                    <td>{{$rs->message}}</td>
                                    <td>{{$rs->product_id}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->reservationdate}}</td>
                                    <td>{{$rs->reservationdatelast}}</td>
                                    <td>{{$rs->approve}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </section>
                </div>
            </div>
        </div>
    </div>






@endsection
