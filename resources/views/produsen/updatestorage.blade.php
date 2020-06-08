@extends('main')

@section('title', 'Update Storage')

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
        <form class="forms bg-light col-md-12 mx-auto mt-5" method="POST" action="{{ route('storage.store') }}">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-5 mx-auto">
                <h4 class="mx-auto" style="width:250px">Update Your Storage</h4>
            </div>
            <div class="form-group col-10 mx-auto"">
              @csrf
              <label for="animal">Choose Animal:</label>
              <select name="animal" id="animal" class="form-control">
                <option value="">Choose Animal</option>
                <option value="Ayam">Ayam</option>
                <option value="Domba">Domba</option>
                <option value="Kambinh">Kambing</option>
                <option value="Sapi">Sapi</option>
              </select>
            </div>
            <div class="form-group col-10 mx-auto">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" autocomplete="off" required>
            </div> 
            <div class="form-group col-10 mx-auto">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age" autocomplete="off" required>
            </div>       
            <div class="form-group col-10 mx-auto">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" name="weight" autocomplete="off" required>
            </div>       
            <div class="form-group col-10 mx-auto">
                <label for="image">Image</label><br/>
                <input type="file" name="image">
                @if($errors->has('image'))
                    <div class="text-danger">
                        {{ $errors->first('image')}}
                    </div>
                @endif
            </div>
            <div class="form-group col-10 mx-auto">                                    
                <button type="submit" class="btn btn-dark btn-block" name="sign up">Upload</button>
            </div>
        </form>
    </div>
@endsection