@extends('pedagang/main')

@section('title', 'Choose The store')

@section('content')
<div class="bg-light col-md-10 mx-auto mt-5">
<h1 class="text-center font-weigt-bold m-4">Choose The Store</h1>
    <div class="row">
        @foreach ($datamasuk as $data)
            <div class="card mr-3 ml-3" style="width: 16rem;">
                <img src="{{ asset('images') }}/{{ $data->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{ route('chooseanimal') }}" class="btn btn-dark">{{ $data->store_name }}</a>
                    <p class="card-text">{{ $data->address }}</p>
                    <p class="card-text">{{ $data->phone_number }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection