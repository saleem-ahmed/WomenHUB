@extends('chefs/layout')

@section('content')

<!-- Layout Content Start-->
<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between mt-2 mr-2">
            <h1 class=" mb-3">Manage Dishes</h1>
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
                        <h4 class="modal-title">Please enter your dish details</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('dish.store')}}">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Dish Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="dish_name" id="dish_name" class="form-control" />
                                        @if ($errors->has('dish_name'))
                                          <span class="text-danger">{{ $errors->first('dish_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                <label class="col-sm-3 control-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="category" id="category">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image" name="image">
                                        @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Price</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="price" id="price" class="form-control" />
                                        @if ($errors->has('price'))
                                          <span class="text-danger">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                        @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                            <button type="reset" name="reset" id="reset" class="btn btn-dark btn-flat m-b-30 m-t-30">Reset</button>

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
                            <th>Dish Name</th>
                            <!-- <th>Category Name</th> -->
                            <th>Image</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Is Free</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dishes as $dish)
                        <tr>
                            <td style="color: #383737;">{{ $loop->index + 1 }}</td>
                            <td style="color: #383737;">{{ $dish->dish_name }}</td>
                            <!-- <td style="color: #383737;">{{ $dish->category_name }}</td> -->
                            <td style="color: #383737;"><img height="120px" width="200" src="{{ asset('uploads/dishImages') }}/{{ $dish->image }}"></td>
                            <td style="color: #383737;">{{ $dish->description }}</td>
                            <td style="color: #383737;">Rs {{ $dish->price }}</td>
                            <td style="color: #383737;">@if($dish->is_free) == 0 { "No" } @endif</td>
                            <td class="d-flex justify-content-end">
                                <a href=""><button type="button" class="btn btn-sm" style="background-color: #5a5c69; color:#fff;"><i class="fas fa-eye"></i></button></a>
                                <a href=""><button type="button" class="btn btn-sm ml-1" style="background-color: #5a5c69; color:#fff;"><i class="fas fa-edit"></i></button></a>
                                <form class="ml-1" action="" method="POST"> 
                                    @csrf
                                  <button type="submit" class="btn btn-sm" style="background-color: #e74a3b; color:#fff;" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button>
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