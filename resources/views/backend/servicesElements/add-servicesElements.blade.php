@extends('backend.layouts.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Service Event </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service Event </li>
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
                        Add Service Event
                        <a class="btn btn-success float-right btn-sm"  href="{{ route('servicesElements.view') }}"><i class="fa fa-list"></i> Service Event List</a>
                    </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('servicesElements.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="heading">Service Event Heading</label>
                            <input type="text" class="form-control{{ $errors->has('heading') ? ' is-invalid' : '' }}" name="heading" value="{{ old('heading') }}" placeholder="heading">
                            @if ($errors->has('heading'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('heading') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="form-group col-md-12">
                            <label for="meta_descriptions">Service Event Meta Descriptions</label>
                            <textarea class="form-control{{ $errors->has('meta_descriptions') ? ' is-invalid' : '' }}" name="meta_descriptions" id="" cols="30" rows="5">{{ old('meta_descriptions') }}</textarea>
                            @if ($errors->has('meta_descriptions'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('meta_descriptions') }}</strong>
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
