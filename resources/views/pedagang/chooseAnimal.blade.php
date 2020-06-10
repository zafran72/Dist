@extends('pedagang/main')

@section('title', 'Choose Animal')

@section('content')
<div class="bg-light col-md-10 mx-auto mt-5">
<h1 class="text-center font-weigt-bold m-4">Choose Animal</h1>
    <div class="row">
        @foreach ($datamasuk as $data)
            <div class="card mr-3 ml-3" style="width: 16rem;">
                <img src="{{ asset('images') }}/{{ $data->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{ route('total') }}" class="btn btn-dark">{{ $data->animal }}</a>
                    <p class="card-text" name="price"> {{ $data->price }}</p>
                    <p class="card-text" name="weight"> {{ $data->weight }}</p>
                        <p class="card-text" name="age"> {{ $data->age }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection