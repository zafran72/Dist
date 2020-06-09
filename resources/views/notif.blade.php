@extends('main')

@section('title', 'Dist | Notifikasi')

@section('content')
<div class="bg-light col mx-auto mt-5 p-5">
    <h1 class="text-center font-weigt-bold mb-5">Notifikasi</h1>
    
    <!-- NOTIFICATION -->
    <a href="/notifikasi/rincian" class="btn btn-outline-dark col mb-3">        
        <div class="card-body p-4">  
            <div class="row text-justify">                                
                <h5>Anda mendapatkan pesanan</h5> 
                <p class="card-text col-10 p-0">Souma memesan barang kepada anda</p>                
            </div>
        </div>
    </a>
    <a href="/notifikasi/rincian" class="btn btn-outline-dark col mb-3">        
        <div class="card-body p-4">  
            <div class="row text-justify">                                
                <h5>Anda mendapatkan pesanan</h5> 
                <p class="card-text col-10 p-0">Erina memesan barang kepada anda</p>                
            </div>
        </div>
    </a>
    <a href="/notifikasi/rincian" class="btn btn-outline-dark col mb-3">        
        <div class="card-body p-4">  
            <div class="row text-justify">                                
                <h5>Anda mendapatkan pesanan</h5> 
                <p class="card-text col-10 p-0">Jouichiro memesan barang kepada anda</p>                
            </div>
        </div>
    </a>
    <!-- END OF NOTIFICATION -->

    <!-- EMPTY NOTIF -->    
    <!-- <div class="card bg-light text-secondary" style="border:none;">
        <img src="../assets/img/emptyNotif.svg" class="rounded mx-auto d-block" style="width:400px" alt="nonotif">
        <div class="card-img-overlay row">
            <div class="col align-self-start">
                <h4 class="card-title text-center">Oops...</h4>            
                <h5 class="card-title text-center">Tidak Ada Pemberitahuan Hari ini</h5>            
            </div>            
        </div>
    </div>  -->
    <!-- END OF EMPTY NOTIF -->
    
</div>
@endsection 