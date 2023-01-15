@extends('layouts.admin')

@section('content')
<div class="content-header">
     <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Setting List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('website')}}">Home</a></li>
                <li class="breadcrumb-item active">Setting</li>
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
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Setting List</h3>
                            <a href="{{ route('setting.create') }}" class="btn btn-primary">Create Setting</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($settings->count())
                            @foreach ($settings as $setting)
                                    <tr>
                                        <td>{{$setting->id }}</td>
                                        <td>
                                            <div style="max-width: 70px; max-height:70px; overflow:hidden">
                                            <img src="{{ asset($setting->image)}}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                                        <td>{{$setting->name}}</td>
                                        <td>{{$setting->email}}</td>
                                        <td>{{$setting->phone}}</td>
                                        <td>{{$setting->address}}</td>
                                        <td class="d-flex">
                                          <a href="{{ route('setting.edit',[$setting->id])}}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                          <form action="{{ route('setting.destroy', [$setting->id])}}" class="mr-1" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                          </form>
                                          
                                          <!-- <a href="{{ route('setting.show', [$setting->id])}}" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a> -->
                                        </td>
                                        
                                    </tr>
                                    @endforeach 
                                    @else
                                        <tr>
                                            <td colspan="5">
                                            <h5 class="text-center">Setting Not Found</h5>
                                            </td>
                                        </tr>
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection