@extends('layout.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
      <div class="card-header">
                <h3 class="card-title">Product List</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i> Add Product</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Name</th>
                      <th>Quality</th>
                      <th>Colour</th>
                      <th>Thickness</th>
                      <th>Size</th>
                      <th>Price</th>
                      <th>Last Updated</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($listUser as $data)
                        <tr>
                        <td>{{ $data->id  }}</td>
                        <td>{{ $data->name  }}</td>
                        <td>{{ $data->quality  }}</td>
                        <td>{{ $data->colour  }}</td>
                        <td>{{ $data->thickness  }}</td>
                        <td>{{ $data->size  }}</td>
                        <td>{{"Rp.".number_format($data->price)}}</td>
                        <td>{{ $data->updated_at}}</td>
                        <td>
                            <img src="https://storage.googleapis.com/easychicb/public/images/{{ $data->image }}" alt="Product Image" width="50">
                        </td>
                        <!-- <td>
                            <img src="{{ asset('public/images/' . $data->image) }}" alt="Product Image" width="50">
                        </td> -->
                        <td>
                        <a href="#">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        /
                        <a href="#">
                            <i class="fa fa-trash red"></i>
                        </a>
                        </td>
                        
                        </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form method="POST" action="{{ route('product.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="name">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="category_id">
                          <option value="1">option 1</option>
                          <option value="1">option 2</option>
                          <option value="1">option 3</option>
                          <option value="1">option 4</option>
                          <option value="1">option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Colour</label>
                        <input type="text" class="form-control" placeholder="Enter Colour" name="colour">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter Product Description ..." name="description"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Quality</label>
                        <input type="text" class="form-control" placeholder="Enter Quality" name="quality">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Size</label>
                        <input type="text" class="form-control" placeholder="Enter Size" name="size">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Thickness</label>
                        <input type="text" class="form-control" placeholder="Enter Thickness" name="thickness">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter Price" name="price">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
