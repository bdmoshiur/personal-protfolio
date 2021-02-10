@extends('backend.layouts.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage About </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                    <h3>
                        Edit About
                        <a class="btn btn-success float-right btn-sm"  href="{{ route('abouts.view') }}"><i class="fa fa-list"></i> About List</a>
                    </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('abouts.update',$editData->id) }}" method="post" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="heading">Heading</label>
                            <input type="text" class="form-control{{ $errors->has('heading') ? ' is-invalid' : '' }}" name="heading" value="{{ $editData->heading }}" placeholder="Heading">
                            @if ($errors->has('heading'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('heading') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="title">Title</label>
                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $editData->title }}" placeholder="Title">
                        @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}" name="meta_title" value="{{ $editData->meta_title }}" placeholder="Meta Title">
                            @if ($errors->has('meta_title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('meta_title') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $editData->email }}" placeholder="Email">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="address">Address</label>
                            <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $editData->address }}" placeholder="Address">
                            @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $editData->phone }}" placeholder="Phone">
                            @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ $editData->date_of_birth }}" placeholder="Date of Birth">
                            @if ($errors->has('date_of_birth'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('date_of_birth') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ $editData->facebook }}" placeholder="Facebook">
                            @if ($errors->has('facebook'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('facebook') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ $editData->twitter }}" placeholder="Twitter">
                            @if ($errors->has('twitter'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('twitter') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin" value="{{ $editData->linkedin }}" placeholder="Linkedin">
                            @if ($errors->has('linkedin'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('linkedin') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-12">
                            <label for="descriptions">Descriptions</label>
                            <textarea class="form-control{{ $errors->has('descriptions') ? ' is-invalid' : '' }}" name="descriptions" id="" cols="30" rows="5">{{ $editData->descriptions }}</textarea>
                            @if ($errors->has('descriptions'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descriptions') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image">Image</label>
                              <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="image" accept="image/*">
                              @if ($errors->has('image'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('image') }}</strong>
                              </span>
                          @endif
                          </div>
                        <div class="form-group col-md-4" style="padding-top: 30px">
                            <input type="submit" class="btn btn-primary" value="Submit" >
                        </div>
                    </div>
                </form>
              </div><!-- /.card-body -->
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection
