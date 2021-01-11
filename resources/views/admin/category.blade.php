@extends('layouts.admin')

@section('title', 'Admin Panel Category')



@section("content")
    <section class="content">
        <div>

        </div>
        <h3>Categories</h3>
        <hr>
        <a href="{{route('admin_category_add')}}" type="button" class="btn btn-primary btn-fw">Add category</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Parent ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)


                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->parent_id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->status}}</td>
                    <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}">Edit</a></td>
                    <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}"
                           onclick="return confirm('The data will be deleted Sure?')">Delete</a></td>

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

