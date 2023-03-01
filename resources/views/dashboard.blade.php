@extends('layouts.template')
@section('content')
<div style="margin-left: 300px;">
<h1>Selamat Datang!</h1>
</div>
@push('custom_js')
  <script>
    Swal.fire('Selamat Datang!')
  </script>
  @endpush
@endsection

