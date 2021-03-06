@extends('backend.layouts.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Backend Skill </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Backend Skill</li>
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
                        Add Backend Skill
                        <a class="btn btn-success float-right btn-sm"  href="{{ route('backends.view') }}"><i class="fa fa-list"></i> Backend Skill List</a>
                    </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('backends.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name">Backend Skill Name</label>
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="name">
                            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="value">Backend Skill Value</label>
                            <input type="text" class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="value" value="{{ old('value') }}" placeholder="value">
                            @if ($errors->has('value'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('value') }}</strong>
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
