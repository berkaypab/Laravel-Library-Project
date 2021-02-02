@extends('layouts.admin')

@section('title', 'Admin Panel Product Edit')



@section("content")
    <section class="content">
        <div>
            <h3>Product Edit</h3>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Edit Form</h4>
                    <hr>
                    <form class="forms-sample" action="{{route('admin_product_update',['id'=>$data->id])}}"
                          method="post">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control form-control-lg" name="category_id">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}"
                                            @if ($rs->id==$data->parent_id) selected="selected" @endif>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" value="{{$data->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" class="form-control" value="{{$data->keywords}}" name="keywords">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" value="{{$data->description}}" name="description">
                        </div>
                        <div class="form-group">
                            <label>Publisher</label>
                            <input type="text" class="form-control" value="{{$data->publisher}}" name="publisher">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" value="{{$data->price}}" name="price">
                        </div>
                        <div class="form-group">
                            <label>Year</label>
                            <input type="number" class="form-control" value="{{$data->year}}" name="year">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}">
                        </div>
                        <div class="form-group">
                            <label>Min Quantity</label>
                            <input type="number" class="form-control" name="minquantity" value="{{$data->minquantity}}">
                        </div>
                        <div class="form-group">
                            <label>Tax</label>
                            <input type="number" class="form-control" name="tax" value="{{$data->tax}}">
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                            <script>
                                $('#summernote').summernote({
                                    placeholder: 'Hello Bootstrap 4',
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>

                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" value="{{$data->slug}}" name="slug">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control"  name="image">

                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}" height="100" alt="">
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control form-control-lg" name="status">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success mr-2">Save Product</button>
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

