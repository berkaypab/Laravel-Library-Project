
<section class="content">
    <div>
        <h3>Product Edit</h3>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Message Detail</h4>
                <hr>
                @include('home.message')
                <form class="forms-sample" action="{{route('admin_message_update',['id'=>$data->id])}}"
                      method="post">
                    @csrf
                    <table class="table">

                        <tr>
                            <th>ID</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$data->message}}</td>
                        </tr>

                        <tr>
                            <th>Admin Note</th>
                            <td>{{$data->note}}
                                <textarea id="note" name="note">{{$data->note}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-success mr-2">Update Message</button>
                            </td>
                            <td>
                                <button class="btn btn-light">Cancel</button>
                            </td>
                        </tr>
                    </table>
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


