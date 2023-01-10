@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Tag</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{ route('tag.index')}}">Tag List/</li>
              <li class="breadcrumb-item active"> Create Tag </li>
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
                        <!-- <h3 class="card-title">Create tag </h3> -->
                        <a href="{{ route('tag.index') }}" class="btn btn-primary">Go Back To tag List</a>
                    </div>
                </div>
                
                   <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('tag.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                    @include('includes.error')
                                    <div class="form-group">
                                        <label for="name">Tag Name</label>
                                        <input type="name" class="form-control" name="name" id="name" placeholder="Enter tag Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description"  rows="4" class="form-control" placeholder="Enter Description"></textarea>
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