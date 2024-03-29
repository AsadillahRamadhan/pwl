@extends('layouts.template')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}" enctype="multipart/form-data">
    @csrf
    {!! (isset($mhs))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>NIM</label>
        <input class="form-control @error('nim') is-invalid @enderror" type="text" value="{{ isset($mhs)? $mhs->nim : old('nim') }}" name="nim">
        @error('nim')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input class="form-control @error('nama') is-invalid @enderror"  type="text" value="{{ isset($mhs)? $mhs->nama : old('nama') }}" name="nama">
        @error('nama')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-select @error('jk') is-invalid @enderror" value="{{ isset($mhs)? $mhs->jk : old('jk') }}" name="jk">
            <option value="l">Laki-laki</option>
            <option value="p">Perempuan</option>
          </select>
          @error('jk')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input class="form-control @error('tempat_lahir') is-invalid @enderror"  type="text" value="{{ isset($mhs)? $mhs->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir">
        @error('tempat_lahir')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control @error('tanggal_lahir') is-invalid @enderror"  type="date" value="{{ isset($mhs)? $mhs->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir">
        @error('tanggal_lahir')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input class="form-control @error('alamat') is-invalid @enderror"  type="text" value="{{ isset($mhs)? $mhs->alamat : old('alamat') }}" name="alamat">
        @error('alamat')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>No. Hp</label>
        <input class="form-control @error('hp') is-invalid @enderror"  type="text" value="{{ isset($mhs)? $mhs->hp : old('hp') }}" name="hp">
        @error('hp')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control @error('kelas') is-invalid @enderror" name="kelas">
            @foreach($kelas as $kls)
            @if(isset($mhs))
            <option value="{{ $kls->id }}" {{ ($mhs->kelas_id == $kls->id)? 'selected' : '' }}>{{ $kls->nama_kelas }}</option>
            @else
            @endif
            <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input class="form-control @error('foto') is-invalid @else mb-3 @enderror" type="file" name="foto" value="{{ isset($mhs)? $mhs->foto : old('foto') }}">
        @error('foto')
        <span class="error invalid-feedback mb-3">{{ $message }}</span>
        @enderror
        @if(isset($mhs))
        <p>Foto Sebelumnya</p>
        <img src="{{ asset($mhs->foto) }}" alt="" width="100px" height="100px" style="overflow:">
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


    
    </form>
</div>
@endsection