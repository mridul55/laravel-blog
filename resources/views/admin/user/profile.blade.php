@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{ route('user.index')}}">user List/</li>
              <li class="breadcrumb-item active"> User Profile </li>
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
                        <!-- <h3 class="card-title">Create user </h3> -->
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Go Back To user List</a>
                    </div>
                </div>
                
                   <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <form action="{{ route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @include('includes.error')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name">User Name</label>
                                                    <input type="name" class="form-control" name="name" id="name" 
                                                    placeholder="Enter user Name" value="{{ $user->name}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="email">User email</label>
                                                  <input type="email" class="form-control" name="email" id="email" 
                                                  placeholder="Enter email" value="{{ $user->email}}">
                                              </div>
                                              <div class="form-group">
                                                <label for="password">User password<small class="text-info">Enter password if you want to change</small></label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter  password">
                                            </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Image">User Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                </div>

                                              <div class="form-group">
                                                <label for="description">User Description</label>
                                                <textarea name="description" id="description"  rows="5" class="form-control"
                                                placeholder="Write your profile description">{{ $user->description}}</textarea>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <!-- /.card-body -->

                                    <div class="card-footer" >
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="height: 200px; width:200px; overflow:hidden">
                                            <img src="{{ asset($user->image) }}" alt="" class="img-fluid rounded-circle img-rounded">
                                        </div>
                                        <div class="mt-2">
                                            <h5>{{ $user->name }}</h5>
                                            <p>{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </div>
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