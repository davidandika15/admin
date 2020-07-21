@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Materi</h1>
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
                <form action="{{ url('/tambah')}}" method="post" enctype="multipart/form-data" >
                  @csrf
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Input Materi Pelajaran</h3>
                    </div>
                    <!-- <label for="customFile">Custom File</label> -->

                      <div class="input-group my-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <input type="file" name="file" id="file" class="form-control" >
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <input type="text" name="namaguru" id="namaguru" class="form-control" placeholder="Nama Guru">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <input type="text" class="form-control" name="matapelajaran" id="matapelajaran" placeholder="Mata Pelajaran">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"></span>
                        </div>
                        <input type="text" class="form-control" name="waktu" id="waktu" placeholder="Waktu">
                      </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-info">Submit</button>
                      <a href="index.php" class="btn btn-danger float-right">Cancel</a>
                    </div>
                  </div>
                  <!-- /.card -->
                </form>
              <!-- /.card -->
            </div>
          <!-- /.row -->
        <!-- /.content -->
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

  @endsection