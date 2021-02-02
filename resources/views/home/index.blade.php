@extends('layouts.main')

@section('title', $setting->title)
@section('description')
{{$setting->description}}
@endsection
@section('keywords',$setting->keywords)


