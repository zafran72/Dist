@extends('main')

@section('title', 'Login Pedagang')

@section('content')
    <div class="row">
        <form class="forms bg-light col-md-5 mx-auto mt-5" method="POST" action="">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-5 mx-auto">
                <h4 class="mx-auto text-center">Login Pedagang</h4>
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
                <button type="submit" class="btn btn-dark btn-block" name="login">Login</button>
            </div>
            <div class="form-group col-10 mx-auto mb-5">  
            <p>Didn't Have Account? <a href="{{ url('/pedagang/signup') }} " role="button"> Sign up <a></p>                                                   
            </div>
        </form>
    </div>
@endsection


