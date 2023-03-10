@extends('layouts.template')
@section('content')
<div style="margin-left: 300px;">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Tabel Mata Kuliah</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Matkul</th>
                      <th>Nama Dosen</th>
                      <th>Hari</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($matkuls as $matkul)
                    <tr>
                      <td>{{ $matkul->id }}</td>
                      <td>{{ $matkul->nama_matkul }}</td>
                      <td>{{ $matkul->nama_dosen }}</td>
                      <td>{{ $matkul->hari }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
@endsection