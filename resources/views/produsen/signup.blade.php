@extends('main')

@section('title', 'Sign Up Produsen')

@section('content')
    <div class="row">        
        <form class="forms bg-light col-md-5 mx-auto mt-5" method="POST" id="regForm">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-4 mx-auto">
                <h4 class="mx-auto text-center" >Sign Up Produsen</h4>
            </div>
            <div class="form-group col-10 mx-auto">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Type your username">
                @if ($errors->has('username'))
                  <span class="error">{{ $errors->first('username') }}</span>
                @endif 
            </div>
            <div class="form-group col-10 mx-auto">
                <label for="email">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control form-control-sm" placeholder="Type your email address" >
                @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                @endif 
            </div>
            <div class="form-group col-10 mx-auto">
                <label for="telepon">Phone</label>
                <input type="text" class="form-control form-control-sm" id="telepon" name="telepon" placeholder="Type your phone number">
                @if ($errors->has('telepon'))
                  <span class="error">{{ $errors->first('telepon') }}</span>
                @endif 
            </div>
            <div class="form-group col-10 mx-auto">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" name="password" placeholder="Type your password" autocomplete="off" required>
                @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                @endif  
            </div> 
            <div class="form-group col-10 mx-auto">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control form-control-sm" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
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