@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SD Negeri 1 Pesawahan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- Main content -->
    <section class="content">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <img src="{{ asset('img/sd.png' )}}" class="table-avatar" style=" width: 1100;  height:1100;"  alt="Product Image">
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->

                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>

    </section>
    <!-- /.content -->
  </div>


@endsection