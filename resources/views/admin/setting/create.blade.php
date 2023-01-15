@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Setting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="{{ route('setting.index')}}">setting List/</li>
                    <li class="breadcrumb-item active"> Setting </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-item-center">
                            <!-- <h3 class="card-title">Create setting </h3> -->
                            <a href="{{ route('setting.index') }}" class="btn btn-primary">Go Back To setting List</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action=" {{ route('setting.store')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Site Name</label>
                                            <input type="name" class="form-control" name="name"
                                                 placeholder="Enter Insert setting name">
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="logo">Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input"
                                                            id="image">
                                                        <label class="custom-file-label" for="logo">Choise file</label>
                                                    </div>
                                                </div>
                                            </div>
                                           

                                        </div>


                                        <div class="form-group">
                                            <label for="description">Site Description</label>
                                            <textarea name="description" id="description" rows="3" class="form-control"
                                                placeholder="Enter Description"></textarea>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="twiter">Site twiter</label>
                                              <input type="twiter" class="form-control" name="twiter"
                                                   placeholder=" twiter URL">
                                          </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="facebook">Site facebook</label>
                                              <input type="facebook" class="form-control" name="facebook"
                                                   placeholder=" facebook URL">
                                          </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="instragram">Site instragram</label>
                                              <input type="instragram" class="form-control" name="instragram"
                                                   placeholder=" instragram URL">
                                          </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="reddit">Site reddit</label>
                                              <input type="reddit" class="form-control" name="reddit"
                                                   placeholder="Reddit URL">
                                          </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="email">Site email</label>
                                              <input type="email" class="form-control" name="email"
                                                   placeholder="Email ">
                                          </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="copyroght">Site copyroght</label>
                                              <input type="copyroght" class="form-control" name="copyroght"
                                                   placeholder=" copyroght URL">
                                          </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="copyroght">Contact phone Number</label>
                                              <input type="phone" class="form-control" name="phone"
                                                   placeholder=" phone Number">
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="form-group">
                                              <label for="copyroght">Contact address Number</label>
                                              <input type="address" class="form-control" name="address"
                                                   placeholder=" address Number">
                                            </div>
                                          </div>

                                       

                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
</div>

</div>

@endsection


