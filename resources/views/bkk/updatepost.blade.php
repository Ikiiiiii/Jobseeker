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
                <label for="exampleInputName1">Judul Loker</label>
                <input name="judul" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $post->nama_loker }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputName1">Nama Perusahaan</label>
                <input name="perusahaan" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $post->nama_perusahaan }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleTextarea1" rows="3">{{ old('alamat' , $post->alamat) }}</textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail3">Tipe</label>
                <select name="tipe" class="form-control" id="exampleSelectGender">
                  <option data-display="Tipe">Tipe</option>
                  @foreach ($tipe as $type)
                  <option value="{{ $type }}" {{ $post->tipe == $type ? 'selected' : '' }}>{{ $type }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword4">Kategori</label>
                <select name="kategori" class="form-control" id="exampleSelectGender">
                  <option data-display="Kategori">Kategori</option>
                  @foreach ($kategori as $category)
                  <option value="{{ $category }}" {{ $post->kategori == $category ? 'selected' : '' }}>{{ $category }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Gaji Minimum</label>
                <input name="gaji_min" type="text" class="form-control" placeholder="" value="{{ $post->gaji_min }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Gaji Maksimum</label>
                <input name="gaji_max" type="text" class="form-control" placeholder="" value="{{ $post->gaji_max }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword4">Pendidikan Terakhir</label>
                <select name="pendidikan" class="form-control" id="exampleSelectGender">
                  <option data-display="Pendidikan">Pendidikan</option>
                  @foreach ($pendidikan as $study)
                  <option value="{{ $study }}" {{ $post->pendidikan == $study ? 'selected' : '' }}>{{ $study }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword4">Pengalaman</label>
                <select name="pengalaman" class="form-control" id="exampleSelectGender">
                  <option data-display="Pengalaman">Pengalaman</option>
                  @foreach ($pengalaman as $exp)
                  <option value="{{ $exp }}" {{ $post->pengalaman == $exp ? 'selected' : '' }}>{{ $exp }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Alamat Email</label>
                <input name="email" type="email" class="form-control" name="" id="" placeholder="" value="{{ $post->email }}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Nomor Telepon</label>
                <input name="kontak" type="text" class="form-control" value="{{ $post->kontak }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                  <select name="gender" class="form-control" id="exampleSelectGender">
                    <option data-display="Gender">Gender</option>
                    @foreach ($gender as $gen)
                    <option value="{{ $gen }}" {{ $post->gender == $gen ? 'selected' : '' }}>{{ $gen }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Masa Berlaku</label>
                <input name="periode" type="date" class="form-control" name="" id="" value="{{ $post->periode }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleTextarea1">Deskripsi Pekerjaan</label>
                <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="5">{{ old('deskripsi' , $post->deskripsi) }}</textarea>
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
                  <option value="{{ $stats }}" {{ $post->status == $stats ? 'selected' : '' }}>{{ $stats }}</option>
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
                  @if ($post->foto_post)
                  <img src="{{ asset('storage/'. $post->foto_post) }}" width="250" alt="">
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