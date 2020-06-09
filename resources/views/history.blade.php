@extends('main')

@section('title', 'History')

@section('content')
    <div class="jumbotron bg-white mt-5">
        <h4 class="mx-auto" style="font-size:35px;width:100px">History</h4>
        

                    
            <table class="table mt-5">
                 <tbody><tr><th>Date </th>
                 <th>Payment Code </th>
                 <th>Item </th>
                 <th>Quantity </th>
                 <th>Price </th>
                 <th>Total </th></tr>

                 <tr><td>22/02/2020</td>
                 <td>SPI0001</td>
                 <td>Sapi</td>
                 <td>1</td>
                 <td>Rp 18.000.000,-</td>
                 <td>Rp 18.000.000,-</td></tr>

                 <tr><td>20/03/2020</td>
                 <td>KBG0002</td>
                 <td>Kambing</td>
                 <td>2</td>
                 <td>Rp 6.000.000,-</td>
                 <td>Rp 12.000.000,-</td></tr>

                 <tr><td>15/04/2020</td>
                 <td>UNT0003</td>
                 <td>Unta</td>
                 <td>1</td>
                 <td>Rp 22.000.000,-</td>
                 <td>Rp 22.000.000,-</td></tr>

                 <tr><td>28/05/2020</td>
                 <td>AYM0004</td>
                 <td>Ayam</td>
                 <td>100</td>
                 <td>Rp 30.000,-</td>
                 <td>Rp 3.000.000,-</td></tr>
                 </tbody></table>
          </div>
    </div> 
@endsection