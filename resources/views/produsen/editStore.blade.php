@extends('main')

@section('title', 'Edit Store | Dist')

@section('content')
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form class="forms bg-light col-md-5 mx-auto mt-5" method="POST" action="{{ route('store.update', $datamasuk->id ) }}"> 
            <div class="form-group col-10 mt-3 mx-auto">
                <h4 class="mx-auto" style="font-size:35px;width:270px">Edit Store Profile</h4>
            </div>
            <div class="form-group col-9 mx-auto">
                @csrf
                @method('PATCH')
                <label for='store_name'>Store Name</label>           
                <input type="text" class="form-control" name="store_name" value="{{ $datamasuk->store_name }}" class="form-control form-control-sm">
            </div>  
            <div class="form-group col-9 mx-auto">
                <label for='address'>Address</label>
                <input type="text" class="form-control" name="address" value="{{ $datamasuk->address }}" class="form-control form-control-sm">                          
            </div> 
            <div class="form-group col-9 mx-auto">
                <label for='phone_number'>Phone Number</label>
                <input type="text" class="form-control" name="phone_number" value="{{ $datamasuk->phone_number }}" class="form-control form-control-sm">                                                                                                           
            </div>   
            <div class="col-9 mx-auto">              
                <label for='image'>Image Store</label><br/>
                <input type="file" name="image" value="{{ $datamasuk->image }}">
                @if($errors->has('foto'))
                    <div class="text-danger">
                        {{ $errors->first('image')}}
                    </div>
                @endif
            </div><br />     
            
            <div class="form-group col-9 mx-auto">                                    
                <button type="submit" class="btn btn-dark btn-block" name="EditStore">Edit</button>
            </div>     
            
        </form>
    </div>
@endsection



