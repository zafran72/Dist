@extends('main')

@section('title', 'Create Store | Dist')

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
        <form class="forms bg-light col-md-5 mx-auto mt-5" method="POST" action="{{ route('store.store') }}">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-3 mx-auto">
                <h4 class="mx-auto" style="font-size:35px;width:290px">Create Your Store</h4>
            </div>
            <div class="form-group col-9 mx-auto">
                <label for="store_name">Store Name</label>
                <input type="text" class="form-control form-control-sm" name="store_name" autocomplete="off" required> 
            </div>  
            <div class="form-group col-9 mx-auto">           
                <label for="address">Address</label>
                <input type="text" class="form-control form-control-sm" name="address" autocomplete="off" required>  
            </div>  
            <div class="form-group col-9 mx-auto">                          
                <label for="phone_number">Phone Number</label>
                <input type="tel" class="form-control form-control-sm" name="phone_number" autocomplete="off" required>                                                                                                                
            </div>   
            <div class="form-group col-9 mx-auto">
                <label for='image'>Image Store</label><br/>
                <input type="file" name="image">
                @if($errors->has('image'))
                    <div class="text-danger">
                        {{ $errors->first('image')}}
                    </div>
                @endif
            </div>
            <div class="form-group col-9 mx-auto">
                <button type="submit" class="btn btn-dark btn-block" name="createStore">Create</button>
            </div>
            <div class="form-group col-10 mx-auto mb-4">  
                <p class="text-center">By Create store you agree to our Terms and Conditions</p>                                                   
            </div>
        </form>                           
    </div>
    <!-- <script>
    // Add the following code if you want the name of the file appear on select
    // tambah di js
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script> -->
@endsection



