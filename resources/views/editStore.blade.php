@extends('main')

@section('title', 'Edit Store | Dist')

@section('content')
    <div class="row">
        <form class="forms bg-light col-md-5 mx-auto mt-4" method="POST" action="">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-3 mx-auto">
                <h4 class="mx-auto" style="font-size:35px;width:270px">Edit Store Profile</h4>
            </div>
            <div class="form-group col-9 mx-auto">
                <label>Store Name</label>
                <input type="text" class="form-control form-control-sm" name="username" autocomplete="off" required>            
                <label>Address</label>
                <input type="text" class="form-control form-control-sm" name="address" autocomplete="off" required>                            
                <label>Phone Number</label>
                <input type="tel" class="form-control form-control-sm" name="phone" autocomplete="off" required>                                                                                                                
            </div>   
            <div class="col-9 mx-auto">              
                <label>Image Store</label>
            </div>
            <div class="form-group col-8 mx-auto">                
                <input type="file" class="custom-file-input" id="customFile" name="filename">
                <label class="custom-file-label" for="customFile">Choose Image</label>
            </div>
            <div class="form-group col-9 mb-4 mx-auto">                                    
                <button type="submit" class="btn btn-dark btn-block" name="EditStore">Edit</button>
            </div>           
        </form>
    </div>
@endsection



