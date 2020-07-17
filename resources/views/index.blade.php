@extends('layouts.master')

@section('title', 'Karyawan')

@section('content')

@include('sweetalert::alert')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pegawai</h1>
          </div>
          <div class="col-sm-6 my-2">
              <ol class="breadcrumb float-sm-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  <a href="/tambah" class="btn btn-primari">Tambah</a>
                </button>
              </ol>
            </div><!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Guru</th>
          <th scope="col">Materi</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Waktu</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0; ?>
          @foreach($data as $datas)
        <?php $i++; ?>
          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $datas->namaguru }}</td>
            <td>
              <a href="{{url('file/' . $datas->file)}}" ><div class="text-primary">Buka File</div> </a>
            </td>
            <td>{{ $datas->matapelajaran }}</td>
            <td>{{ $datas->waktu }}</td>
            <td>
              <a href="edit/{{ $datas->id }} ">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit" data-whatever="@fat"><i class="fad fa-edit"></i></button>
              </a>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                <i class="fad fa-trash-alt"></i>
                </button>

              <!-- Modal -->
              <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus...?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <form method="POST" class="d-inline" action="delete/{{ $datas->id }}">
                          @csrf
                          <input type="hidden" value="DELETE" name="_method">
                          <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <!-- /.content -->
  </div>

@endsection

