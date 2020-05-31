@extends('main')

@section('title', 'Store Profile')

@section('content')
    <div class="row">
        <div class="bg-light col-md-5 mx-auto mt-5">
            <h1 class="text-center mt-5">Store Profile</h1>
            <img src="assets/img/storeProfile.png" class="rounded mx-auto d-block mb-4" alt="Store Profile">
            <div class="row justify-content-center mb-5 ">
                <h5 class="text-justtify">
                    Store Name : Ternakku <br>
                    Address &emsp;&ensp; : Tungkob <br>
                    Nomor HP &ensp;: 082165097950 <br>
                </h5>
            </div>
            <div class="row justify-content-center mb-5">
                <a href="{{ url('/edit') }}" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Edit</a>
                <a href="{{ url('/edit') }}" class="btn btn-dark ml-10 pl-5 pr-5 btn-lg">Update</a>
            </div>
        </div>
    </div>
@endsection
