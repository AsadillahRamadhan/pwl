@extends('layouts.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">

    <a href="{{url('keluarga/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Keluarga</th>
          <th>Status</th>
          <th>Tanggal Lahir</th>
        </tr>
      </thead>
      <tbody>
        @if($family->count() > 0)
          @foreach($family as $i => $f)
            <tr>
              <td>{{++$i}}</td>
              <td>{{$f->nama}}</td>
              <td>{{$f->status}}</td>
              <td>{{$f->tanggal_lahir}}</td>
              <td>
                <!-- Bikin tombol edit dan delete -->
                <a href="{{ url('/keluarga/'. $f->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                <form method="POST" action="{{ url('/keluarga/'.$f->id) }}" >
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