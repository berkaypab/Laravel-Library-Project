@extends('layouts.admin')

@section('title', 'Admin Panel Products')



@section("content")
    <section class="content">
        <div>

        </div>
        <h3>Products</h3>
        <hr>
        <a href="{{route('admin_product_add')}}" type="button" class="btn btn-primary btn-fw">Add Product</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Year</th>
                <th>Publisher</th>
                <th>Title(s)</th>
                <th>Price(s)</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Image Gallery</th>
                <th>Status</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->category_id}}</td>
                    <td>{{$rs->year}}</td>
                    <td>{{$rs->publisher}}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->price}}</td>
                    <td>{{$rs->quantity}}</td>
                    <td>
                        @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" height="30">
                        @endif
                    </td>
                    <td><a href="{{route('admin_image_add',['product_id'=>$rs->id])}}"
                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img
                                src="{{asset('assets')}}/admin/images/image_gallery.png" height="12"></a></td>
                    <td>{{$rs->status}}</td>
                    <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}">
                            <img
                                src="{{asset('assets')}}/admin/images/edit.png" height="12">
                        </a></td>
                    <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}"
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

