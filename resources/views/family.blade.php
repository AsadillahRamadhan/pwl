@extends('layouts.template')
@section('content')
@php
    $id = 1;
@endphp
<div style="margin-left: 300px;">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Tabel Keluarga</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Tanggal Lahir</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($families as $family)
                    <tr>
                      <td>{{ $id++ }}</td>
                      <td>{{ $family->nama }}</td>
                      <td>{{ $family->status }}</td>
                      <td>{{ $family->tanggal_lahir }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
@endsection