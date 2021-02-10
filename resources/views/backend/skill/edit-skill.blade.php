@extends('backend.layouts.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage skill</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">skill</li>
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
                        Edit skill
                        <a class="btn btn-success float-right btn-sm"  href="{{ route('skills.view') }}"><i class="fa fa-list"></i> skill List</a>
                    </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('skills.update',$editData->id) }}" method="post" id="myForm" enctype="multipart/form-data">
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
                            <label for="experience">Experience</label>
                            <input type="text" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}" name="experience" value="{{ $editData->experience }}" placeholder="Experience">
                            @if ($errors->has('experience'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="project_completed">Project Completed</label>
                            <input type="text" class="form-control{{ $errors->has('project_completed') ? ' is-invalid' : '' }}" name="project_completed" value="{{ $editData->project_completed }}" placeholder="Project Completed">
                            @if ($errors->has('project_completed'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('project_completed') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="hours_of_coding">Hours of Coding</label>
                            <input type="text" class="form-control{{ $errors->has('hours_of_coding') ? ' is-invalid' : '' }}" name="hours_of_coding" value="{{ $editData->hours_of_coding }}"  placeholder="hours_of_coding">
                            @if ($errors->has('hours_of_coding'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hours_of_coding') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="awesome_clients">Awesome Clients</label>
                            <input type="text" class="form-control{{ $errors->has('awesome_clients') ? ' is-invalid' : '' }}" name="awesome_clients" value="{{ $editData->awesome_clients }}" placeholder="Awesome Clients">
                            @if ($errors->has('awesome_clients'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('awesome_clients') }}</strong>
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
