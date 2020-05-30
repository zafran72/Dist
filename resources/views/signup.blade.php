@extends('main')

@section('title', 'Sign Up Dist')

@section('content')
    <div class="row">        
        <form class="forms bg-light col-md-5 mx-auto mt-5" method="POST" action="">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-4 mx-auto">
                <h4 class="mx-auto" style="width:130px">Sign Up</h4>
            </div>
            <div class="form-group col-10 mx-auto">
                <label>Username</label>
                <input type="text" class="form-control form-control-sm" name="username" autocomplete="off" required>            
            </div>
            <div class="form-group col-10 mx-auto">
                <label>Password</label>
                <input type="password" class="form-control form-control-sm" name="password" autocomplete="off" required>
            </div> 
            <div class="form-group col-10 mx-auto">
                <label>Confirm Password</label>
                <input type="password" class="form-control form-control-sm" name="password1" autocomplete="off" required>
            </div>                
            <div class="form-group col-10 mx-auto">                                    
                <button type="submit" class="btn btn-dark btn-block" name="sign up">Sign Up</button>
            </div>
            <div class="form-group col-10 mx-auto mb-4">  
                <p class="">By signing up you agree to our Terms and Conditions</p>                                                   
            </div>
        </form>
    </div>
@endsection 