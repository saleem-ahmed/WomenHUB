@extends('chefs/layout')

@section('content')

<!-- Layout Content Start-->
<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between mt-2 mr-2">
            <h1 class=" mb-3">Manage Categories</h1>
            <!-- Add Back Button -->
            <a href="{{ url()->previous() }}" title='back'><Button class="btn btn-sm mt-2" style="background-color: #4A6FDC; color: #fff;"><i class="fas fa-backward"></i></Button></a>
        </div>

        <Button class="btn btn-flat mb-2 m-t-5" data-toggle="modal" data-target="#myModal" style="background-color: #4A6FDC; color: #fff;">Add New</Button>

        <!-- Modal Start -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header d-flex">
                        <h4 class="modal-title">Please enter category details</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('category.store')}}">
                            @csrf
                            <div class="form-group mb-2">
                                <input type="text" id="category_name" name="category_name" required class="form-control" placeholder="Please enter category name">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm m-b-30 m-t-30">Submit</button>
                                <button type="reset" name="reset" id="reset" class="btn btn-dark btn-sm m-b-30 m-t-30">Reset</button>
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- model end -->

        <!-- Datatable -->
        <div class="card mb-4">
            <div class="card-body table-responsive">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td style="color: #383737;">{{ $loop->index + 1 }}</td>
                            <td style="color: #383737;">{{ $category->category_name }}</td>
                            <td class="d-flex justify-content-end">
                                <a href=""><button type="button" class="btn btn-xs" style="background-color: #5a5c69; color:#fff;"><i class="fas fa-edit"></i></button></a>
                                <form class="ml-1" action="" method="POST"> 
                                    @csrf
                                  <button type="submit" class="btn btn-xs" style="background-color: #e74a3b; color:#fff;" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button>
                                </form>
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