@extends('layouts.layout')

@section('title', 'Mengelola Akun Anda | ')

@section('navbar')
<li class="navbar-nav-item">
    <a class="nav-link" href="{{ route('menggunakan-ocd') }}">Menggunakan OCD</a>
</li>
<li class="navbar-nav-item">
    <a class="nav-link" href="{{ route('mengelola-akun') }}">Mengelola Akun</a>
</li>
<li class="navbar-nav-item">
    <a class="nav-link" href="javascript:(0)">Privasi dan Keamanan</a>
</li>
<li class="navbar-nav-item">
    <a class="nav-link" href="javascript:(0)">Kebijakan dan Pelaporan</a>
</li>
@endsection

@section('content')
<main id="content" role="main" class="space-1 space-top-2">
    <!-- Hero Section -->
    <div class="bg-light">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 space-2 space-top-lg-5 space-bottom-lg-3">
                    <div class="mb-3">
                        <h1>Pusat Bantuan</h1>
                    </div>

                    <!-- Text/Links -->
                    <p class="font-size-1 text-dark">
                        Topik populer:
                        <a class="link ml-1" href="#">login akun,</a>
                        <a class="link" href="#">verifikasi akun,</a>
                        <a class="link ml-1" href="#">mengonfirmasi nama,</a>
                        <a class="link ml-1" href="#">fitur keamanan,</a>
                    </p>
                    <!-- End Text/Links -->
                </div>

                <div class="col-lg-6 align-self-lg-end d-none d-lg-inline-block">
                    <!-- SVG Icon -->
                    <figure class="mb-n7 ml-lg-4">
                        <img class="img-fluid" src="assets/svg/illustrations/knowledgebase-community-1.svg" alt="Image Description">
                    </figure>
                    <!-- End SVG Icon -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="container">
        <div class="space-2 space-lg-3">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-5">
                    <a class="card card-frame h-100" href="{{ route('menggunakan-ocd') }}">
                        <div class="card-body">
                            <!-- Icon Block -->
                            <div class="media d-block d-sm-flex">
                                <figure class="w-100 max-w-8rem mb-2 mb-sm-0 mr-sm-4">
                                    <img class="img-fluid" src="img/favicons/favicon.png" alt="SVG">
                                </figure>
                                <div class="media-body">
                                    <h2 class="h3">Menggunakan OCD</h2>
                                    <p class="font-size-1 text-body">Pelajari cara membuat dan verifikasi akun, menambahkan pertemanan</p>

                                    <div class="media">

                                        <div class="media-body">
                                            <small class="d-block text-dark">Topik: akun, pertemanan, halaman beranda, pencarian</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Icon Block -->
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 mb-3 mb-lg-5">
                    <a class="card card-frame h-100" href="{{ route('mengelola-akun') }}">
                        <div class="card-body">
                            <!-- Icon Block -->
                            <div class="media d-block d-sm-flex">
                                <figure class="w-100 max-w-8rem mb-2 mb-sm-0 mr-sm-4">
                                    <img class="img-fluid" src="assets/svg/icons/icon-46.svg" alt="SVG">
                                </figure>
                                <div class="media-body">
                                    <h3>Mengelola Akun Anda</h3>
                                    <p class="font-size-1 text-body">Pelajari bagaimana login, mengatur profil dan melakukan keamanan pada akun anda</p>
                                    
                                    <div class="media">

                                        <div class="media-body">
                                            <small class="d-block text-dark">Topik: akun dan kata sandi, profil dan pengaturan, nama di OCD, mengamankan akun, notifikasi, Referensi iklan, menonaktifkan atau menghapus akun</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Icon Block -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-5">
                    <a class="card card-frame h-100" href="javascript:(0)">
                        <div class="card-body">
                            <!-- Icon Block -->
                            <div class="media d-block d-sm-flex">
                                <figure class="w-100 max-w-8rem mb-2 mb-sm-0 mr-sm-4">
                                    <img class="img-fluid" src="assets/svg/icons/icon-47.svg" alt="SVG">
                                </figure>
                                <div class="media-body">
                                    <h2 class="h3">Privasi dan Keamanan</h2>
                                    <p class="font-size-1 text-body">Temukan jawaban tentang privasi dan kemanaan yang ada di OCD</p>

                                    <div class="media">

                                        <div class="media-body">
                                            <small class="d-block text-dark">Topik: privasi dan keamanan</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Icon Block -->
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 mb-3 mb-lg-5">
                    <a class="card card-frame h-100" href="javascript:(0)">
                        <div class="card-body">
                            <!-- Icon Block -->
                            <div class="media d-block d-sm-flex">
                                <figure class="w-100 max-w-8rem mb-2 mb-sm-0 mr-sm-4">
                                    <img class="img-fluid" src="assets/svg/icons/icon-39.svg" alt="SVG">
                                </figure>
                                <div class="media-body">
                                    <h3>Kebijakan dan Pelaporan</h3>
                                    <p class="font-size-1 text-body">Temukan tentang kebihakan dan pelaporan di OCD</p>

                                    <div class="media">

                                        <div class="media-body">
                                            <small class="d-block text-dark">Topik: kebijakan dan perlaporan</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Icon Block -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection