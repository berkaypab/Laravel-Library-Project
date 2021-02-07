@extends('layouts.admin')

@section('title', 'Admin Panel Contact Messages')



@section("content")
    <section class="content">

        <h3>Messages</h3>
        <hr>
        <br>
        @include('home.message')

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Admin Note</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->name}}</td>
                    <td>{{$rs->email}}</td>
                    <td>{{$rs->phone}}</td>
                    <td>{{$rs->subject}}</td>
                    <td>{{$rs->message}}</td>
                    <td>{{$rs->note}}</td>
                    <td>{{$rs->status}}</td>

                    <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}"
                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img
                                src="{{asset('assets')}}/admin/images/image_gallery.png" height="12"></a></td>
                    <td><a href="{{route('admin_message_delete',['id'=>$rs->id])}}"
                           onclick="return confirm('The data will be deleted Sure?')">
                            <img
                                src="{{asset('assets')}}/admin/images/delete.png" height="12">
                        </a></td>

                    <td>
                        <label class="badge badge-danger">Pending</label>
                    </td>
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

