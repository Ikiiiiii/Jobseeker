@extends('partials.tadmin')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update</h4>
        <p class="card-description">
          Update Your Post
        </p>
        <form class="forms-sample" action="{{ $action }}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputName1">Nama Lengkap</label>
                <input name="nama_lengkap" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $pengajuan->nama_lengkap }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputName1">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $pengajuan->tanggal_lahir }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleTextarea1" rows="3">{{ old('alamat' , $pengajuan->alamat) }}</textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Alamat Email</label>
                <input name="email" type="email" class="form-control" name="" id="" placeholder="" value="{{ $pengajuan->email }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Nomor Telepon</label>
                <input name="kontak" type="text" class="form-control" value="{{ $pengajuan->kontak }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" id="exampleSelectGender">
                  <option data-display="Status">Status</option>
                  @foreach ($status as $stats)
                  <option value="{{ $stats }}" {{ $pengajuan->status == $stats ? 'selected' : '' }}>{{ $stats }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Foto Postingan</label>
                {{-- <input type="file" name="foto_post" class="file-upload-default"> --}}
                <div class="input-group col-xs-12">
                  {{-- <input type="file" name="foto_post" class="form-control file-upload-info" placeholder="Upload Image"> --}}
                  @if ($pengajuan->foto_pengaju)
                  <img src="{{ asset('storage/'. $pengajuan->foto_pengaju) }}" width="250" alt="">
                  @endif
                  {{-- <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span> --}}
                </div>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary mr-2" value="Submit">
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection