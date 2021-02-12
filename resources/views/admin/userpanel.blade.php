@extends('layouts.admin')

@section('title', 'Admin Panel Products')



@section("content")
    <section class="content">
        <div>

        </div>
        <h3>Users</h3>
        <hr>
        <a href="#" type="button" class="btn btn-primary btn-fw">Add Role</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
                <tr>

                    <td>{{$rs->id}}</td>
                    <td>{{$rs->name}}</td>
                    <td>{{$rs->role}}<a href="{{route('roleadd',['id'=>$rs->id])}}"
                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i
                                class="fa fa-plus">+</i></a></td>
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

