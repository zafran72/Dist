@extends('produsen/main')

@section('title', 'Detail')

@section('content')

<div class="row">
    <div class="bg-light col-md-10 mx-auto mt-5">
    <h1 class="text-center font-weigt-bold m-4">Details</h1>
        <div class="row justify-content-center mb-5 ">
            @foreach($datamasuk as $data)
                <div class="card mr-4 ml-4" style="width: 15rem;">  
                    <img class="bd-placeholder-img card-img-top" name="image" src="@if($data->image == null) {{ asset('assets\img\sapi.png') }}
                                        @else {{ asset('images') }}/{{ $data->image }} @endif" alt=" {{ $data->username}}'s picture">
                    <div class="card-body">
                        <p class="card-text" name="age"> {{ $data->age }}</p>
                        <p class="card-text" name="weight"> {{ $data->weight }}</p>
                        <p class="card-text" name="price"> {{ $data->price }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center mb-5">
                <a href="{{ route('storage.index', $data->id)}}" type="button" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Update Storage</a>
                <a href="storeProfile" type="button" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Store Profile</a>
            </div>
        </div>
    </div>
</div>

@endsection