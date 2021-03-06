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
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="position-relative">
            <!-- Hero Section -->
            <div class="bg-img-hero space-2 space-top-3" style="background-image: url({{ asset('img/hero-bg-2.png') }});">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-7 col-lg-8">
                            <h1 class="text-lh-sm">Mengelola Akun Anda</h1>
                            <p class="small">Update pada 17 Oktober 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Section -->

            <!-- Sidebar Content Section -->
            <div class="container space-top-3 position-md-absolute top-0 right-0 left-0">
                <div class="row justify-content-start">
                    <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 position-relative z-index-2">
                        <div class="js-sticky-block card-border" data-hs-sticky-block-options='{
                            "parentSelector": "#stickyBlockStartPoint",
                            "targetSelector": "#basicLogoAndNav",
                            "breakpoint": "md",
                            "startPoint": "#stickyBlockStartPoint",
                            "endPoint": "#stickyBlockEndPoint",
                            "stickyOffsetTop": 32,
                            "stickyOffsetBottom": 12
                            }'>
                            <div class="container js-scroll bg-white rouded shadow-lg">
                                <div id="basicsAccordion" class="js-scroll-nav">
                                    <!-- Card One -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse" id="basicsHeadingOne">
                                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true" aria-controls="basicsCollapseOne">
                                                Akun dan Kata Sandi
                                                <span class="card-btn-toggle">
                                                    <span class="card-btn-toggle-default">+</span>
                                                    <span class="card-btn-toggle-active">−</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div id="basicsCollapseOne" class="collapse show" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#akun-login">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Login ke Akun Anda</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#akun-ubah-kata-sandi">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Ubah kata sandi</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#akun-mengatasi-masalah">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Mengatasi masalah</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Two -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                                Profil dan Pengaturan Anda

                                                <span class="card-btn-toggle">
                                                    <span class="card-btn-toggle-default">+</span>
                                                    <span class="card-btn-toggle-active">−</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#profil-edit-profil">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Edit profil</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#profil-foto-profil-anda">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Foto profil anda</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#profil-user-anda">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>User Anda</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#profil-mengatasi-masalah">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Mengatasi masalah</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Three -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse " id="basicsHeadingThree">
                                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                                Nama di One Click Democracy
                                                <span class="card-btn-toggle">
                                                    <span class="card-btn-toggle-default">+</span>
                                                    <span class="card-btn-toggle-active">−</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#nama-mengonfirmasi-nama">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Mengonfirmasi nama</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#nama-menggunakan-nama-anda">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Menggunakan nama Anda</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#nama-mengubah-atau-menambahkan">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Mengubah atau menambahkan nama lain</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Four -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse" id="basicsHeadingFour">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                            Mengamankan Akun Anda
                                            <span class="card-btn-toggle">
                                                <span class="card-btn-toggle-default">+</span>
                                                <span class="card-btn-toggle-active">−</span>
                                            </span>
                                        </a>
                                        </div>
                                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#kiat-dan-fitur-keamanan">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Kiat dan Fitur Keamanan</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Five -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse" id="basicsHeadingFive">
                                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                            Notifikasi
                                            <span class="card-btn-toggle">
                                                <span class="card-btn-toggle-default">+</span>
                                                <span class="card-btn-toggle-active">−</span>
                                            </span>
                                        </a>
                                        </div>
                                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#pemberitahuan-otomatis-email-dan-sms">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Pemberitahuan otomatis, email dan SMS</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#notifikasi-mengatasi-masalah">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Mengatasi Masalah</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Six -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse" id="basicsHeadingSix">
                                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                                Referensi Iklan
                                                <span class="card-btn-toggle">
                                                    <span class="card-btn-toggle-default">+</span>
                                                    <span class="card-btn-toggle-active">−</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#referensi-iklan">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Referensi Iklan</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->
                                        </div>
                                        </div>
                                    </div>
                                    <!-- Card Seven -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse" id="basicsHeadingSeven">
                                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false" aria-controls="basicsCollapseSeven">
                                                Menonaktifkan atau Menghapus Akun
                                                <span class="card-btn-toggle">
                                                    <span class="card-btn-toggle-default">+</span>
                                                    <span class="card-btn-toggle-active">−</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#perbedaan-menonaktifkan-menghapus-akun">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Perbedaan</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#menonaktifkan-akun">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Menonaktifkan akun</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#mengaktifkan-ulang-akun-anda">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Mengaktifkan ulang akun Anda</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->

                                                <!-- Course Program -->
                                                <div class="py-3 pr-3 pl-6">
                                                    <a class="media font-size-1 mr-5" href="#menghapus-akun-secara-permanen">
                                                        <i class="fa fa-play-circle min-w-3rem text-center opacity-lg mt-1 mr-2 ml-1"></i>
                                                        <span class="media-body">
                                                            <span>Menghapus akun secara permanen</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- End Course Program -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sidebar Content Section -->
        </div>

        <!-- Description Section -->
        <div class="container space-top-2 space-top-md-1">
            <div class="row justify-content-end">
                <!-- <div class="col-md-5 col-lg-4"></div> -->
                <div class="col-md-7 col-lg-8">
                    <!-- Akun dan Kata Sandi -->
                    <div class="card border box-shadow mb-4">
                        <div class="card-header alert alert-primary border-0">
                          <h3 class="card-heading text-white">Akun dan Kata Sandi</h3>
                        </div>
                        <div class="card-body">
                            <div id="akun-dan-kata-sandi">
                                <div id="akun-login">
                                    <h5>1. Login ke Akun Anda</h5>
                                    <hr>
                                    <p>Jika Anda mengetahui kata sandi saat ini, Anda bisa mengubahnya.&nbsp;</p>
                                    <p>Ketika membuat kata sandi baru, harap diingat bahwa:</p>
                                    <ul>
                                        <li><span style="font-size: 1rem;">Kata sandi harus mudah Anda ingat, tetapi sulit ditebak orang lain.</span></li>
                                        <li>Kata sandi OCD anda harus berbeda dari kata sandi yang digunakan untuk login pada akun lain, seperti email dan akun bank.</li>
                                        <li>Kata sandi harus terdiri dari kombinasi huruf&nbsp; besar, huruf kecil, angka, dan spesial carakter. Ex : OneClickDemocracy_17</li>
                                        <li>Kata sandi tidak boleh mengandung unsur nama Anda, email, tanggal lahir dan nomor telepon.</li>
                                    </ul>
                                    <p>Jika Anda mengalami masalah ketika mengubah kata sandi, pelajari cara mendapat bantuan login&nbsp; dan kata sandi.&nbsp;</p>
                                </div>
                                <div id="akun-ubah-kata-sandi">
                                    <br>
                                    <h5>2. Ubah kata sandi</h5>
                                    <hr>
                                    <h6>Bagaimana cara mengubah atau mereset kata sandi One Click Democracy saya?</h6>
                                    <p>Untuk mengubah kata sandi:</p>
                                    <ul>
                                        <li><span style="font-size: 1rem;">Klik&nbsp;</span></li>
                                        <li>Pilih </li>
                                        <li>Klik </li>
                                        <li>Klik Edit di samping Ubah kata sandi.</li>
                                        <li>Masukkan kata sandi Anda saat ini dan yang baru.</li>
                                        <li>Klik Simpan Perubahan.&nbsp;</li>
                                    </ul>
                                    <p>Jika Anda sudah login tetapi lupa kata sandi, ikuti langkah-langkah di bagian Ubah Kata Sandi Anda,&nbsp; lalu klik Lupa kata sandi Anda? Dan ikuti langkah-langkah untuk meresetnya. Harap diingat bahwa Anda akan membutuhkan akses ke Email yang terhubung dengan akun anda.&nbsp;</p>
                                    <p>Catatan: jika anda Sign Up menggunakan Nomor ponsel, Anda akan di minta kode OTP yang akan dikirimkan ke Nomor telephone Anda saat Anda login.</p>
                                    <h6>Mereset kata Sandi:</h6>
                                    <p>Untuk mereset kata sandi jika Anda belum login ke One Click Democracy:</p>
                                    <ul>
                                        <li><span style="font-size: 1rem;">Klik Lupa Password yang ada di bawah kolom password pada Halaman Awal&nbsp; Login</span></li>
                                        <li>Ketikkan email pengguna yang telah terhubung dengan akun Anda, lalu klik Selanjutnya</li>
                                        <li>Ikuti petunjuk di layar</li>
                                    </ul>
                                    <p>Jika Anda masih mengalami masalah, kami bisa membantu memulihkan akun Anda</p>
                                    <p>Bagaimana cara membuat kata sandi One Click Democracy yang kuat?</p>
                                    <p>Saat Anda membuat kata sandi baru, ingat bahwa:</p>
                                    <ul>
                                        <li><span style="font-size: 1rem;">Kata sandi harus mudah Anda ingat, tetapi sulit ditebak orang lain.</span></li>
                                        <li>Kata sandi OCD anda harus berbeda dari kata sandi yang digunakan untuk login pada akun lain, seperti email dan akun bank.</li>
                                        <li>Kata sandi harus terdiri dari kombinasi huruf&nbsp; besar, huruf kecil, angka, dan spesial carakter. Ex : OneClickDemocracy_17</li>
                                        <li>Kata sandi tidak boleh mengandung unsur nama Anda, email, tanggal lahir dan nomor telepon.</li>
                                    </ul>
                                    <p>Jika melihat sebuah pesan yang memberi tahu bahwa kata sandi yang Anda masukkan kurang kuat, coba periksa kembali, apakah Anda sudah memasukkan syarat-syarat dalam pembuatan kata sandi.&nbsp;</p>
                                    <p>Dapatkan One Click Democracy mengirimkan salinan kata sandi kepada saya tanpa mengatur ulang?</p>
                                    <p>Kami tidak dapat mengirimkan salinan kata sandi Anda tanpa melakukan pengaturan ulang.&nbsp;</p>
                                    <p>Jika Anda mengalami masalah untuk masuk dan mengingat kata sandi, Anda dapat mengubahnya.&nbsp; Ingat bahwa Anda harus memiliki akses ke Email yang terhubung dengan akun One Click Democracy Anda agar dapat mengatur ulang kata sandinya.&nbsp;</p>
                                </div>
                                <div id="akun-mengatasi-masalah">
                                    <br>
                                    <h5>3. Mengatasi Masalah</h5>
                                    <hr>
                                    <h6>Bantuan Masuk</h6>
                                    <p>Saya tidak bisa login ke One Click Democracy</p>
                                    <p>Jika Anda kesulitan login ke akun One Click Democracy, berikut ini ada beberapa langkah yang dapat Anda ikuti:</p>
                                    <p>Coba pulihkan akun One Click Democracy Anda</p>
                                    <p>Pemulihan akun hanya dapat dilakukan dengan menghubungi email pengaduan kami di support@oneclickdemocracy.com atau bisa kontak kami melalui (021) 2555 6797 atau melalui whatsapp di 082123246934.&nbsp;</p>
                                    <p>Saya menggunakan nomor ponsel untuk mendaftar One Click Democracy dan sekarang saya tidak bisa login.&nbsp;</p>
                                    <p>Jika Anda mendaftarkan akun menggunakan nomor ponsel, Anda tidak diminta membuat password.</p>
                                    <p>Apabila Anda tidak dapat login menggunakan nomor ponsel, Anda bisa mencoba langkah-langkah berikut.:</p>
                                    <ol>
                                        <li><span style="font-size: 1rem;">Periksa kembali nomor ponsel yang Anda masukkan</span></li>
                                        <li>Periksa notifikasi pesan Anda</li>
                                        <li>Jika tetap tidak bisa login, Anda dapat menghubungi email pengaduan kami di support@oneclickdemocracy.com atau bisa kontak kami melalui (021) 2555 6797 atau melalui whatsapp di 082123246934.</li>
                                    </ol>
                                    <p><span style="font-size: 1rem;">Saya harus memasukkan kode OTP setiap kali login ke One Click Democracy</span><br></p>
                                    <p>Ketika Anda daftar akun One Click Democracy menggunakan nomor ponsel, kami akan mengirimkan kode OTP ke nomor ponsel Anda, dan Anda harus memasukkan kode OTP yang kami kirimkan setiap Anda login.&nbsp;&nbsp;</p>
                                    <h6>Bantuan Kata Sandi</h6>
                                    <p>Saya belum menerima email untuk mereset kata sandi.</p>
                                    <p>Jika Anda meminta kata sandi baru, tetapi tidak menerima email reset kata sandi:</p>
                                    <ul>
                                        <li><span style="font-size: 1rem;">Periksa folder spam atau email sampah di akun email yang ditautkan ke akun One Click Democracy Anda.</span></li>
                                        <li>Coba reset kata sandi lagi</li>
                                    </ul>
                                    <p>Saya tidak bisa mereset kata sandi One Click Democracy karena tidak bisa mengakses email di akun saya.&nbsp;</p>
                                    <ul>
                                        <li><span style="font-size: 1rem;">Jika mendaftar One Click Democracy dengan email, hubungi penyedia layanan email untuk mendapatkan kembali akses ke email di akun&nbsp; One Click Democracy Anda. misalnya, banyak penyedia layanan email memiliki opsi Kesulitan login? Di layar loginnya.</span></li>
                                        <li>Jika mendapatkan kembali akses ke email, Anda bisa menyelesaikan langkah-langkah untuk mereset kata sandi Anda.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profil dan pengatuan anda -->
                    <div class="card border box-shadow mb-4">
                        <div class="card-header alert alert-primary border-0">
                          <h3 class="card-heading text-white">Profil dan Pengaturan Anda</h3>
                        </div>
                        <div class="card-body">
                            <div id="profil-pengaturan-anda" class="space-1">
                                <div id="profil-edit-profil">
                                    <h5>1. Edit Profil</h5>
                                    <hr>
                                    <!-- Content -->
                                    <p>Profil Anda memberitahu tentang diri Anda yang mencakup infomasi&nbsp; username dan&nbsp; biografi Anda. profil Anda mencakup Aspirasi Anda, tempat Anda melihat kiriman Anda sendiri.&nbsp;</p>
                                    <h5>Edit Profil</h5>
                                    <p>Di mana saya bisa menemukan Edit Profil One Click Democracy?</p>
                                    <p>Untuk&nbsp; mencari pengaturan Anda:</p>
                                    <ul>
                                        <li>Klik ⚙️ di kanan atas pada page profil Anda</li>
                                        <li>Pilih Edit Profil</li>
                                        <li>Klik pada kolom yang ingin anda Edit. lalu klik Simpan.&nbsp;</li>
                                    </ul>
                                </div>
                                <div id="profil-foto-profil-anda">
                                    <br>
                                    <h5>2. Foto Profil Anda</h5>
                                    <hr>
                                    <p>Bagaimana cara menambahkan atau merubah foto profil Akun saya?</p>
                                    <ul>
                                        <li>Klik ⚙️ di kanan atas pada page profil Anda</li>
                                        <li>Pilih Edit Profil</li>
                                        <li>Klik pada gambar profil Picture Anda di bagian atas profil.</li>
                                        <li>Take foto atuau Pilih foto yang sudah tersedia</li>
                                        <li>Klik Simpan pada bagian bawah</li>
                                    </ul>
                                    <p>Bagaimana cara menghapus foto profil saya?</p>
                                    <p>Untuk Menghapus foto profil di One Click Democracy:</p>
                                    <ul>
                                        <li>Klik ⚙️ di kanan atas pada page profil Anda</li>
                                        <li>Pilih Edit Profil</li>
                                        <li>Klik pada gambar profil Picture Anda di bagian atas profil.</li>
                                        <li>Pilih Hapus foto . </li>
                                        <li>Klik Simpan untuk menyimpan perubahan yang dilakukan.&nbsp;</li>
                                    </ul>
                                </div>
                                <div id="profil-user-anda">
                                    <br>
                                    <h5>3. User Anda</h5>
                                    <hr>
                                    <p>Bagaimana nama Pengguna dan Username digunakan di&nbsp; profil One Click Democracy?</p>
                                    <p>Nama pengguna dan Username adalah bagian dari profil publik yang bisa membantu teman menemukan Anda di One Click Democracy. Nama pengguna adalah Nama Anda yang akan tampil di profil yang disesuaikan dengan data pada kartu identitas Anda yang telah terdaftar.&nbsp; Username adalah&nbsp; nama identitas yang Anda pakai di Akun One Click Democracy.</p>
                                    <p>Nama Pengguna&nbsp;</p>
                                    <p>Nama pengguna secara otomatis menggunakan nama sesuai dengan kartu identitas yang telah Anda daftarkan. Anda tidak dapat mengubah nama pengguna menjadi nama samaran atau nama lain Anda. Apabila nama pengguna Anda buat tidak sesuai dengan Kartu Identitas yang Anda daftarkan, akun Anda akan kami bekukan bekukan sementara waktu.&nbsp;</p>
                                    <p>Username</p>
                                    <p>Seringkali, username adalah variasi dari nama Anda untuk memudahkan teman mencari Anda di One Click Democracy, seperti&nbsp;</p>
                                </div>
                                <div id="profil-mengatasi-masalah">
                                    <br>
                                    <h5>4. Mengatasi Masalah</h5>
                                    <hr>
                                    <p>Saya tidak bisa mengganti foto profil saya.</p>
                                    <p>Jika Anda mengalami masalah danam mengganti foto profil Anda, berikut ini beberapa hal yang dapat Anda coba:</p>
                                    <ul>
                                        <li>Pastikan Anda menggunakan versi terbaru.</li>
                                        <li>Pastikan Anda terhubung dengan jaringan data atau Wi-Fi yang dapat diandalkan. </li>
                                        <li>Muat ulang halaman dan coba lagi.</li>
                                        <li>Tunggu dan coba ganti profil Anda nanti.</li>
                                    </ul>
                                    <p>Jika Anda tetap tidak bisa mengganti foto profil, beritahu kami.&nbsp;</p>
                                    <p>Linimasa saya dimuat dengan lambat di One Click Democracy.</p>
                                    <p>Kecepatan memuat linimasa Anda bisa dipengaruhi oleh banyak faktor. Jika Anda memperhatikan bahwa linimasa Anda dimuat lebih lama dari biasanya, cobalah beberapa hal berikut untuk mengatasinya:&nbsp;</p>
                                    <ul>
                                        <li>Pastikan Anda terhubung dengan jaringan data atau Wi-Fiyang dapat di andalkan, jika tidak, Anda dapat mencobanya setelah Anda memiliki koneksi yang lebih baik.</li>
                                        <li>Tutup aplikasi, lalu coba buka kembali. </li>
                                        <li>Muat ulang halaman, dan coba lagi</li>
                                    </ul>
                                    <p>Jika lini masa Anda tetap dimuat lebih lambat dari biasanya, beri tahu kami.</p>
                                    <p>Linimasa saya tidak termuat.</p>
                                    <p>Jika seluruh linimasa Anda kosong atau hanya fitur-fitur yang termuat, beritahu kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Nama di ocd -->
                    <div class="card border box-shadow mb-4">
                        <div class="card-header alert alert-primary border-0">
                          <h3 class="card-heading text-white">Nama di One Click Democracy</h3>
                        </div>
                        <div class="card-body">
                            <div id="nama-di-ocd">
                                <div id="nama-mengonfirmasi-nama">
                                    <p>Untuk memastikan pengguna tahu dengan siapa mereka berhubungan, kami mewajibkan mereka untuk menggunakan nama yang sama dengan yang mereka gunakan pada tanda pengenal. Kami akan meminta Anda untuk verifikasi data bahwa nama di akun One Click Democracy adalah nama yang telah sesuai dengan Kartu Identitas yang Anda miliki.&nbsp;</p>
                                    <h5>1. Mengonfirmasi Nama</h5>
                                    <hr>
                                    <p>Jika Anda melihat pesan saat Anda masuk yang meminta Anda memverifikasi data Anda, mungkin sementara waktu Anda tidak dapat mengakses seluruh fitur One Click Democracy selama proses kami meminta Anda memverifikasi data diri sesuai dengan Kartu Identitas Anda.&nbsp;</p>
                                    <p>Untuk verifikasi&nbsp; bahwa nama Anda sesuai dengan Kartu Identitas, masuk ke akun One Click Democracy dan ikuti petunjuk di layar. Anda akan diminta untuk mengunggah Kartu Identitas Anda (mis: KTP, atau paspor) yang menunjukkan nama yang Anda gunakan telah sesuai.</p>
                                </div>
                                <div id="nama-menggunakan-nama-anda">
                                    <br>
                                    <h5>2. Menggunakan Nama Anda</h5>
                                    <hr>
                                    <p>Kami memahami bahwa nama yang Anda gunakan sehari-hari mungkin berbeda dengan nama resmi Anda. Kami ingin Anda menggunakan nama sesuai dengan Kartu Identitas yang Anda miliki.&nbsp;</p>
                                </div>
                                <div id="nama-mengubah-atau-menambahkan">
                                    <br>
                                    <h5>3. Mengubah atau Menambahkan Nama Lain</h5>
                                    <hr>
                                    <p>Anda tidak dapat mengubah nama atau menambahkan nama lain yang berbeda dengan nama pada Kartu Identitas Anda. Hal tersebut sesuai dengan aturan Standar Komunitas yang telah kami buat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mengamankan akun anda -->
                    <div class="card border box-shadow mb-4">
                        <div class="card-header alert alert-primary border-0">
                          <h3 class="card-heading text-white">Mengamankan Akun Anda</h3>
                        </div>
                        <div class="card-body">
                            <div id="kiat-dan-fitur-keamanan">
                                <h5>1. Kiat dan Fitur Keamanan</h5>
                                <hr>
                                <p>Apa yang bisa saya lakukan agar akun One Click Democracy saya tetap aman?</p>
                                <p>Berikut ini beberapa hal yang dapat Anda lakukan agar akun Anda tetap aman:</p>
                                <p>Lindungi kata sandi Anda</p>
                                <ul>
                                    <li>Jangan gunakan kata sandi One Click Democracy di situs online lainnya, dan jangan membagikan kata sandi Anda kepada orang lain. </li>
                                    <li>Kata sandi Anda harus dulit ditebak, jadi jangan sertakan nama, tanggal lahir, email serta nomor ponsel. </li>
                                    <li>Pelajari selengkapnya tentang membuat kata sandi (ditautkan ke Membuat Akun; Bagaimana cara membuat kata sandi OCD yang kuat?)</li>
                                </ul>
                                <p>Jangan pernah mengklik tautan yang mencurigakan, meskipun tautan itu dikirim oleh teman atau perusahaan yang Anda kenal</p>
                                <ul>
                                    <li>Ini termasuk tautan di One Click Democracy (misalnya: di postingan) atau di email .</li>
                                    <li>Ingat bahwa One Click Democracy tidak pernah meminta kata sandi Anda melalui email. </li>
                                    <li>Jika Anda melihat&nbsp; tautan yang mencurigakan di One Click Democracy, segera laporkan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Notifikasi -->
                    <div class="card border box-shadow mb-4">
                        <div class="card-header alert alert-primary border-0">
                          <h3 class="card-heading text-white">Notifikasi</h3>
                        </div>
                        <div class="card-body">
                            <div id="notifikasi">
                                <div id="pemberitahuan-otomatis-email-dan-sms">
                                    <p>Notifikasi merupakan pembaruan tentang aktivitas di One Click Democracy.&nbsp;</p>
                                    <p>Anda bisa mengaktifkan atau menonaktifkan notifikasi untuk orang tertentu yang Anda ikuti.&nbsp;</p>
                                    <br>
                                    <h5>1. Pemberitahuan Otimatis, Email dan SMS</h5>
                                    <hr>
                                    <p>Saat Anda mengunduh aplikasi One Click Democracy, kami mungkin mengirimkan Anda dua jenis notifikasi seluler:&nbsp;</p>
                                    <ul>
                                        <li>Notifikasi Otomatis: dikirimkan saat Anda tidak secara aktif menggunakan One Click Democracy (mis: di&nbsp; layar kunci perangkat Anda)</li>
                                        <li>Notifikasi dalam Aplikasi: dikirimkan saat Anda menggunakan One Click Democracy. Notifikasi akan muncul sebagai titik merah di atas&nbsp; &nbsp; di pojok kanan atas pada&nbsp; halaman Beranda Anda. Anda tidak bisa menonaktifkan notifikasi dalam aplikasi.&nbsp;</li>
                                    </ul>
                                    <p>Menonaktifkan notifikasi otomatis Anda pada Android</p>
                                    <p>Untuk menyesuaikan notifikasi otomatis seluler di perangkat Android Anda:</p>
                                    <ol>
                                        <li>Buka pengaturan perangkat Anda</li>
                                        <li>Ketuk Notifikasi &gt; Aplikasi &gt; OCD &gt; Notifikasi.</li>
                                        <li>Aktifkan atau nonaktifkan notifikasi dari One Click Democracy.</li>
                                    </ol>
                                    <p>Pemberitahuan Email</p>
                                    <p>Notifikasi email adalah pembaruan One Click Democracy yang Anda terima melalui email. Jika tidak memiliki akun One Click Democracy, Anda bisa berhenti menerima email dari One Click Democracydengan mengklik tautan Berhenti Berlangganan di bagian bawah email. Email notifikasi bisa Anda lihat pada Sosial email Anda.&nbsp;</p>
                                    <p>Mengapa saya menerima notifikasi email dari OneClickDemocracy.com?(khusus email untuk notifikasi)&nbsp;</p>
                                    <p>Kami mengirimkan email notifikasi dari OneClickDemocracy.com?(khusus email untuk notifikasi). Jika Anda menerima notifikasi One Click Democracy dari alamat lain, jangan buka email itu atau mengklik tautan didalamnya. Pelajari apa yang harus dilakukan jika Anda menerima email mencurigakan.&nbsp;</p>
                                </div>
                                <div id="notifikasi-mengatasi-masalah">
                                    <br>
                                    <h5>2. Mengatasi Masalah</h5>
                                    <hr>
                                    <p>Saya mendapatkan notifikasi otomatis di One Click Democracy meskipun sudah diatur ke “nonaktif.”</p>
                                    <p>Jika Anda mendapatkan notofokasi otomatis, meskipun sudah menonaktifkannya, mungkin karena Anda baru saja mengupdate aplikasi One Click Democracy. Anda harus menonaktifkan notifikasi otomatis lagi.&nbsp;</p>
                                    <p>Saya tidak menerima notifikasi email tentang akun One Click Democracy saya.&nbsp;</p>
                                    <p>Jika Anda mengalami masalah dengan notifikasi email:&nbsp;</p>
                                    <ul>
                                        <li>Periksa pengaturan notifikasi email Anda untuk memastikan bahwa Anda belum menonaktifkan notifikasi email</li>
                                        <li>Periksa filter spam atau email sampah untuk memastikan email yang berasal dari One Click Democracy tidak masuk ke folder ini. Jika email masuk ke folder tersebut, tambahkan domail email @oneclickdemocracy.com ke daftar pengirim aman akun email Anda. </li>
                                        <li>Jika Anda tetap belum menerika email dari One Click Democracy, hubungi ISP (Penyedia Layanan Internet) untuk memastikan ISP tidak memblokir traffic email yang berasal dari One Click Democracy.</li>
                                    </ul>
                                    <p>Pelajari cara melaporkan masalah jika masalahnya tetap berlanjut.&nbsp;</p>
                                    <p>Saya menerima notifikasi email tentang akun One Click Democracy yang bukan milik saya.&nbsp;</p>
                                    <p>Jika Anda menerima notifikasi email tentang akun One Click Democracy yang bukan milik Anda, kemungkinan ada seseorang yang mencoba membuat akun baru menggunakan email Anda.&nbsp;</p>
                                    <p>Jika seseorang telah berhasil membuat akun menggunakan email Anda, isi formulir ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Referensi iklan -->
                    <div class="card border box-shadwo mb-4">
                        <div class="card-header alert alert-primary border-0">
                          <h3 class="card-heading text-white">Referensi Iklan</h3>
                        </div>
                        <div class="card-body">
                            <div id="referensi-iklan">
                                <p>Preferensi iklan Anda memungkinkan Anda melihat, meninjau dan mengatur preferensi yang kami buat untuk Anda berdasarkan informasi profil Anda, minat Anda, tindakan yang Anda ambil di One Click Deocracy, serta situs web dan aplikasi yang Anda gunakan diluar One Click Democracy. Dengan mengubah preferensi iklan Anda akan mempengaruhi iklan yang Anda lihat, namun tidak mengubah total iklan yang Anda lihat. Jika Anda tidak ingin One Click Democracy menggunakan informasi aktivitas Anda di situs web atau Aplikasi diluar One Click Democracy untuk menampilkan iklan, Anda dapat menolaknya dari pengaturan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Menonaktifkan atau menghapus akun -->
                    <div class="card border box-shadow mb-4">
                        <div class="card-header alert alert-primary border-0">
                          <h3 class="card-heading text-white">Menonaktifkan atau Menghapus Kun</h3>
                        </div>
                        <div class="card-body">
                            <div id="menonaktifkan-menghapus-akun">
                                <div id="perbedaan-menonaktifkan-menghapus-akun">
                                    <h5>1. Perbedaan</h5>
                                    <hr>
                                    <p>Apa perbedaan antara menonaktifkan dan menghapus akun saya?</p>
                                    <p>Jika Anda menonaktifkan akun:</p>
                                    <ul>
                                        <li>Anda bisa mengaktifkan kembali kapan pun Anda mau.</li>
                                        <li>Orang-orang tidak bisa melihat linimasa atau mencari Anda.</li>
                                        <li>Beberapa informasi, seperti komentar yang Anda kirimkan ke teman mungkin masih bisa dilihat.</li>
                                        <li>Beberapa Aspirasi yang Anda buat (seperti: Polling, Kampanye, dan Petisi)&nbsp; mungkin masih bisa dilihat oleh teman Anda.</li>
                                    </ul>
                                    <p>Jika Anda Menghapus akun:</p>
                                    <ul>
                                        <li>Anda tidak bisa mengakses kembali Akun yang telah dihapus. </li>
                                        <li>Kami menunda penghapusan beberapa hari setelah menerima permintaan. Permintaan penghapusan Akun akan kami batalkan apabila dalam priode tersebut Anda login kembali ke Akun OCD.</li>
                                        <li>Beberapa materi (misal: Aspirasi yang anda buat) mungkin tetap disimpan di database kami, tetapi tidak akan dikaitkan dengan pengidentifikasian pribadi Anda.&nbsp;</li>
                                    </ul>
                                </div>
                                <div id="menonaktifkan-akun">
                                    <br>
                                    <h5>2. Menonaktifkan Akun</h5>
                                    <hr>
                                    <p>Bagaimana cara menonaktifkan akun OCD saya untuk sementara waktu?</p>
                                    <p>Anda bisa menonaktifkan akun untuk sementara waktu dan mengaktifkan kembali kapan pun Anda menginginkannya.&nbsp;</p>
                                    <p>Untuk menonaktifkan akun Anda:</p>
                                    <ol>
                                        <li>Klik_____ di______ OCD.</li>
                                        <li>Pilih _________________.</li>
                                        <li>Klik __________________.</li>
                                        <li>Klik Penonaktifan dan Penghapusan Akun.</li>
                                        <li>Pilik Nonaktifkan Akun, lalu Lanjutkan dan ikuti petunjuk untuk mengonfirmasi.&nbsp;</li>
                                    </ol>
                                    <p>Jika akun Anda dinonaktifkan, berarti:</p>
                                    <ul>
                                        <li>Tidak seorangpun bisa melihat profil Anda.</li>
                                        <li>Beberapa informasi, seperti komentar yang Anda kirimkan ke teman mungkin masih bisa dilihat.</li>
                                        <li>Beberapa Aspirasi yang Anda buat (seperti: Polling, Kampanye, dan Petisi)&nbsp; mungkin masih bisa dilihat oleh teman Anda.</li>
                                    </ul>
                                </div>
                                <div id="mengaktifkan-ulang-akun-anda">
                                    <br>
                                    <h5>3. Mengaktifkan Ulang Akun Anda</h5>
                                    <hr>
                                    <p>Mengaktifkan ulang akun Anda:</p>
                                    <p>Jika Anda ingin kembali ke One Click Democracy setelah menonaktifkan akun, Anda bisa mengaktifkan ulang akun Anda kapanpun dengan kembali login ke Aplikasi One Click Democracy di Ponsel Anda. ingat, Anda harus memiliki Akses ke email atau nomor ponsel yang Anda gunakan pada Akun sebelumnya untuk menyelesaikan pengaktifan kembali.&nbsp;</p>
                                    <p>Saya telah menonaktifkan akun OCD. bagaimana cara mengaktifkan kembali akun tersebut?</p>
                                    <p>Anda bisa mengaktifkan ulang akun OCD Anda kapan saja dengan login kembali ke Aplikasi OCD menggunakan email atau nomor ponsel Aku yang telah Anda nonaktifkan.&nbsp;</p>
                                    <p>Ingat bahwa Anda harus memiliki Akses ke email atau nomor ponsel yang Anda gunakan pada Akun sebelumnya untuk menyelesaikan pengaktifan kembali. Jika lupa kata sandi, Anda bisa meminta kata sandi baru. Jika Anda tidak bisa mengakses email atau nomor ponsel yang terhubung dengan akun, pelajari cara mengaktifkan kembali akun Anda.&nbsp;</p>
                                </div>
                                <div id="menghapus-akun-secara-permanen">
                                    <br>
                                    <h5>4. Menghapus Akun Secara Permanen</h5>
                                    <hr>
                                    <p>Bagaimana cara menghapus akun OCD saya secara permanen?</p>
                                    <p>Apa yang terjadi jika saya menghapus akun OCD secara permanen?</p>
                                    <p>Jika Anda Menghapus akun:</p>
                                    <ul>
                                        <li>Anda tidak bisa mengaktifkan kembali Akun yang telah dihapus. </li>
                                        <li>Profil, postingan, vidio, dan semua yang pernah Anda tambahkan akan dihapus secara permanen. Seluruh data yang pernah Anda tambahkan tidak bisa dipulihkan.&nbsp; </li>
                                        <li>Beberapa materi (misal: Aspirasi yang anda buat) mungkin tetap disimpan di database kami, tetapi tidak akan dikaitkan dengan pengidentifikasian pribadi Anda.&nbsp;</li>
                                    </ul>
                                    <p>Bagaimana cara menghapus&nbsp;</p>
                                    <p>Bisakan saya menghapus akun teman atau kerabat yang sudah meninggal?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Description Section -->

        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>

        <div class="space-top-1"></div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection