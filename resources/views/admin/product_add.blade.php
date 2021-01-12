@extends('layouts.admin')

@section('title', 'Admin Panel Product Add')



@section("content")
    <section class="content">
        <div>
            <h3>Product Add</h3>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Add Form</h4>
                    <hr>
                    <form class="forms-sample" action="{{route('admin_product_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>
                            <select class="form-control form-control-lg" name="category_id">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" class="form-control" name="keywords">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group">
                            <label>Publisher</label>
                            <input type="text" class="form-control" name="publisher">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <label>Year</label>
                            <input type="number" class="form-control" name="year">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="0">
                        </div>
                        <div class="form-group">
                            <label>Min Quantity</label>
                            <input type="number" class="form-control" name="minquantity" value="5">
                        </div>
                        <div class="form-group">
                            <label>Tax</label>
                            <input type="number" class="form-control" name="tax" value="18">
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <input type="text" class="form-control" name="detail">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control form-control-lg" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success mr-2">Add to Product</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>

    </section>
@endsection

