@extends('layouts.master')

@section('title', 'Karyawan')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
        <!-- Main content -->
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- /.card-header -->
                <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data" >
                @method('patch')
                @csrf
                  <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" name="file" class="form-control" id="exampleInputEmail1" value="{{$data->file}}" >
                  </div>
                  <div class="form-group">
                    <label for="namaguru">Nama guru</label>
                    <input type="text" name="namaguru" class="form-control"  value="{{$data->namaguru}}">
                  </div>
                  <div class="form-group">
                    <label for="matapelajaran">Mata Pelajaran</label>
                    <input type="text" name="matapelajaran" class="form-control"  value="{{$data->matapelajaran}}">
                  </div>
                  <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input type="text" name="waktu" class="form-control"  value="{{$data->waktu}}">
                  </div>


                  <button type="submit" class="btn btn-primary">Submit</button>

              </form>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        <!-- /.content -->
      <!-- /.card -->

    </section>
    <!-- /.content -->

  </div>
@endsection 