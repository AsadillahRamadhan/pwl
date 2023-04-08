@extends('layouts.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">

    <a href="{{url('matkul/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Matkul</th>
          <th>Dosen Pengajar</th>
          <th>Hari</th>
        </tr>
      </thead>
      <tbody>
        @if($matkuls->count() > 0)
          @foreach($matkuls as $i => $m)
            <tr>
              <td>{{++$i}}</td>
              <td>{{$m->nama_matkul}}</td>
              <td>{{$m->nama_dosen}}</td>
              <td>{{$m->hari}}</td>
              <td>
                <!-- Bikin tombol edit dan delete -->
                <a href="{{ url('/matkul/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                <form method="POST" action="{{ url('/matkul/'.$m->id) }}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        @else
          <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
        @endif
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
@endsection