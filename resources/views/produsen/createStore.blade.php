@extends('main')

@section('title', 'Create Store | Dist')

@section('content')
    <div class="row">
        <form class="forms bg-light col-md-5 mx-auto mt-2" method="POST" action="">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-3 mx-auto">
                <h4 class="mx-auto" style="font-size:35px;width:290px">Create Your Store</h4>
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



