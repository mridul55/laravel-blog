@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{ route('contact.index')}}">Message List/</li>
              {{-- <li class="breadcrumb-item active"> Edit contact-- {{ $contact->name}} </li> --}}
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
                        <!-- <h3 class="card-title">Create contact </h3> -->
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">Go Back To Messageg List</a>
                    </div>
                </div>
                
                   <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="" method="POST">
                                    @csrf
                                   
                                    <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="name" class="form-control" name="name" value="{{ $contact->name}}"
                                        >
                                    </div>
                                    <div class="form-group">
                                      <label for="email"> Email</label>
                                      <input type="email" class="form-control" name="email" value="{{ $contact->email}}"
                                       >
                                  </div>
                                  <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="subject" class="form-control" name="subject" value="{{ $contact->subject}}"
                                   >
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <input type="message" class="form-control" name="message" value="{{ $contact->message}}"
                                     >
                                </div>
                                
                                    </div>
                                    <!-- /.card-body -->

                                    {{-- <div class="card-footer">
                                    <button type="submit" class="btn btn-md btn-primary">Update contact</button>
                                    </div> --}}
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