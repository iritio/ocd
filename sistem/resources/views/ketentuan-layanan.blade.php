@extends('layouts.layout')

@section('title', 'Ketentuan Layanan | ')

@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="position-relative">
            <!-- Hero Section -->
            <div class="bg-img-hero space-2" style="background-image: url({{ asset('img/hero-bg-2.png') }});">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-7 col-lg-8">
                            <h1 class="text-lh-sm">Ketentuan Layanan</h1>
                            <p class="small">Update pada 17 Oktober 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Section -->

            <!-- Sidebar Content Section -->
            <div class="container space-top-md-2 position-md-absolute top-0 right-0 left-0">
                <div class="row justify-content-start">
                    <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 position-relative z-index-2">
                        <div class="js-sticky-block card-border" data-hs-sticky-block-options='{
                            "parentSelector": "#stickyBlockStartPoint",
                            "breakpoint": "md",
                            "startPoint": "#stickyBlockStartPoint",
                            "endPoint": "#stickyBlockEndPoint",
                            "stickyOffsetTop": 12,
                            "stickyOffsetBottom": 12
                            }'>
                            <div class="container js-scroll bg-white rouded shadow-lg">
                                <ul class="js-scroll-nav p-2 nav nav-sm nav-x-0 flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link large font-weight-bold mb-2" href="#layanan-kami" style="font-size: 1rem;">Layanan Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold mb-2" href="#sumber-pemasukan" style="font-size: 1rem">Sumber Pemasukan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold mb-2" href="#komitmen" style="font-size: 1rem">Komitmen Anda Terdahadap OCD dan Komunitas Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold mb-2" href="#ketentuan-tambahan" style="font-size: 1rem">Ketentuan Tambahan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sidebar Content Section -->
        </div>

        <!-- Description Section -->
        <div class=" container space-top-2 space-top-md-1">
            <div class="row justify-content-end">
                <!-- <div class="col-md-5 col-lg-4"></div> -->
                <div class="col-md-7 col-lg-8">
                    <div id="">
                        <h3>Selamat Datang di OCD!</h3>
                        <p style="text-align: justify;">
                        One Click Democracy (OCD) adalah sebuah layanan aplikasi yang dikembangkan oleh PT. Teknologi Demokrasi Indonesia yang menyediakan teknologi dan layanan untuk memudahkan masyarakat dan organisasi agar dapat terhubung, menyampaikan aspirasi, dan mengawasi pemerintahan baik eksekutif, legislatif dan yudikatif secara bebas dan aman, dengan tetap patuh pada Undang-Undang Dasar Negara Republik Indonesia dan aturan hukum yang diatur di bawahnya. Ketentuan ini mengatur pengguna layanan atau Anda dalam menggunakan layanan yang Kami tawarkan, dan merupakan suatu perjanjian yang mengikat secara sah antara Anda dan Kami.
                        </p>
                    </div>
                    <!-- Section One -->
                    <div id="layanan-kami" class="space-1">
                        <h3 style="text-align: justify; ">1. Layanan Kami</h3>
                        <hr style="text-align: justify;">
                            <p style="text-align: justify; ">OCD hadir agar masyarakat dapat berpartisipasi dalam sebuah negara demokratis dengan cara menyampaikan aspirasi dan mengawasi pemerintah secara langsung melalui sosial media dengan bebas dan aman, namun tetap mengindahkan ketentuan hukum yang berlaku di Indonesia.&nbsp;</p>
                            <p style="text-align: justify;">Adapun layanan yang kami berikan kepada Anda adalah sebagai berikut:</p>
                        <ul>
                            <li style="text-align: justify;"><b>Vox Pop</b></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 25px;">Merupakan sebuah fitur yang dapat Anda gunakan untuk menyampaikan aspirasi dan informasi tentang isu politik dan isu publik yang sedang terjadi ataupun yang tengah menjadi perhatian anda. Tidak hanya menyampaikan aspirasi, anda juga dapat menanggapi vox pop pengguna lain dengan cara berkomentar ataupun memberikan reaksi berupa Mendukung, Netral, atau&nbsp; Menolak. Fitur Vox Pop bisa digunakan oleh akun personal, bisnis, media dan pemerintah.</p>
                            <p style="text-align: justify; margin-left: 25px;"><br></p>
                        <ul>
                            <li style="text-align: justify;"><b>Petisi</b></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 25px;">Dengan fitur ini, anda dapat mendorong lembaga negara baik eksekutif, legislatif dan yudikatif untuk mengikuti permohonan anda terhadap suatu isu politik dan isu publik yang sedang terjadi ataupun yang tengah menjadi perhatian anda. Anda juga dapat berpartisipasi untuk menandatangani petisi yang dibuat oleh pengguna lain yang menurut anda sesuai dengan aspirasi anda. Selain itu, anda juga dapat menanggapi petisi pengguna lain dengan cara berkomentar ataupun memberikan reaksi berupa Mendukung, Netral, atau Menolak. Setelah petisi berakhir, sistem kami akan mengirimkan hasil petisi kepada lembaga negara yang anda tujukan untuk kemudian dapat direspon oleh lembaga tersebut. Respon tersebut akan anda terima pada notifikasi anda untuk dapat anda respon kembali dengan reaksi Puas, Netral, atau Tidak Puas.</p>
                            <p style="text-align: justify; margin-left: 25px;"><span style="font-size: 1rem;">Fitur Petisi hanya bisa dibuat oleh akun personal, bisnis dan media. Namun yang bisa menandatangani petisi hanya akun personal.</span></p>
                            <p style="text-align: justify; margin-left: 25px;"><span style="font-size: 1rem;"><br></span></p>
                        <ul>
                            <li style="text-align: justify;"><b>Polling / Jajak Pendapat</b></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 25px;">Jika anda ingin mengetahui pendapat publik mengenai suatu isu politik ataupun isu publik yang sedang terjadi ataupun yang tengah menjadi perhatian anda, anda dapat menggunakan fitur polling ini. Sehingga anda dapat mengukur kecenderungan masyarakat terhadap suatu isu yang mengandung pro dan kontra. Anda juga dapat berpartisipasi untuk mengisi polling yang dibuat oleh pengguna lain dan juga dapat menanggapi polling pengguna lain dengan cara berkomentar ataupun memberikan reaksi berupa Mendukung, Netral, atau Menolak.</p>
                            <p style="text-align: justify; margin-left: 25px;"><span style="font-size: 1rem;">Fitur polling ini bisa dibuat oleh semua jenis akun, namun yang bisa mengisi polling hanya akun personal saja.</span></p>
                            <p style="text-align: justify; margin-left: 25px;"><span style="font-size: 1rem;"><br></span></p>
                        <ul>
                            <li style="text-align: justify;"><b>Kampanye</b></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 25px;">Fitur kampanye ini terbagi tiga:</p>
                        <ul>
                            <li style="text-align: justify; margin-left: 25px;"><span style="font-size: 1rem;">Kampanye Dana</span></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 50px;"><span style="font-size: 1rem;">Pada fitur kampanye ini, Anda dapat menggalang dana untuk tujuan sosial. Dana yang telah terkumpul akan dikirim ke rekening anda untuk direalisasikan pada program yang dikampanyekan.</span></p>
                        <ul>
                            <li style="text-align: justify; margin-left: 25px;"><span style="font-size: 1rem;">Kampanye Relawan</span></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 50px;"><span style="font-size: 1rem;">Jika Anda ingin melakukan suatu kegiatan atau gerakan sosial, Anda dapat menjaring relawan melalui fitur ini. Sehingga proyek sosial Anda dapat direalisasikan dengan lebih baik.</span></p>
                        <ul>
                            <li style="text-align: justify; margin-left: 25px;"><span style="font-size: 1rem;">Kampanye Politi</span></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 50px;">Di fitur ini, para kandidat politik dapat mengampanyekan dan mengumpulkan tiga hal: dukungan, relawan, dan dana. Sehingga, layanan aplikasi ini dapat meningkatkan partisipasi masyarakat dalam dinamika politik di tingkat daerah maupun nasional dengan transparan dan akuntabel.</p>
                            <p style="text-align: justify; margin-left: 50px;"><br></p>
                        <ul>
                            <li style="text-align: justify;"><b>Analisa Isu Populer</b></li>
                        </ul>
                            <p style="text-align: justify; margin-left: 25px;">Selain fitur-fitur di atas, kami juga menyediakan layanan analisa isu populer yang tengah berkembang di dunia maya. Sistem kami akan menyajikan prosentase sentimen masyarakat berdasarkan aktivitas yang ada di platform OCD dengan cakupan sentimen positif, negatif dan netral. Namun, jika Anda ingin mendapatkan sajian prosentase yang lebih spesifik mencakup statistik demografis yang bersumber dari data Kami, maka anda dapat berlangganan layanan akun premium yang kami sediakan.</p>
                    </div>
                    <!-- Section Two -->
                    <div id="sumber-pemasukan" class="space-1">
                        <h3 style="text-align: justify; ">Sumber Pemasukan</h3>
                        <hr style="text-align: justify;">
                        <p style="text-align: justify; ">Kami tidak membebankan biaya kepada Anda atas produk dan layanan yang kami berikan. Sebagai gantinya, pelaku bisnis, individu dan organisasi membayar Kami untuk menampilkan iklan produk dan layanan mereka kepada Anda. Dengan menggunakan produk Kami, Anda setuju bahwa Kami dapat menampilkan iklan kepada mereka yang menurut Kami relevan dengan Anda. Kami menggunakan data pribadi Anda untuk membantu menentukan kesesuaian iklan yang akan ditampilkan kepada mereka. Namun, Kami tidak menjual data pribadi Anda kepada pengiklan, dan juga tidak membagikan informasi yang dapat mengidentifikasi Anda secara langsung (seperti nama, alamat email, nomor identitas atau informasi lainnya) kepada pengiklan. Kami hanya membantu para pengiklan menampilkan konten mereka berdasarkan klasifikasi pemirsa yang mereka inginkan untuk menerima iklannya. Untuk lebih jelasnya, kami memiliki Kebijakan Data yang menjelaskan bagaimana Kami mengumpulkan dan menggunakan data pribadi Anda untuk menentukan kesesuaian iklan yang akan anda lihat dan layanan lainnya.</p>
                        <p style="text-align: justify; ">Namun, jika Anda menggunakan layanan Kampanye Dana dan Kampanye Politik untuk menumpulkan dana baik untuk tujuan sosial maupun politik, maka kami akan membebankan biaya administrasi sebesar 2,5% dari total dana yang terkumpul pada program kampanye pengumpulan dana Anda. Selain itu, kami juga menawarkan layanan berlangganan akun premium dengan kelebihan tertentu dengan biaya berlangganan sebesar Rp 29.000,00- / bulan.</p>
                    </div>
                    <!-- Section Three -->
                    <div id="komitmen" class="space-1">
                        <h3>Komitmen Anda Terhadap OCD dan Komunitas Kami</h3>
                        <hr>
                            <p style="text-align: justify; ">Sebagai ruang publik di dunia maya, Kami ingin Anda berkomitmen pada layanan yang kami
                            berikan dengan ketentuan sebagai berikut:</p>
                        <h4 style="text-align: justify;">Ketentuan pengguna layanan OCD</h4>
                            <p style="text-align: justify;">Untuk mewujudkan OCD sebagai platform sosial media yang bebas dari akun palsu (buzzer)
                            dan berita palsu (hoax), maka kami mensyaratkan kepada Anda untuk memenuhi hal berikut:
                            </p>
                        <ol>
                            <li style="text-align: justify;">Berusia di atas 18 tahun dan/atau sudah memiliki Identitas Diri seperti KTP/SIM.</li>
                            <li style="text-align: justify;">Menggunakan nama yang sesuai pada identitas diri Anda.</li>
                            <li style="text-align: justify;">Mencantumkan informasi data pribadi yang benar dan akurat.</li>
                            <li style="text-align: justify;">Memverifikasi identitas diri dan gambar swafoto pribadi sambil memegang kartu identitas yang digunakan.</li>
                            <li style="text-align: justify;">Tidak membuat lebih dari satu akun dan/atau membuat akun atas nama orang lain.</li>
                            <li style="text-align: justify;">Tidak memberikan akses akun Anda kepada orang lain.</li>
                            <li style="text-align: justify; ">Anda bertanggung jawab penuh atas semua aktivitas yang menggunakan akun Anda (termasuk jika ada bahaya atau kerugian kepada kami atau orang lainnya) </li>
                            <li style="text-align: justify;">Apabila Anda menemukan seseorang menggunakan akun Anda tanpa seizin Anda segera beritahukan kepada kami dengan menghubungi Pusat Bantuan.</li>
                        </ol>
                        <h4 style="text-align: justify;">Jenis Akun</h4>
                        <ul>
                            <li>
                                <div style="text-align: justify;"><span style="font-size: 1rem;">Akun Pribadi</span></div>
                                <p style="text-align: justify;">Bagi Anda yang merupakan masyarakat umum, kami menyarankan Anda untuk
                                menggunakan jenis akun ini. Akun pribadi ini memberikan kebebasan kepada Anda
                                untuk menyuarakan aspirasi pribadi anda. Sebagai pengguna akun pribadi, Anda
                                dapat menggunakan semua layanan yang diberikan oleh One Click Democracy setelah
                                melakukan verifikasi akun. Jangan lupa untuk tetap memperhatikan aturan hukum
                                yang berlaku di Indonesia.</p>
                            </li>
                            <li>
                                <div style="text-align: justify;"><span style="font-size: 1rem;">Akun Media</span></div>
                                <p style="text-align: justify;">Dalam upaya memberikan kesempatan bagi Anda yang merupakan perusahaan
                                media, Anda dapat membuat akun dengan jenis ini. Dengan cara melakukan
                                verifikasi identitas atas nama perusahaan atau organisasi yang mencantumkan
                                website dan email resmi serta nomor telepon dan informasi lainnya yang lengkap
                                dan akurat. Sebagai pengguna akun media, Anda dapat menggunakan semua layanan
                                yang disediakan oleh One Click Democracy, kecuali menandatangani Petisi dan
                                mengisi Polling.</p>
                            </li>
                            <li>
                                <div style="text-align: justify;"><span style="font-size: 1rem;">Akun Bisnis</span></div>
                                <p style="text-align: justify;">Untuk memudahkan Anda dalam memilih dan membedakan akun bisnis, kami
                                membagi akun ini menjadi dua jenis yaitu akun bisnis organisasi dan bisnis
                                personal. Bagi Anda yang memiliki organisasi baik profit, nirlaba atau partai
                                politik dapat membuat akun dengan identitas organisasi yang akurat dan lengkap
                                seperti website dan email resmi serta informasi lain yang dibutuhkan dalam
                                proses validasi ketika pendaftaran. Kemudian, untuk akun bisnis pribadi dapat
                                dibuat oleh Anda merupakan tokoh masyarakat, tokoh politik, aktivis, maupun
                                influencers yang dibuktikan dengan identitas pribadi serta bukti lainnya yang
                                mendukung untuk proses validasi ketika pendaftaran. Sebagai pengguna akun
                                bisnis, Anda dapat menggunakan semua layanan yang disediakan oleh One Click
                                Democracy, hanya saja untuk memberikan dukungan Anda dalam suatu petisi dan
                                polling Anda harus membuat akun pribadi.</p>
                            </li>
                            <li>
                                <div style="text-align: justify;"><span style="font-size: 1rem;">Akun Pemerintahan</span></div>
                                <p style="text-align: justify;">Kami memberikan layanan kepada pemerintah untuk membuat dan
                                menggunakan One Click Democracy sebagai media penghubung kepada masyarakat untuk
                                terciptanya pemerintahan yang terbuka dan maju. Akun ini ditujukan kepada
                                lembaga negara baik dari lembaga eksekutif, legislatif, dan yudikatif. Untuk
                                pendaftaran akun pemerintah, kami akan menghubungi nomor atau email lembaga
                                pemerintah terkait untuk memverifikasi akun Anda. Sebagai pengguna akun bisnis,
                                Anda dapat menggunakan semua layanan yang disediakan oleh One Click Democracy,
                                kecuali membuat dan menandatangani petisi, dan mengisi polling.</p>
                            </li>
                        </ul>
                        <h4 style="text-align: justify;">Ketentuan berbagi dan aktivitas di OCD</h4>
                            <p style="text-align: justify;">Kami memberikan kebebasan dan kepercayaan bagi Anda untuk mengelola dan menggunakan akun
                            Anda sendiri. Tetapi, Anda harus memastikan bahwa dalam menggunakan dan atau mengelola
                            akun, Anda telah sesuai dan mematuhi&nbsp; standar komunitas kami. Kami menyarankan Anda
                            untuk selalu menjaga konten, kampanye, komentar dan lainnya sesuai dengan pedoman dan
                            aturan hukum yang berlaku di Republik Indonesia, serta menghormati hak-hak kekayaan
                            intelektual orang lain. Kami tidak ingin untuk melakukan pembatasan bagi Anda dalam
                            menggunakan semua layanan kami, tetapi jika itu harus dilakukan demi keamanan dan
                            kenyamanan bersama, maka kami dapat menghentikan akun Anda untuk pelanggaran berulang
                            dan atau pelanggaran berat jika diperlukan.</p>
                            <blockquote class="blockquote" style="text-align: justify;">"Mari kita saling menjaga dan menghormati pengguna lain
                            dengan mematuhi aturan hukum yang berlaku di Indonesia dan menghargai hak-hak orang
                            lain, serta Pedoman Komunitas kami, agar kebebasan dalam berekspresi dapat terus kita
                            lakukan bersama. Kami percaya kepada Anda, karena itu kami memberi tanggung jawab penuh
                            kepada Anda untuk setiap konten yang Anda buat dan berbagai kemungkinan akibat yang
                            ditimbulkan."</blockquote>
                            <p style="text-align: justify;">Kami tidak ingin membatasi Anda dalam menggunakan semua layanan kami, tetapi jika kami
                            mengetahui atau diberi tahu bahwa konten Anda melanggar hukum atau hak-hak orang lain
                            (misalnya, menyebar berita bohong, mencemarkan, melanggar privasi, kekayaan intelektual
                            atau hak-hak publisitas atau lainnya), berikut beberapa ketentuan hukum yang kami
                            buat&nbsp; sejalan dengan konstitusi di Negara Kesatuan Republik Indonesia untuk
                            memberikan Anda gambaran beberapa aturan hukum yang harus dipatuhi:</p>
                        <ol>
                            <li style="text-align: justify;">Anda tidak boleh menyamar sebagai orang lain atau memberikan informasi yang tidak akurat.</li>
                            <li style="text-align: justify;">Anda tidak boleh mendistribusikan dan/atau mentransmisikan dan/atau membuat dapat diaksesnya Informasi Elektronik dan/atau Dokumen Elektronik yang memiliki muatan melanggar kesusilaan, perjudian, penghinaan, pencemaran nama baik, pemerasan, pengancaman.</li>
                            <li style="text-align: justify;">Anda tidak boleh menyebarkan berita bohong dan menyesatkan. </li>
                            <li style="text-align: justify;">Anda tidak boleh menyebarkan informasi yang memuat ujaran kebencian atau permusuhan individu dan/atau kelompok masyarakat.</li>
                            <li style="text-align: justify;">Anda tidak boleh mengirimkan informasi elektronik dan/atau Dokumen Elektronik yang berisi ancaman kekerasan atau menakut-nakuti yang ditujukan secara pribadi.</li>
                            <li style="text-align: justify;">Anda tidak boleh mengakses akun milik orang lain dengan cara apa pun.</li>
                            <li style="text-align: justify;">Anda tidak boleh mencoba untuk membuat akun atau mengakses maupun mengumpulkan informasi secara tidak sah.</li>
                            <li style="text-align: justify;">Anda tidak boleh melakukan pelanggaran hukum, menipu, maupun perbuatan untuk tujuan ilegal atau dilarang. Pelanggaran hukum sebagaimana dimaksud dalam Kitab Undang-undang Hukum Pidana dan/atau aturan hukum lainnya yang berlaku di Indonesia.</li>
                            <li style="text-align: justify;">Anda tidak boleh memposting informasi pribadi, informasi rahasia, atau melakukan apa pun yang melanggar hak milik orang lain, termasuk hak kekayaan intelektual.</li>
                            <li style="text-align: justify;">Anda tidak boleh menggugah virus, kode yang berbahaya, atau melakukan apa pun yang dapat menonaktifkan, membebani maupun merusak kinerja dan/atau tampilan produk kami yang semestinya.</li>
                        </ol>
                            <p style="text-align: justify;">Apabila&nbsp; kami menetapkan bahwa konten Anda melanggar Pedoman Komunitas kami, atau
                            jika kami memutuskan bahwa konten Anda tidak pantas atau tidak senonoh, dengan berat
                            hati kami akan menghapus konten tersebut dari platform kami, atau kami akan menggunakan
                            edit untuk menjadikan konten Anda sesuai. Dalam upaya kami untuk memberikan edukasi
                            kepada Anda kami akan memberitahukan Anda dan atau mencoba untuk bekerja sama dengan
                            Anda dalam upaya memperbaiki masalah tersebut sebelum kami mengambil salah satu dari
                            tindakan ini (tetapi, kami tidak berkewajiban).</p>
                            <p style="text-align: justify;">Dalam rangka menjamin terciptanya keamanan dan kenyamanan saat menggunakan One Click
                            Democracy, maka kami memiliki kebijakan dalam melaksanakan Ketentuan ini. Kami dapat
                            menghentikan atau menangguhkan izin Anda untuk menggunakan platform dan layanan kami
                            atau menonaktifkan akun Anda ketika kepercayaan yang kami berikan dirusak. Demi kebaikan
                            dan bertambahnya pengetahuan Anda tentang apa yang Anda lakukan, kami tidak akan
                            membiarkan anda kebingungan karena kami akan memberikan pemberitahuan melalui notifikasi
                            dan/atau email yang telah di verifikasi dalam akun Anda. Pemberitahuan atas pelanggaran
                            terhadap ketentuan ini dan atau aturan hukum yang berlaku, kelalaian Anda untuk membayar
                            biaya apapun sampai jatuh tempo, karena permintaan lembaga penegakan hukum atau
                            pemerintah, untuk masalah teknis yang tidak terduga, keterlibatan Anda dalam aktivitas
                            curang atau ilegal. Akibat dari perbuatan tersebut, kami dapat menghapus akun, kata
                            sandi, dan konten Anda dan kami dapat mencegah Anda untuk mengakses lebih lanjut ke
                            platform ini dan menggunakan layanan kami. Konten Anda mungkin masih ada di platform ini
                            meskipun akun Anda dihentikan atau ditangguhkan. Anda setuju bahwa kami tidak akan
                            bertanggung jawab kepada Anda atau pihak ketiga mana pun atas penghentian akun Anda,
                            penghapusan konten Anda, atau pemblokiran akses Anda ke platform dan layanan kami.</p>
                            <p style="text-align: justify;">Ketentuan perizinan Anda kepada kami</p>
                            <p style="text-align: justify;">Layanan kami memerlukan izin tertentu dari Anda untuk dapat berjalan sebagaimana yang
                            diharapkan. Izin tersebut seperti izin penggunaan konten yang Anda buat dan bagikan
                            seperti tulisan, foto, video, dan lainnya.</p>
                            <p style="text-align: justify;">Anda tetap memiliki hak kekayaan intelektual (hal-hal seperti hak cipta atau merek
                            dagang) untuk konten yang Anda buat dan bagikan di One Click Democracy. Jadi kami tidak
                            dapat mengambil hak yang Anda miliki atas konten yang Anda bagikan. Namun, kami
                            memerlukan Anda untuk memberikan izin kepada kami untuk menggunakan konten tersebut
                            untuk tujuan penyediaan layanan dan peningkatan produk kami.</p>
                            <p style="text-align: justify;">Sebagai contoh, misalkan Anda membagikan foto di One Click Democracy, maka artinya Anda
                            juga memberi izin pada kami untuk menyimpan, menyalin, dan membagikannya kepada orang
                            lain yang sesuai dengan pengaturan akun Anda.</p>
                            <p style="text-align: justify;">Namun, ketika Anda dapat menghapus konten yang telah Anda bagikan atau menghapus akun
                            Anda. Maka perizinan penggunaan konten Anda kepada kami secara otomatis juga akan
                            berakhir.</p>
                            <p style="text-align: justify;">Penghapusan konten yang Anda lakukan juga berkonsekuensi hilangnya tanggung jawab kami
                            untuk menyediakan barang bukti untuk kebutuhan penyelidikan atau pengidentifikasian
                            aktivitas ilegal atau pelanggaran ketentuan dan kebijakan kami. Dengan demikian, Kami
                            tidak berkewajiban dan terlepas dari kewajiban mematuhi permintaan dari lembaga hukum
                            atau lembaga administratif, lembaga penegakan hukum, atau lembaga pemerintahan yang
                            meminta konten Anda yang sudah dihapus untuk keperluan barang bukti dan lainnya.
                            Selanjutnya, tanggung jawab tersebut sepenuhnya akan ditanggung oleh pengguna akun yang
                            menghapus kontennya.</p>
                            <p style="text-align: justify;">Selain itu, kami juga memperoleh izin untuk menggunakan nama, foto profil, dan informasi
                            tindakan atau aktivitas Anda untuk keperluan penyesuaian target iklan, promo, dan konten
                            bersponsor. Dalam hal ini, kami tidak perlu memberi Anda kompensasi dalam bentuk apa
                            pun.</p>
                            <p style="text-align: justify;">Anda juga memberi izin pada kami untuk mengupdate perangkat lunak One Click Democracy
                            yang telah Anda unduh ketika versi terbaru perangkat lunak kami sudah tersedia.</p>
                        <h4 style="text-align: justify;">Ketentuan hak kekayaan intelektual</h4>
                            <blockquote class="blockquote" style="text-align: justify;">Segera laporkan kepada kami, jika Anda menemukan ada
                            seseorang yang melanggar hak cipta Anda atau orang lain yang anda tahu di One Click
                            Democracy.</blockquote>
                            <p style="text-align: justify;">Kami berkomitmen untuk membantu menjamin terciptanya perlindungan hak cipta setiap
                            pengguna layanan kami. Karena itu, apabila Anda meyakini bahwa salah seorang pengguna
                            kami telah melanggar hak cipta Anda, bantu kami untuk bertindak dengan membuat laporan
                            secara tertulis dengan muatan sebagai berikut:</p>
                        <ol>
                            <li style="text-align: justify;">Memuat identifikasi karya hak cipta Anda</li>
                            <li style="text-align: justify;">Memuat informasi yang memadai tentang di mana materi tersebut berada (seperti URL atau tautan ke halaman yang terkait)</li>
                            <li style="text-align: justify;">Memuat informasi data diri untuk menghubungi Anda (alamat, nomor telepon, atau email)</li>
                            <li style="text-align: justify;">Melampirkan surat pernyataan bahwa apa yang anda laporkan adalah akurat</li>
                            <li style="text-align: justify;">Mengirim semua dokumen tersebut ke support@oneclickdemocracy.com</li>
                        </ol>
                    </div>
                    <!-- Section Four -->
                    <div id="ketentuan-tambahan" class="space-1">
                        <h3>Ketentuan Tambahan</h3>
                        <hr>
                        <h4 style="text-align: justify; ">Memperbarui&nbsp; Ketentuan</h4>
                            <p style="text-align: justify;">Untuk menyempurnakan dan mengembangkan fitur-fitur guna membuat One Click Democracy
                            menjadi lebih baik lagi dan lebih akurat untuk dipergunakan dari waktu ke waktu. Kami
                            akan melakukan perubahan untuk ketentuan yang sudah tidak sesuai atau kurang lengkap.
                            Kami akan memberitahu jika terjadi perubahan yang berkaitan dengan penggunaan One Click
                            Democracy kecuali jika perubahan tersebut diwajibkan secara hukum. Ketentuan terbaru
                            yang diberlakukan secara langsung mengikat Anda selama Anda menggunakan layanan kami.
                            </p>
                        <h4 style="text-align: justify;">Penutupan atau penghapusan akun</h4>
                            <p style="text-align: justify;">Kami berkomitmen untuk menjamin setiap pengguna kami bebas dalam bersuara dan berekspresi
                            sebagai salah satu implementasi dari negara demokrasi. karena itu, kami menetapkan jika
                            Anda melanggar kebijakan Ketentuan atau Kebijakan kami secara jelas, berulang, maka kami
                            akan menutup atau menonaktifkan akses ke akun Anda secara permanen. Kami juga dapat
                            menangguhkan atau menonaktifkan akun Anda jika Anda melanggar hak kekayaan intelektual
                            orang lain, melanggar aturan hukum yang berlaku dan atau ketika kami diharuskan untuk
                            melakukannya dalam rangka pelaksanaan putusan pengadilan atau alasan hukum tertentu.</p>
                        <h4 style="text-align: justify;">Batasan kewajiban</h4>
                        <ol>
                            <li style="text-align: justify;">Kami tidak dapat mengontrol perilaku atau tindakan pengguna, kami hanya memberikan pedoman dan batasan sebagaimana aturan hukum yang berlaku;</li>
                            <li style="text-align: justify;">Kami tidak bertanggung jawab atas tindakan dan atau perilaku yang mungkin dilakukan pengguna layanan kami yang dapat menyinggung atau mengganggu Anda (baik yang bersifat online dan offline); </li>
                            <li style="text-align: justify;">Kami tidak dapat menjamin bahwa produk kami One Click Democracy bebas dari hambatan, kesalahan, gangguan, masalah atau kecacatan pada saat digunakan;</li>
                            <li style="text-align: justify;">Kami tidak dapat bertanggung jawab atas segala bentuk kerugian kepada Anda yang disebabkan oleh kelalaian Anda dan atau orang lain dan atau oknum tertentu.</li>
                        </ol>
                        <h4 style="text-align: justify;">Sengketa</h4>
                            <p style="text-align: justify;">Apabila terjadi sengketa antara Anda dan kami, atau antara pihak lainnya dengan pengguna
                            One Click Democracy atau pihak lain dengan kami. Kami berupaya menyelesaikan sengketa
                            dengan mengedepankan prinsip kekeluargaan, namun apabila tidak ditemui kesepakatan dalam
                            penyelesaian sengketa maka dapat menempuh jalur hukum sebagaimana ketentuan
                            perundang-undangan yang mengatur dan berlaku di Indonesia.</p>
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