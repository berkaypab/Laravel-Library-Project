@extends('layouts.admin')

@section('title', 'Admin Panel Category Add')



@section("content")
    <section class="content">
        <div>
            <h3>Category Add</h3>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Add Form</h4>
                    <hr>
                    <form class="forms-sample" action="{{route('admin_category_add')}}" method="post">

                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>Parent</label>
                            <select class="form-control form-control-lg" name="parent_id">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option
                                        value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
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

                        <button type="submit" class="btn btn-success mr-2">Add to Category</button>
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

