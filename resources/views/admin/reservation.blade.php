@extends('layouts.admin')

@section('title', 'Admin Panel Reservation')



@section("content")
    <section class="content">
        <div>

        </div>
        <h3>Reservations</h3>
        <hr>

        <table class="table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Message</th>
                <th>Product Name</th>
                <th>Date</th>
                <th>Onay Durumu</th>
                <th>Onayla</th>
                <th>Reddet</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $rs)
                <tr>
                    <td>{{$rs->user_id}}</td>
                    <td>{{$rs->message}}</td>
                    <td>{{$rs->product_id}}
                    <td>{{$rs->reservationdate}}</td>
                    <td>{{$rs->approve}}</td>
                    <td><a href="{{route('admin_reservation_approve',['id'=>$rs->id])}}"
                           onclick="return confirm('Onay vermek istiyor musunuz? ')">Onayla</a></td>
                    <td><a href="{{route('admin_reservation_cancel',['id'=>$rs->id])}}"
                           onclick="return confirm('Reddetmek istiyor musunuz?')">Reddet</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
    </section>
@endsection
@section('footer')
    <script src="{{asset('assets')}}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{asset('assets')}}/admin/assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="{{asset('assets')}}/admin/assets/js/shared/off-canvas.js"></script>
    <script src="{{asset('assets')}}/admin/assets/js/shared/misc.js"></script>
    <script src="{{asset('assets')}}/admin/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
@endsection
