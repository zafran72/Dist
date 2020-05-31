@extends('main')

@section('title', 'Update Storage | Dist')

@section('content')
    <div class="row">        
        <form class="forms bg-light col-md-12 mx-auto mt-5" method="POST" action="">
            {{ csrf_field() }}         
            <div class="form-group col-10 mt-5 mx-auto">
                <h4 class="mx-auto" style="width:250px">Update Your Storage</h4>
            </div>
            <div class="form-group col-10 mx-auto"">
              @csrf
              <label for="animal">Choose Animal:</label>
              <select name="animal" id="animal" class="form-control">
                <option value="">Choose Animal</option>
                <option value="Ayam">Ayam</option>
                <option value="Domba">Domba</option>
                <option value="Kambinh">Kambing</option>
                <option value="Sapi">Sapi</option>
              </select>
            </div>
            <div class="form-group col-10 mx-auto">
                <label>Price</label>
                <input type="price" class="form-control form-control-sm" name="password" autocomplete="off" required>
            </div> 
            <div class="form-group col-10 mx-auto">
                <label>Age</label>
                <input type="age" class="form-control form-control-sm" name="password1" autocomplete="off" required>
            </div>       
            <div class="form-group col-10 mx-auto">
                <label>Weight</label>
                <input type="weight" class="form-control form-control-sm" name="password1" autocomplete="off" required>
            </div>       
            <div class="form-group col-10 mx-auto">              
                <label>Image</label><br/>
				<input type="file" name="file">
			</div>  
            <div class="form-group col-10 mx-auto">                                    
                <button type="submit" class="btn btn-dark btn-block" name="sign up">Upload</button>
            </div>
        </form>
    </div>
@endsection