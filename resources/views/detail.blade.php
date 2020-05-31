@extends('main')

@section('title', 'Detail')

@section('content')

<div class="bg-light col-md-10 mx-auto mt-5">
<h1 class="text-center font-weigt-bold m-4">Details</h1>
    <div class="row">
        
    
            <div class="card mr-4 ml-4" style="width: 15rem;">  
                <img src="images/sapi1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">3 age</p>
                    <p class="card-text">110 kg</p>
                    <p class="card-text">Rp.16.0000.0000</p>
                </div>
            </div>
    

        
            <div class="card mr-4 ml-3" style="width: 16rem;">
                <img src="images/sapi2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">5 age</p>
                    <p class="card-text">150 kg</p>
                    <p class="card-text">Rp.19.0000.0000</p>
                </div>
            </div>
        

        
            <div class="card mr-3 ml-3" style="width: 16rem;">
                <img src="images/sapi3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" class="text-justtify">4 age</p>
                    <p class="card-text">120 kg</p>
                    <p class="card-text">Rp.18.0000.0000</p>
                </div>
            </div>
            <!-- <div class="row justify-content-center mb-5">
            <button type="button" class="btn btn-dark btn-sm">Update</button>
            <button type="button" class="btn btn-dark btn-sm">Profil</button>
            </div> -->
            <div class="mx-auto" style="width: 200px;">
                <a href="{{ url('/edit') }}" class="btn btn-dark ml-10  btn-sm">Update</a>
                <a href="{{ url('/edit') }}" class="btn btn-dark mr-25  btn-sm">Profil</a>
            </div>
            
    </div>
</div>

@endsection