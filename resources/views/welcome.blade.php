@extends('main')

@section('title', 'Dist')

@section('content')
    <div class="row">
        <div class="col-sm p-5 m-5">
        <h1 style="text-align: center">Dist.</h1>
        </div>
        <div class="col-sm p-5 m-5">
            <h1 class="mb-5" style="text-align: center">Login Here</h1>
            <a href="{{ url('/produsen/login') }}" class="btn btn-dark ml-5 mr-5 mt-3">Produsen</a>
            <a href="{{ url('/pedagang/login') }}" class="btn btn-dark ml-5 mt-3">Pedagang</a>
            <div class="row justify-content-center mb-5">
                <a href="{{ url('/admin/login') }}" class="btn btn-dark ml-4 mt-5">Admin</a>
            </div>
        </div>
    </div>
@endsection