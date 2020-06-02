@extends('main')

@section('title', 'Choose The store')

@section('content')
<div class="bg-light col-md-10 mx-auto mt-5">
<h1 class="text-center font-weigt-bold m-4">Choose The Store</h1>
    <div class="row">
        <div class="card mr-3 ml-3" style="width: 16rem;">
            <img src="../images/Ternakku.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#" class="btn btn-dark">Ternakku</a>
                <p class="card-text">Tungkop</p>
                <p class="card-text">0823 xxx xxx</p>
            </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 16rem;">
            <img src="../images/Ternaklu.png" class="card-img-top" alt="...">
            <div class="card-body">
            <a href="#" class="btn btn-dark">Ternaklu</a>
                <p class="card-text">Limpok</p>
                <p class="card-text">0823 xxx xxx</p>
            </div>
        </div>

        <div class="card mr-3 ml-3" style="width: 16rem;">
            <img src="../images/Ternakmu.png" class="card-img-top" alt="...">
            <div class="card-body">
            <a href="#" class="btn btn-dark">Ternakmu</a>
                <p class="card-text">Rukoh</p>
                <p class="card-text">0823 xxx xxx</p>
            </div>
        </div>
    </div>
</div>

@endsection