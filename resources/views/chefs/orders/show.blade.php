@extends('chefs/layout')

@section('content')

<!-- Layout Content Start-->
<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between mt-2 mr-2">
            <h1 class=" mb-3">Manage Orders</h1>
            <!-- Add Back Button -->
            <a href="{{ url()->previous() }}" title='back'><Button class="btn btn-sm mt-2" style="background-color: #4A6FDC; color: #fff;"><i class="fas fa-backward"></i></Button></a>
        </div>

        <div class="d-flex justify-content-between mt-2 mr-2">
            <h1 class=" mb-3"></h1>
            <!-- Add Back Button -->
            <a href="{{ url()->previous() }}" title='back'><Button class="btn btn-sm mt-2" style="background-color: #4A6FDC; color: #fff;">Accept</Button></a>
        </div>

        <b>Customer Name : </b> {{ $orders[0]->customer->fullname }} &nbsp&nbsp&nbsp
        <b>Order Date : </b> {{ $orders[0]->created_at }} &nbsp&nbsp&nbsp
        <b>Location : </b> {{ $orders[0]->customer->location }} 
        <br><br>

        <!-- Datatable -->
        <div class="card mb-4">
            <div class="card-body table-responsive">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Dish Name</th>
                            <th>Day</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($order_details as $detail)
                        <tr>
                            <td style="color: #383737;">{{ $loop->index + 1 }}</td>
                            <td style="color: #383737;">{{ $detail->dish->dish_name }}</td>
                            <td style="color: #383737;">{{ $detail->day }}</td>
                            <td style="color: #383737;">{{ $detail->qty }}</td>                           
                            <td style="color: #383737;">{{ $detail->dish->price }}</td>                           
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection