@extends('layouts.template')
@section('content')

<div style="margin-left: 300px; margin-top:10px;">
    <a href="{{url('hobi/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
</div>

<div>
    
    <canvas id="hobi" class="mb-3" style="width: 500px; height: 200px;"></canvas>
</div>
<div style="margin-left: 260px; margin-top:10px;">
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Hobi</th>
            <th>Tingkat Kesukaan</th>
          </tr>
        </thead>
        <tbody>
          @if($hobi->count() > 0)
            @foreach($hobi as $i => $h)
              <tr>
                <td>{{++$i}}</td>
                <td>{{$h->nama}}</td>
                <td>{{$h->tingkat_kesukaan}}</td>
                <td>
                  <!-- Bikin tombol edit dan delete -->
                  <a href="{{ url('/hobi/'. $h->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
  
                  <form method="POST" action="{{ url('/hobi/'.$h->id) }}" >
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var data = <?= json_encode($data); ?>;
    var ctx = document.getElementById('hobi').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
            responsive: true
        }
    });
</script>
@endsection
