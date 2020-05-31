@extends('main')

@section('title', 'Choose Animal')

@section('content')
    <div class="row">
        <div class="bg-light col-md-5 mx-auto mt-5">
            <h1 class="text-center mt-5">Choose Animal</h1>
            <img src="sapi.png" class="rounded mx-auto d-block mb-4" alt="Sapi">
            <button><a href="{{ url('/Sapi') }}" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Sapi</a><button>

            </div>

            <div class="bg-light col-md-5 mx-auto mt-5">
            <img src="ayam.png" class="rounded mx-auto d-block mb-4" alt="Kambing">
            <button><a href="{{ url('/Ayam') }}" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Ayam</a><button>
            </div>

            <div class="bg-light col-md-5 mx-auto mt-5">
            <img src="kambing.png" class="rounded mx-auto d-block mb-4" alt="Kambing">
            <button><a href="{{ url('/Kambing') }}" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Kambing</a><button>
            </div>
        </div>
    </div>
            
@endsection