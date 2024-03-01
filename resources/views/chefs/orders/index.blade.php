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

        <!-- Datatable -->
        <div class="card mb-4">
            <div class="card-body table-responsive">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Order Date</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td style="color: #383737;">{{ $loop->index + 1 }}</td>
                            <td style="color: #383737;">{{ $order->created_at }}</td>
                            <td style="color: #383737;">{{ $order->customer->fullname }}</td>
                            <td style="color: #383737;">{{ $order->customer->email }}</td>
                            <td style="color: #383737;">{{ $order->customer->phone  }}</td>
                            <td class="d-flex justify-content-end">
                                <a href="{{ url('chef/orders/show') }}/{{ $order->id  }} "><button type="button" class="btn btn-xs" style="background-color: #5a5c69; color:#fff;"><i class="fas fa-eye"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection