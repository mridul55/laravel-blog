@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{ route('post.index')}}">Post List/</li>
              <li class="breadcrumb-item active"> Create Post </li>
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
                        <!-- <h3 class="card-title">Create post </h3> -->
                        <a href="{{ route('post.index') }}" class="btn btn-primary">Go Back To post List</a>
                    </div>
                </div>
                
                   <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                    @include('includes.error')
                                   
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="name" class="form-control" name="title" value="{{ old('title')}}"
                                        placeholder="Enter Insert Post Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <select name="category" id="category" class="form-control" value="{{ old('category')}}">
                                          <option value="" style="display:none" selected>Select Category</option>
                                          @foreach($categories as $c)
                                        <option value="{{ $c->id }}">{{ $c-> name}}</option>
                                        @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                    
                                       <label for="image">Image</label>
                                          <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Choise file</label>
                                          </div>
                                    </div>
                                  
                                  
                                    <div class="form-group d-flex flex-warp">
                                      @foreach($tags as $tag)
                                      <div class="custom-control custom-checkbox" style="margin-right:20px">
                                          <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{$tag->id }}"
                                           value="{{$tag->id }}">
                                          <label for="tag{{$tag->id }}" class="custom-control-label">{{ $tag->name }}</label>
                                      </div>
                                      @endforeach
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description"  rows="4" class="form-control"
                                         placeholder="Enter Description">{{ old('description')}}</textarea>
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

@section('style')
<link rel="stylesheet" href="{{ asset('admin') }}/css/summernote-bs4.min.css">
@endsection

@section('script')
  <script src="{{ asset('/admin/js/summernote-bs4.min.js') }}"></script>
  <script>
      $('#description').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection
