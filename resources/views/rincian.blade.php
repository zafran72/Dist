@extends('main')

@section('title', 'Dist | Rincian')

@section('content')
<div class="bg-light col mx-auto mt-5 p-5">
    <h1 class="text-center font-weigt-bold mb-5">Rincian Pesanan</h1>    
    <!-- MESSAGE -->
    <div class="card mb-3 text-dark" style="border-color:black">        
        <div class="card-body p-5">                                  
        <div class="row text-justify">
                <label class="card-text col-2 p-0">Nama</label>
                <p class="card-text col-10 p-0">: Souma</p>
            </div>
            <div class="row text-justify">
                <label class="card-text col-2 p-0">Pesanan</label>
                <p class="card-text col-10 p-0">: Sapi</p>
            </div>
            <div class="row text-justify">
                <label class="card-text col-2 p-0">Jumlah pesanan</label>
                <p class="card-text col-10 p-0">: 1 ekor</p>
            </div>
            <div class="row text-justify">
                <label class="card-text col-2 p-0">Lokasi</label>
                <p class="card-text col-10 p-0">: dimana (penting ga sih)</p>
            </div>            
            <div class="row text-justify">
                <label class="card-text col-2 p-0">No. telp</label>
                <p class="card-text col-10 p-0">: 085-XXX</p>
            </div>                                            
        </div>
    </div>
    <!-- END OF MESSAGE -->
</div>
@endsection 