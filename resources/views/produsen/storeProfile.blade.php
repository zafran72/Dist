@extends('main')

@section('title', 'Store Profile')

@section('content')
    <div class="row">
        <div class="bg-light col-md-10 mx-auto mt-5">
            <h1 class="text-center mt-5">Store Profile</h1>
            <div class="row justify-content-center mb-5 ">
                <div class="card h">
                    @foreach($datamasuk as $data)
                        <img class="bd-placeholder-img card-img-top" style="width:200px;height:200px;" name="image" src="@if($data->image == null) {{ asset('assets\img\storeProfile.png') }}
                                    @else {{ asset('images') }}/{{ $data->image }} @endif" alt=" {{ $data->username}}'s picture">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title" name="store_name"> {{ $data->store_name }}</h5>
                            <h5 class="card-text" name="address">{{ $data->address }}</h5>
                            <h5 class="card-text" name="phone_number">{{ $data->phone_number }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <a href="{{ route('storage.index', $data->id)}}" type="button" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Update Storage</a>
                <a href="{{ route('store.edit', $data->id)}}" type="button" class="btn btn-dark mr-5 pl-5 pr-5 btn-lg">Edit Profile</a>
                <form action="{{ route('store.destroy', $data->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-dark mr-5 pl-5 pr-5 btn-lg" type="submit">Delete Store</button>
                </form>
            </div>
        </div>
    </div>
@endsection
