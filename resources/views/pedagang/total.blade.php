@extends('pedagang/main')

@section('title', 'Total')

@section('content')
<div class="jumbotron bg-white mt-5">
<h4 class="mx-auto" style="font-size:35px;width:85px">Total</h4>
<div class="form-group row mx-auto" style="width:230px">
    <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            <div class="input-group-text" style="width:70px">Sapi</div>
            </div>
            <input type="text" class="form-control col-sm-8" disabled placeholder="1 ekor">
        </div>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            <div class="input-group-text" style="width:70px">Harga</div>
            </div>
            <input type="text" class="form-control col-sm-8" disabled placeholder="Rp 15.000.000,-">
        </div>
    </div>
    <hr>
<div class="form-group row mx-auto" style="width:230px">
    <div class="input-group mb-2 mr-sm-2">
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            <div class="input-group-text" style="width:70px">Total</div>
            </div>
            <input type="text" class="form-control col-sm-8" disabled placeholder="Rp 15.000.000,-">
        </div>
    </div>
  <div class="mx-auto" style="width:85px">
  <a class="btn btn-dark btn-lg" href="{{ route('success') }}" role="button">Pesan</a>
</div>
</div>
@endsection