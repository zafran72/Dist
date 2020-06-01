@extends('main')

@section('title', 'Choose Animal')

@section('content')
<div class="bg-light col-md-10 mx-auto mt-5">
<h1 class="text-center font-weigt-bold m-4">Choose Animal</h1>
    <div class="row">
        <div class="card mr-3 ml-3" style="width: 16rem;">
            <img src="../images/sapi.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{ route('chooseternak') }}" class="btn btn-dark">Sapi</a>
            </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 16rem;">
            <img src="../images/Ayam.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{ route('chooseternak') }" class="btn btn-dark">Ayam</a>
            </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 16rem;">
            <img src="../images/kambing.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{ route('chooseternak') }" class="btn btn-dark">Kambing</a>
            </div>
        </div>
    </div>
</div>

@endsection