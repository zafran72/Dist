@extends('main')

@section('title', 'Detail')

@section('content')

<div class="bg-light col-md-10 mx-auto mt-5">
<h1 class="text-center font-weigt-bold m-4">Details</h1>
    <div class="row">
        
            <div class="card mr-4 ml-4" style="width: 15rem;">  
                <img src="../images/sapi1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">3 age</p>
                    <p class="card-text">110 kg</p>
                    <p class="card-text">Rp.16.0000.0000</p>
<div class="row">
    <div class="bg-light col-md-10 mx-auto mt-5">
    <h1 class="text-center font-weigt-bold m-4">Details</h1>
        <div class="row justify-content-center mb-5 ">
            @foreach($datamasuk as $data)
                <div class="card mr-4 ml-4" style="width: 15rem;">  
                    <img class="bd-placeholder-img card-img-top" name="image" src="@if($data->image == null) {{ asset('assets\img\sapi.png') }}
                                        @else {{ asset('assets/img/') }}/{{ $data->image }} @endif" alt=" {{ $data->username}}'s picture">
                    <div class="card-body">
                        <p class="card-text" name="age"> {{ $data->age }}</p>
                        <p class="card-text" name="weight"> {{ $data->weight }}</p>
                        <p class="card-text" name="price"> {{ $data->price }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="card mr-4 ml-3" style="width: 16rem;">
                <img src="../images/sapi2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">5 age</p>
                    <p class="card-text">150 kg</p>
                    <p class="card-text">Rp.19.0000.0000</p>
                </div>
            </div>
        

        
            <div class="card mr-3 ml-3" style="width: 16rem;">
                <img src="../images/sapi3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" class="text-justtify">4 age</p>
                    <p class="card-text">120 kg</p>
                    <p class="card-text">Rp.18.0000.0000</p>
                </div>
            </div>
            <!-- <div class="row justify-content-center mb-5">
            <button type="button" class="btn btn-dark btn-sm">Update</button>
            <button type="button" class="btn btn-dark btn-sm">Profil</button>
            </div> -->
            <div class="mx-auto" style="width: 200px;">
                <a href="{{ url('/edit') }}" class="btn btn-dark ml-10  btn-sm">Update</a>
                <a href="{{ url('/edit') }}" class="btn btn-dark mr-25  btn-sm">Profil</a>

            <div class="row justify-content-center mb-5">
                <a href="{{ route('storage.index', $data->id)}}" type="button" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Update Storage</a>
                <a href="storeProfile" type="button" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Store Profile</a>
            </div>
        </div>
    </div>
</div>

@endsection