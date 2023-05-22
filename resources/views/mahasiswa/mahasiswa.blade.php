@extends('layouts.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">

    <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Foto</th>
          <th>JK</th>
          <th>HP</th>
          <th>Kelas</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @if($mhs->count() > 0)
          @foreach($mhs as $i => $m)
            <tr>
              <td>{{++$i}}</td>
              <td>{{$m->nim}}</td>
              <td>{{$m->nama}}</td>
              <td><img src="{{ $m->foto }}" alt="" width="100px" height="100px" style="overflow: hidden"></td>
              <td>{{$m->jk}}</td>
              <td>{{$m->hp}}</td>
              <td>{{ $m->kelas->nama_kelas }}</td>
              <td>
                <!-- Bikin tombol edit dan delete -->
                <a href="{{ url('/mahasiswa/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                <form method="POST" action="{{ url('/mahasiswa/'.$m->id) }}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                </form>
                <a href="{{ url('/mahasiswa/'. $m->id . '/khs') }}" class="btn btn-sm btn-primary">nilai</a>
              </td>
            </tr>
          @endforeach
        @else
          <tr><td colspan="8" class="text-center">Data tidak ada</td></tr>
        @endif
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
@endsection