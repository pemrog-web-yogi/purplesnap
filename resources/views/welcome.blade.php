<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing page</title>
    {{-- bootstrap --}}
    <link href="{{ asset('import/asset/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('import/asset/css/landing.css') }}" />
    <link rel="stylesheet" href="{{ asset('import/asset/font/css/all.css') }}" />
    <link rel="icon" href="{{ asset('import/asset/image/logo_rb.png') }}" />
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-white container">
        <div class="col-3 d-flex">
            <img src="{{ asset('import/asset/image/logo_rb.png') }}" width="76" height="60">
            <div class="search-box ms-2 mx-3 my-2">
                <div class="search-icon ms-3">
                    <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                </div>
                <div class="search-input ms-4">
                    <input type="text" class="input" placeholder="search..">
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-4 navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <li class="nav-item  mx-2 pt-1"><a href="{{ route('login') }}"><button type="button" class="btn text-bg-pink">Masuk</button></a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item  mx-2 pt-1"><a href="{{ route('register') }}"><button type="button" class="btn text-bg-sign">Daftar</button></a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
        </div>
    </nav>

    <!-- navbar end -->

    <!-- Header start-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="text pt-5 ms-3">
                    <h1 class="fw-bold">Aspirasi <span class="typing1"></span></h1>
                    <h1 class="typing2">Amikom Yogyakarta</h1>
                    <p>Welcome to PurpleSnap! </p>
                </div>
            </div>
            <div class="col-sm-6 profile">
                <img src="{{ ('import/asset/image/school-kids-riding-a-giant-book-5626946-4702087.webp') }}" alt="Kids riding a giant book" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Header end-->

    <div class="container">
        <div class="row">
            <h4 class="pt-4 fw-bold ms-4">Tim Kami</h4>
            <div class="row text-start justify-content-center pt-1 pb-3 gap-2">
                <div class="col-md mx-auto">
                    <div class="card card-alumni ms-4 px-3 py-3">
                        <img src="{{ asset('import/asset/image/yogi.jpeg') }}" alt="..." class="img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title">Yogi Efani Yancandra</h6>
                            <h6 class="card-title">22.11.4614</h6>
                            <h6 class="card-title">Fullstack Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-auto">
                    <div class="card ms-4 card-alumni px-3 py-3">
                        <img src="{{ asset('import/asset/image/hiren.jpg') }}" alt="..." class="img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title">Hidayah Renaz Rachmawan</h6>
                            <h6 class="card-title">22.11.4642</h6>
                            <h6 class="card-title">Ketua Kelompok</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-auto">
                    <div class="card ms-4 card-alumni px-3">
                        <img src="{{ asset('import/asset/image/hamdan.jpeg') }}" alt="..." class="img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title">Muhamad Hamdan Arrosyid</h6>
                            <h6 class="card-title">22.11.4615</h6>
                            <h6 class="card-title">Fullstack Developer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row gy-3 my-3">
            <div class="row text-start justify-content-center pt-1 pb-3 gap-2">
                <div class="col-md mx-auto">
                    <div class="card card-alumni ms-4 px-3 py-3">
                        <img src="{{ asset('import/asset/image/seva.jpeg') }}" alt="..." class="img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title">Sevalino Rofiq Ismail</h6>
                            <h6 class="card-title">22.11.4629</h6>
                            <h6 class="card-title">UI Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-auto">
                    <div class="card ms-4 card-alumni px-3 py-3">
                        <img src="{{ asset('import/asset/image/faisa.jpeg') }}" alt="..." class="img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title">Faisa Aditya Athallah</h6>
                            <h6 class="card-title">22.11.4630</h6>
                            <h6 class="card-title">UI Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-auto">
                    <div class="card ms-4 card-alumni px-3 py-3">
                        <img src="{{ asset('import/asset/image/andra.jpeg') }}" alt="..." class="img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title">Fransisko Andrade L</h6>
                            <h6 class="card-title">22.11.4665</h6>
                            <h6 class="card-title">Frontend Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md mx-auto">
                    <div class="card ms-4 card-alumni px-3 py-3">
                        <img src="{{ asset('import/asset/image/rehan.jpg') }}" alt="..." class="img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title">Raihan Aly Zaky</h6>
                            <h6 class="card-title">22.11.4667</h6>
                            <h6 class="card-title">Frontend Developer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- most collage end -->
    <!-- <div class="row "> -->
        <div class="vektor ">
            <img src="{{ asset('import/asset/image/Group 32.svg') }}" alt="" class="img-fluid d-none d-md-block">
            <div class="container">
                <div class="circle row row-cols-1 row-cols-sm-3 d-flex justify-content-md-between justify-content-center gap-3">
                    <div class="content col d-flex justify-content-center align-items-center flex-column">
                        <h3 class="text-mhs">3000</h3>
                        <p class="text-name">Mahasiswa</p>
                    </div>
                    <div class="content col d-flex justify-content-center align-items-center flex-column">
                        <h3 class="text-mhs">50</h3>
                        <p class="text-name">Dosen Aktif</p>
                    </div>
                    <div class="content col d-flex justify-content-center align-items-center flex-column">
                        <h3 class="text-mhs">100</h3>
                        <p class="text-name">Meningkatkan efisiensi</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
    <!-- profile rivew start -->
    <div class="container">
        <div class="row d-flex pt-5">
            <div class="rivew-profile col-sm-6 pb-5">
                <img src="{{ asset('import/asset/image/student.png') }}" class="img-fluid">
            </div>
            <div class="teks col-sm-6">
                <p class="fs-3">Member Review</p>
                <div class="star">
                    <img src="{{ asset('import/asset/image/Star.svg') }}" alt="">
                    <img src="{{ asset('import/asset/image/Star.svg') }}" alt="">
                    <img src="{{ asset('import/asset/image/Star.svg') }}" alt="">
                    <img src="{{ asset('import/asset/image/Star.svg') }}" alt="">
                    <img src="{{ asset('import/asset/image/Star.svg') }}" alt="">
                </div>
                <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae tenetur expedita
                    dolore sit maiores tempore. Sunt, sint. Distinctio pariatur adipisci odit dolorem dolores,
                    aperiam
                    voluptatibus eius non sunt recusandae repudiandae?</p>
                <button type="button" class="px-4 py-2">Show me now</button>
            </div>
        </div>
    </div>
    <!-- profile rivew end -->

    <div class="container">
        <!-- friend start -->
        <div class="card-friend rounded shadow border-0 p-4">
            <div class="row gap-3 gap-sm-0">
                <div class="code col-sm-3 order-sm-1 order-2">
                    <img src="{{asset('import/asset/image/code1.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-sm-9 order-sm-2 order-1">
                    <div class="d-flex gap-2">
                        <img src="{{ asset('import/asset/image/Profile.png') }}" alt="" width="37" height="37" />
                        <div>
                            <p class="fw-medium">Nanaku</p>
                            <p class="text-secondary username">@manis_</p>
                        </div>
                    </div>
                    <p class="fs-4 fw-bold">Bagaimana cara untuk initialize decoder untuk dummy data</p>
                    <p class="fs-5 text-secondary">Bagaimana cara untuk inisialisasi data "machine" itu
                        untuk
                        keperluan dummy data</p>
                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                        <div class="d-flex gap-4">
                            <p class="rounded text-ungu bg-pink p-1">#KOMA</p>
                            <p class="rounded text-ungu bg-pink p-1">#HMIF</p>
                            <p class="rounded text-ungu bg-pink p-1">#AMCC</p>
                        </div>
                        <div class="d-flex gap-4">
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/comment.svg') }}" alt="" width="21" />
                                <p class="text-secondary">68 <span class="text-secondary">Komentar</span>
                                </p>
                            </div>
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/like.svg') }}" alt="" width="21" />
                                <p class="text-secondary">125 <span class="text-secondary">Like</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-friend rounded shadow border-0 p-4">
            <div class="row gap-3 gap-sm-0">
                <div class="code col-sm-3 order-sm-1 order-2">
                    <img src="{{asset('import/asset/image/code1.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-sm-9 order-sm-2 order-1">
                    <div class="d-flex gap-2">
                        <img src="{{ asset('import/asset/image/Profile.png') }}" alt="" width="37" height="37" />
                        <div>
                            <p class="fw-medium">Nanaku</p>
                            <p class="text-secondary username">@manis_</p>
                        </div>
                    </div>
                    <p class="fs-4 fw-bold">Bagaimana cara untuk initialize decoder untuk dummy data</p>
                    <p class="fs-5 text-secondary">Bagaimana cara untuk inisialisasi data "machine" itu
                        untuk
                        keperluan dummy data</p>
                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                        <div class="d-flex gap-4">
                            <p class="rounded text-ungu bg-pink p-1">#KOMA</p>
                            <p class="rounded text-ungu bg-pink p-1">#HMIF</p>
                            <p class="rounded text-ungu bg-pink p-1">#AMCC</p>
                        </div>
                        <div class="d-flex gap-4">
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/comment.svg') }}" alt="" width="21" />
                                <p class="text-secondary">68 <span class="text-secondary">Komentar</span>
                                </p>
                            </div>
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/like.svg') }}" alt="" width="21" />
                                <p class="text-secondary">125 <span class="text-secondary">Like</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-friend rounded shadow border-0 p-4">
            <div class="row gap-3 gap-sm-0">
                <div class="code col-sm-3 order-sm-1 order-2">
                    <img src="{{asset('import/asset/image/code1.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-sm-9 order-sm-2 order-1">
                    <div class="d-flex gap-2">
                        <img src="{{ asset('import/asset/image/Profile.png') }}" alt="" width="37" height="37" />
                        <div>
                            <p class="fw-medium">Nanaku</p>
                            <p class="text-secondary username">@manis_</p>
                        </div>
                    </div>
                    <p class="fs-4 fw-bold">Bagaimana cara untuk initialize decoder untuk dummy data</p>
                    <p class="fs-5 text-secondary">Bagaimana cara untuk inisialisasi data "machine" itu
                        untuk
                        keperluan dummy data</p>
                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                        <div class="d-flex gap-4">
                            <p class="rounded text-ungu bg-pink p-1">#KOMA</p>
                            <p class="rounded text-ungu bg-pink p-1">#HMIF</p>
                            <p class="rounded text-ungu bg-pink p-1">#AMCC</p>
                        </div>
                        <div class="d-flex gap-4">
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/comment.svg') }}" alt="" width="21" />
                                <p class="text-secondary">68 <span class="text-secondary">Komentar</span>
                                </p>
                            </div>
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/like.svg') }}" alt="" width="21" />
                                <p class="text-secondary">125 <span class="text-secondary">Like</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-friend rounded shadow border-0 p-4">
            <div class="row gap-3 gap-sm-0">
                <div class="code col-sm-3 order-sm-1 order-2">
                    <img src="{{asset('import/asset/image/code1.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-sm-9 order-sm-2 order-1">
                    <div class="d-flex gap-2">
                        <img src="{{ asset('import/asset/image/Profile.png') }}" alt="" width="37" height="37" />
                        <div>
                            <p class="fw-medium">Nanaku</p>
                            <p class="text-secondary username">@manis_</p>
                        </div>
                    </div>
                    <p class="fs-4 fw-bold">Bagaimana cara untuk initialize decoder untuk dummy data</p>
                    <p class="fs-5 text-secondary">Bagaimana cara untuk inisialisasi data "machine" itu
                        untuk
                        keperluan dummy data</p>
                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                        <div class="d-flex gap-4">
                            <p class="rounded text-ungu bg-pink p-1">#KOMA</p>
                            <p class="rounded text-ungu bg-pink p-1">#HMIF</p>
                            <p class="rounded text-ungu bg-pink p-1">#AMCC</p>
                        </div>
                        <div class="d-flex gap-4">
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/comment.svg') }}" alt="" width="21" />
                                <p class="text-secondary">68 <span class="text-secondary">Komentar</span>
                                </p>
                            </div>
                            <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                <img src="{{ asset('import/asset/image/like.svg') }}" alt="" width="21" />
                                <p class="text-secondary">125 <span class="text-secondary">Like</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="page/question.html" class="btn btn-light fw-bold add-question text-white border-0 rounded py-1 px-2 bg-ungu col-sm-2 col-4 my-3" type="button">Show me now</a>
    </div>

    <footer>
        <div class="footer-landing">
            <h5 class=" text-center pt-4">Develop By. PurpleSnap</h5>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('import/asset/js/index.js') }}"></script>
    <script src="{{ asset('import/asset/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>