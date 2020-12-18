@extends('layouts.main')

@section('title', 'Home Page')

@section('sidebar')
    @parent


    <div class="col-sm-4">
        <div class="rowberkay" style="background-color: #fde8e8">

            <h3>Sidebar</h3>
            <p>This is appended to the master sidebar.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-sm-8" style="background-color: antiquewhite">
        <h1>Slider</h1>
        <p>This is my body content.</p>
        <br>
        <hr>
        <h3>Content</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>

@endsection
