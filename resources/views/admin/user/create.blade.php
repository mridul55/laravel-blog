@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{ route('user.index')}}">user List/</li>
              <li class="breadcrumb-item active"> Create user </li>
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
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('user.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                    @include('includes.error')
                                    <div class="form-group">
                                        <label for="name">User Name</label>
                                        <input type="name" class="form-control" name="name" id="name" placeholder="Enter user Name">
                                    </div>
                                    <div class="form-group">
                                      <label for="email">User email</label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                    <label for="password">User password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter  password">
                                </div>
                                   
                                
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
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