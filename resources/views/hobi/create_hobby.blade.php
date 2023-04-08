@extends('layouts.template')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($hobi))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>Nama Hobi</label>
        <input class="form-control @error('nama') is-invalid @enderror" type="text" value="{{ isset($hobi)? $hobi->nama : old('nama') }}" name="nama">
        @error('nama')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Tingkat Kesukaan</label>
        <input class="form-control @error('tingkat_kesukaan') is-invalid @enderror"  type="text" value="{{ isset($hobi)? $hobi->tingkat_kesukaan : old('tingkat_kesukaan') }}" name="tingkat_kesukaan">
        @error('tingkat_kesukaan')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@push('custom_js')
<script>
  const numberInput = document.getElementByName("tingkat_kesukaan");

numberInput.addEventListener("keydown", (event) => {
  const keyCode = event.keyCode || event.which;
  const keyValue = String.fromCharCode(keyCode);

  // Hanya menerima angka 0-9 dan tombol khusus untuk input keyboard
  const regex = /^[0-9\b\t\r\n\x1b]*$/;
  if (!regex.test(keyValue)) {
    event.preventDefault();
    return false;
  }
});

numberInput.addEventListener("paste", (event) => {
  const pasteData = event.clipboardData.getData("text/plain");

  // Hanya menerima angka 0-9
  const regex = /^[0-9]*$/;
  if (!regex.test(pasteData)) {
    event.preventDefault();
    return false;
  }
});
</script>
@endpush
@endsection

