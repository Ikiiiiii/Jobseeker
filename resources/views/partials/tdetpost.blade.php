<!DOCTYPE html>
<html lang="en" class="no-js">


<!-- Mirrored from themesdesign.in/jobya/job-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 00:21:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joblink</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/selectize.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

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
                        <h4 class="text-uppercase title mb-4">Job Detail</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Jobs</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Job Detail</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- JOB SINGLE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div>
                        <p class="text-muted mb-2"><i class="mdi mdi-calendar mr-1"></i>Date Posted : {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</p>
                    </div>
                    <div class="job-detail text-center job-single border rounded p-4">
                        <div class="job-single-img mb-2">
                            <img src="/storage/{{ $post->foto_post }}" alt="" width="250" class="img-fluid mx-auto d-block">
                        </div>
                        <h4 class=""><a href="#" class="text-dark">Web Designer</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-2"><i class="mdi mdi-office-building mr-1"></i>{{ $post->nama_perusahaan }}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-map-marker mr-1"></i>{{ $post->alamat }}</p>
                            </li>


                            <li class="list-inline-item">
                                <p class="text-muted mb-2"><i class="mdi mdi-currency-usd mr-1"></i>{{ $post->gaji_min }} - {{ $post->gaji_max }}/month</p>
                            </li>
                        </ul>
                        <p class="text-muted mb-0"></p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Job Description :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">{{ $post->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">How To Apply :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <p class="text-muted mb-0">1 )</p>
                                        </div>
                                        <p class="text-muted mb-3 overflow-hidden d-block">Baca syarat dan ketentuan pengajuan kerja di bagian deskripsi diatas.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <p class="text-muted mb-0">2 )</p>
                                        </div>
                                        <p class="text-muted mb-3 overflow-hidden d-block">Jika anda memenuhi kualifikasi yang diinginkan oleh perusahaan, Anda bisa langsung klik "Apply Now" untuk melakukan proses pengajuan kerja.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <p class="text-muted mb-0">3 )</p>
                                        </div>
                                        <p class="text-muted mb-0 overflow-hidden d-block">Setelah di klik button "Apply Now" anda akan masuk ke halaman form pengajuan kerja, jika sudah tunggu balasan dari admin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="company-brand-logo text-center">
                        <img src="images/featured-job/img-2.png" alt="" class="img-fluid mx-auto d-block mb-3">
                        <h5 class="text-muted mb-0"><a href="#" class="text-muted"><i class="mdi mdi-briefcase mr-1"></i>{{ $post->nama_loker }}</a></h5>
                    </div>

                    <div class="job-detail rounded border job-overview mt-4 mb-4">
                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-school text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Study</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $post->pendidikan }}</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-security text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Experience</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $post->pengalaman }}</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-currency-usd text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Salary</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $post->gaji_min }} - {{ $post->gaji_max }}/month</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-apps text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Category</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $post->kategori }}</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-human-male-female text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Gender</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $post->gender }}</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-calendar-today text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Valid Until</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ Carbon\Carbon::parse($post->periode)->format('d-m-Y')  }}</h6>
                            </div>
                        </div>

                        <div class="single-post-item mb-4">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-email text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Email</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $post->email }}</h6>
                            </div>
                        </div>

                        <div class="single-post-item">
                            <div class="float-left mr-3">
                                <i class="mdi mdi-phone-classic text-muted mdi-24px"></i>
                            </div>
                            <div class="overview-details">
                                <h6 class="text-muted mb-0">Contact No</h6>
                                <h6 class="text-black-50 pt-2 mb-0">{{ $post->kontak }}</h6>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-dark">Job Location</h5>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" class="rounded" style="border: 0" allowfullscreen=""></iframe>
                    </div>

                    <div class="job-details-desc-item mt-2">
                        <div class="float-left mr-2">
                            <i class="mdi mdi-map-marker text-muted"></i>
                        </div>
                        <p class="text-muted mb-2">{{ $post->alamat }}</p>
                    </div>

                    <ul class="social-icon list-inline mb-0 mt-4">
                        <li class="list-inline-item">Share :</li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="#" class=" rounded"><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>

                    <div class="mt-4">
                        <a href="/pengajuan" class="btn btn-primary btn-block btn-sm"><i class="mdi mdi-send mr-2"></i>Apply This Job</a>
                    </div>

                    {{-- <div class="mt-4">
                        <div class="job-single-or position-relative">
                            <h6 class="mb-0 text-dark text-center">OR</h6>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="#" class="text-white"><i class="mdi mdi-facebook facebook"></i></a>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="#" class="text-white"><i class="mdi mdi-google-plus google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB SINGLE END -->

    <!-- footer start -->
    <footer class="footer">
        @include('nav.footer')
    </footer>
    <!-- footer end -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- selectize js -->
    <script src="{{ asset('js/selectize.min.js') }}"></script>

    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

<!-- Mirrored from themesdesign.in/jobya/job-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 00:21:01 GMT -->
</html>