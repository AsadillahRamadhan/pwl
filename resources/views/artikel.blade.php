@extends('layouts.template')
@section('content')
<div style="margin-left: 300px;">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Tabel Artikel</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th>Tanggal Terbit</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($artikels as $artikel)
                    <tr>
                      <td>{{ $artikel->id }}</td>
                      <td>{{ $artikel->judul }}</td>
                      <td>{{ $artikel->penulis }}</td>
                      <td>{{ $artikel->tanggal_terbit }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4 d-flex justify-content-end">
              {{ $artikels->links() }}
            </div>
            
</div>
@endsection

