<!DOCTYPE html>
<html lang="en" class="no-js">


<!-- Mirrored from themesdesign.in/jobya/post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 00:20:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joblink</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/nice-select.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->

    @include('nav.navbar')

    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Make A New Vacancies</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Post A New Job</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
                                @csrf
                                <h4 class="text-dark mb-3">Post New Job :</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Judul Pekerjaan</label>
                                            <input name="judul" id="company-name" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Nama Perusahaan</label>
                                            <input name="perusahaan" id="company-name" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Alamat</label>
                                            <textarea name="alamat" id="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Tipe Pekerjaan</label>
                                            <div class="form-button">
                                                <select name="tipe" class="nice-select rounded">
                                                    <option data-display="Tipe">Job Type</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Kategori Pekerjaan</label>
                                            <div class="form-button">
                                                <select name="kategori" class="nice-select rounded">
                                                    <option data-display="Kategori">Category</option>
                                                    <option value="Web Developer">Web Developer</option>
                                                    <option value="Web Designer">Web Designer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">City</label>
                                            <input id="city" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Country</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Country">Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Bangladesh</option>
                                                    <option value="3">Canada</option>
                                                    <option value="4">Dominica</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Gaji Minimum</label>
                                            <input name="gaji_min" id="minimum-salary" type="text" class="form-control resume" placeholder="$8000">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Gaji Maksimum</label>
                                            <input name="gaji_max" id="maximum-salary" type="text" class="form-control resume" placeholder="$20000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Pendidikan Terakhir</label>
                                            <div class="form-button">
                                                <select name="pendidikan" class="nice-select rounded">
                                                    <option data-display="Pendidikan">Pendidikan</option>
                                                    <option value="SMK">SMK/SMA</option>
                                                    <option value="Universitas">Universitas</option>
                                                    <option value="Umum">Umum</option>
                                                    {{-- <option value="4">Level-4</option> --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Pengalaman</label>
                                            <div class="form-button">
                                                <select name="pengalaman" class="nice-select rounded">
                                                    <option data-display="Pengalaman">Pengalaman</option>
                                                    <option value="Fresh Graduate">Fresh Graduate</option>
                                                    <option value="1 Tahun">1 Tahun</option>
                                                    <option value="2 Tahun">2 Tahun</option>
                                                    <option value="3 Tahun">3 Tahun</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Website</label>
                                            <input id="url" type="url" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Alamat Email</label>
                                            <input name="email" id="email-address" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Nomor Telepon</label>
                                            <input name="kontak" id="number" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Gender</label>
                                            <div class="form-button">
                                                <select name="gender" class="nice-select rounded">
                                                    <option data-display="Gender">Gender</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                    <option value="Pria & Wanita">Pria & Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Masa Berlaku</label>
                                            <input name="periode" id="number" type="date" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Dekripsi Pekerjaan</label>
                                            <textarea name="deskripsi" id="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="custom-file">
                                                        {{-- <input name="foto_post" type="file" class="custom-file-input">
                                                        <label class="custom-file-label rounded"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</label> --}}
                                                        <label for="" class="form-label">Foto Project</label>
                                                        <input class="form-control" type="file" name="foto_post" id="foto_post">
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <h6 class="text-muted mb-0">Upload Foto / Document</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <input class="btn btn-primary" type="submit" value="Post Loker" name="" id="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->

    <!-- subscribe start -->
    {{-- <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- subscribe end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/logo-light.png" height="20" alt=""></a>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Media & Press</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Career</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : 10:00 to 15:00</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2019 - 2020 Jobya. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('js/selectize.min.js')}}"></script>

    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>

</body>

<!-- Mirrored from themesdesign.in/jobya/post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 00:20:59 GMT -->
</html>