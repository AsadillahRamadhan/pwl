@extends('layouts.template')
@section('content')
<div>
    <canvas id="hobi" class="mb-3" style="width: 500px; height: 200px;"></canvas>
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