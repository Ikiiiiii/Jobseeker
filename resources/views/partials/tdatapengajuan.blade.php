<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Joblink | Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller d-flex">
    <!-- partial:../../partials/_sidebar.html -->
    @include('nav.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      @include('nav.navAdm')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <h1 class="text-center mb-4">Data Postingan</h1>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Foto</th>
                          <th>Nama Lengkap</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>No Telepon</th>
                          <th>Persyaratan</th>
                          <th>Status</th>
                          <th>Tanggal Dibuat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengajuan as $pengaju)
                        <tr class="text-center">
                          <td>{{ $loop->iteration }}</td>
                          <td class="py-1">
                            {{-- @if (file_exists("storage/".$item->foto_post)) --}}
                            <img src="/storage/{{ $pengaju->foto_pengaju }}" alt="image"/>
                            {{-- @endif --}}
                          </td>
                          <td>{{ $pengaju->nama_lengkap }}</td>
                          <td>{{ $pengaju->tanggal_lahir }}</td>
                          <td>{{ Str::limit($pengaju->alamat,10)  }}</td>
                          <td>{{ $pengaju->email }}</td>
                          <td>{{ $pengaju->kontak }}</td>
                          <td><a href="{{ asset('storage/' . $pengaju->persyaratan) }}" target="_blank">Lihat Dokumen Persyaratan</a></td>
                          <td>
                            <a href="" class="text-white btn btn-sm
                               @if($pengaju->status == 'Pending') btn-warning
                               @elseif($pengaju->status == 'Accepted') btn-success
                               @elseif($pengaju->status == 'Rejected') btn-danger
                               @endif">
                              {{ $pengaju->status }}
                            </a>
                          </td>
                          <td>{{ Carbon\Carbon::parse($pengaju->tanggal_pengajuan)->format('d-m-Y') }}</td>
                          <td>
                            <a href="pengajuan/edit/{{ $pengaju->id_pengajuan }}" class="btn btn-sm btn-success">Edit</a>
                            <a href="post/delete/{{ $pengaju->id_pengajuan }}" class="btn btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- End custom js for this page-->
</body>

</html>
