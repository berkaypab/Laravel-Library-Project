@extends('layouts.admin')

@section('title', 'Admin Panel Settings')



@section("content")
    <section class="content">
        <form class="forms-sample" action="{{route('admin_setting_update')}}"
              method="post">
            @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Setting Edit Form</h4>
                        <hr>
                        <section>
                            <div class="row">

                                <div class="col-md-12">
                                    <ul id="tabs" class="nav nav-tabs">
                                        <li class="nav-item"><a href="" data-target="#general1" data-toggle="tab"
                                                                class="nav-link small text-uppercase">General</a>
                                        </li>
                                        <li class="nav-item"><a href="" data-target="#smtp1" data-toggle="tab"
                                                                class="nav-link small text-uppercase active">Smtp</a>
                                        </li>
                                        <li class="nav-item"><a href="" data-target="#social1" data-toggle="tab"
                                                                class="nav-link small text-uppercase">Social Media</a>
                                        </li>
                                        <li class="nav-item"><a href="" data-target="#aboutus1" data-toggle="tab"
                                                                class="nav-link small text-uppercase">About Us</a>
                                        </li>
                                        <li class="nav-item"><a href="" data-target="#contact1" data-toggle="tab"
                                                                class="nav-link small text-uppercase">Contact Page</a>
                                        </li>
                                        <li class="nav-item"><a href="" data-target="#reference1" data-toggle="tab"
                                                                class="nav-link small text-uppercase">References</a>
                                        </li>
                                    </ul>
                                    <br>
                                    <div id="tabsContent" class="tab-content">
                                        <div id="general1" class="tab-pane fade">
                                            <input type="hidden" id="id" class="form-control" value="{{$data->id}}"
                                                   name="id">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" value="{{$data->title}}"
                                                       name="title">
                                            </div>
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" class="form-control" value="{{$data->keywords}}"
                                                       name="keywords">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" value="{{$data->description}}"
                                                       name="description">
                                            </div>
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control" value="{{$data->company}}"
                                                       name="company">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" value="{{$data->address}}"
                                                       name="address">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" value="{{$data->phone}}"
                                                       name="phone">
                                            </div>
                                            <div class="form-group">
                                                <label>Fax</label>
                                                <input type="text" class="form-control" value="{{$data->fax}}"
                                                       name="fax">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email"
                                                       value="{{$data->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control form-control-lg" name="status">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="smtp1" class="tab-pane fade active show">
                                            <div class="form-group">
                                                <label>Smtp Server</label>
                                                <input type="text" class="form-control" value="{{$data->smtpserver}}"
                                                       name="smtpserver">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp E-mail</label>
                                                <input type="text" class="form-control" value="{{$data->smtpemail}}"
                                                       name="smtpemail">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Password</label>
                                                <input type="password" class="form-control"
                                                       value="{{$data->smtppassword}}"
                                                       name="smtppassword">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Port</label>
                                                <input type="number" class="form-control" value="{{$data->smtpport}}"
                                                       name="smtpport">
                                            </div>
                                        </div>
                                        <div id="social1" class="tab-pane fade">
                                            <div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$data->facebook}}" name="facebook">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$data->instagram}}" name="instagram">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$data->twitter}}" name="twitter">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Youtube</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$data->youtube}}" name="youtube">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="aboutus1" class="tab-pane fade">
                                            <div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>About Us</label>
                                                        <textarea id="aboutus"
                                                                  name="aboutus">{{$data->aboutus}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $('#aboutus').summernote({
                                                    placeholder: 'Hello Bootstrap 4',
                                                    tabsize: 2,
                                                    height: 100
                                                });
                                            </script>
                                        </div>
                                        <div id="contact1" class="tab-pane fade">
                                            <div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <textarea id="contact"
                                                                  name="contact">{{$data->contact}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $('#contact').summernote({
                                                    placeholder: 'Hello Bootstrap 4',
                                                    tabsize: 2,
                                                    height: 100
                                                });
                                            </script>
                                        </div>
                                        <div id="reference1" class="tab-pane fade">
                                            <div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>References</label>
                                                        <textarea id="references"
                                                                  name="references">{{$data->references}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $('#references').summernote({
                                                    placeholder: 'Hello Bootstrap 4',
                                                    tabsize: 2,
                                                    height: 100
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <button type="submit" class="btn btn-success mr-2">Save Setting</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

