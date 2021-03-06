@extends('layouts.layout')

@section('title', 'Standar Komunitas | ')

@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="position-relative">
            <!-- Hero Section -->
            <div class="bg-img-hero space-2 space-top-3" style="background-image: url(img/hero-bg-2.png);">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-7 col-lg-8">
                            <h1 class="text-lh-sm">Standar Komunitas</h1>
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
                            "targetSelector": "#basicLogoAndNav",
                            "breakpoint": "md",
                            "startPoint": "#stickyBlockStartPoint",
                            "endPoint": "#stickyBlockEndPoint",
                            "stickyOffsetTop": 32,
                            "stickyOffsetBottom": 12
                            }'>
                            <div class="container js-scroll bg-white rouded shadow-lg">
                                <ul class="js-scroll-nav p-2 nav nav-sm nav-x-0 flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pendahuluan">Pendahuluan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#bagian-i-akun" >Bagian I Akun</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#bagian-ii-konten" >Bagian II Konten</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#permintaan-pengguna" >Permintaan Pengguna</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#informasi-tambahan" >Informasi Tambahan</a>
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
                    <!-- Section One -->
                    <div class="card border box-shadow p-4 text-justify">
                        <div id="pendahuluan" class="space-bottom-1">
                            <h3 style="text-align: justify; ">PENGANTAR</h3>
                            <hr style="text-align: justify;">
                            <p style="text-align: justify; ">One Click Democracy (OCD) adalah sebuah aplikasi layanan milik PT. Teknologi Demokrasi Indonesia yang menyediakan teknologi dan layanan untuk memudahkan masyarakat dan organisasi agar dapat terhubung, menyampaikan aspirasi, dan mengawasi pemerintahan secara bebas dan aman dengan tetap patuh pada Undang-Undang Dasar Negara Republik Indonesia serta aturan hukum yang berpayung di bawahnya.</p><p style="text-align: justify;">Kami menyadari kemudahan dan keamanan adalah esensi penting untuk menjamin agar setiap orang dapat beraspirasi dan merespon segala isu publik di negara ini. Karena itu, kami membuat Standar Komunitas yang memuat ketentuan tentang hal-hal yang diizinkan dan tidak diizinkan dalam menggunakan layanan kami. <b>Standar Komunitas ini berlaku bagi setiap pengguna OCD dan untuk semua layanan yang kami sediakan.</b></p><p style="text-align: justify;">Anda dapat melaporkan semua jenis akun dan/atau konten yang berpotensi melanggar, termasuk komentar. Kami memberi kesempatan kepada Anda untuk memilih akun untuk diikuti atau di blokir agar tidak saling terhubung. Konsekuensi atas pelanggaran Standar Komunitas kami beragam, bergantung pada jenis pelanggaran yang dilakukan. Kami juga dapat melaporkan Anda kepada penegak hukum jika berpotensi mengancam bahaya fisik, keselamatan dan/atau kepentingan umum.</p><p style="text-align: justify;"><b>Tujuan </b>kami adalah membangun komunitas yang bebas dalam bersuara dan bertanggung jawab untuk mewujudkan negara yang lebih demokratis. Kami membutuhkan komitmen Anda Bersama, untuk itu Kami menyusun standar komunitas ini dalam rangka <b>menjamin setiap orang dapat bersuara demi kepentingan umum</b>. Kami menyadari internet membuka peluang terjadinya penyalahgunaan, karena itu beberapa hal dalam bersuara akan dibatasi untuk menegakkan beberapa nilai berikut:</p><ul><li style="text-align: justify;"><b>Kebebasan </b>: kami ingin memberikan kebebasan bagi seluruh warga negara Indonesia agar&nbsp; dapat terhubung, menyampaikan aspirasi, dan mengawasi pemerintahan. Kami yakin dengan kebebasan yang terjamin bisa menjadikan Indonesia sebagai negara yang lebih demokratis.</li><li style="text-align: justify;"><b>Transparansi </b>: kami ingin menjadikan OCD sebagai platform yang jernih dari berita palsu serta akun palsu, kami berkomitmen membuat sistem politik Indonesia yang lebih baik dengan menyajikan keadaan yang nyata tanpa manipulasi. Karena itu, kami tidak ingin orang menggunakan OCD dengan tidak transparan. Kami berusaha merangkul semua pengguna untuk menciptakan sistem yang transparan.</li><li style="text-align: justify;"><b>Tanggungjawab</b>: setiap pengguna OCD memiliki hak yang sama dalam bersuara. Kami berharap setiap orang dapat saling menghargai dan menghormati hak-hak orang lain. Karena itu, kami mendorong setiap individu untuk bertanggung jawab atas akun dan setiap Tindakan yang dapat berpotensi dan mempengaruhi kondisi, dalam menggunakan OCD.</li><li style="text-align: justify;"><b>Keamanan</b>: Kami hadir untuk memberikan rasa aman dalam bersuara. Karena itu, kami berupaya untuk melindungi Anda dari berbagai potensi yang mengancam orang seperti mengintimidasi, mengucilkan, atau membungkam orang lain ketika membuat dan menggunakan layanan kami, hal ini tidak diizinkan di OCD.</li></ul>
                        </div>
                        <!-- Section Two -->
                        <div id="bagian-i-akun" class="space-bottom-1">
                            <h3 style="text-align: justify; ">BAGIAN I AKUN</h3>
                            <hr style="text-align: justify;">
                            <p style="text-align: justify; ">Kami ingin semua yang ada dalam layanan Kami adalah informasi yang orisinal. Kami ingin Anda berkomitmen untuk tidak menggunakan identitas palsu, tidak memberikan data diri yang dimanipulasi, berperilaku palsu, spam, keamanan cyber, memanipulasi media.</p><p style="text-align: justify; ">LARANGAN:&nbsp;</p><ol><li style="text-align: justify; ">Menggunakan nama yang tidak sesuai dengan nama yang tertera di identitas;</li><li style="text-align: justify; ">Memalsukan identitas dan atau menggunakan identitas orang lain (termasuk foto orang lain tanpa izin) untuk kepentingan pribadi dan/atau kepentingan orang lain (kami dapat menghapus akun Anda apabila ditemukan memalsukan identitas dan/atau menggunakan identitas orang lain, memberikan informasi data diri palsu);</li><li style="text-align: justify; ">Memanipulasi data diri dan atau dokumen pendukung lainnya;</li><li style="text-align: justify; ">Memberikan akun kepada orang lain (menggunakan akun bersama);</li><li style="text-align: justify; ">Membuat akun dan/atau konten kembali setelah dilarang dari situs karena melanggar dan/atau terlibat dalam kasus hukum lainnya;</li><li style="text-align: justify; ">Melakukan penyamaran dengan merepresentasikan diri untuk berbicara mewakili orang atau entitas lain yang tidak sesuai dengan personanya;</li><li style="text-align: justify; ">Membuat akun yang mengambil persona seakan-akan mewakili orang dan atau merupakan entitas lain, yang bukan kewenangannya;</li><li style="text-align: justify; ">Membuat konten (semua fitur yang tersedia dalam OCD), komentar yang berisi gambar dan atau lainnya guna menipu publik tentang asal konten tanpa izin dan dapat berpotensi bagi kepentingan umum;</li><li style="text-align: justify; ">Melakukan spam dengan cara memposting, membagikan, berinteraksi dengan konten, atau membuat akun, grup, halaman, acara, atau aset lainnya, baik secara manual atau otomatis, pada frekuensi yang sangat tinggi;</li><li style="text-align: justify; ">Melakukan pelbagai bentuk pemalsuan pada saat menggunakan layanan OCD.</li></ol>
                        </div>
                        <!-- Section Three -->
                        <div id="bagian-ii-konten" class="space-bottom-1">
                            <h3>BAGIAN II KONTEN</h3>
                            <hr>
                            <p>Setelah membuat akun Anda dapat menggunakan semua layanan yang Kami sediakan, dalam menggunakan layanan atas nama akun yang telah Anda buat Kami menyebutnya sebagai konten (semua fitur dalam OCD dalam bentuk gambar, tulisan, video, audio, ilustrasi dan lainnya) yaitu setiap informasi yang tersedia melalui OCD.</p><p><b>LARANGAN</b></p><p>Kami tidak mengizinkan konten yang mengandung unsur kebohongan, penggunaan data dan/atau karya milik orang lain (hak kekayaan intelektual), kekerasan dan kriminal.</p><ol><li><span style="font-size: 1rem;">Membuat konten yang berisi kebohongan dan/atau informasi yang tidak benar;</span></li><li>Menggunakan gambar dan atau karya milik orang lain tanpa seizin yang bersangkutan;</li><li>Membuat dan atau menggunakan ciptaan orang lain tanpa izin pencipta atau pemegang hak cipta dengan tujuan komersial atau tujuan lain yang merugikan;</li><li>Membuat dan atau menggunakan potret yang dibuatnya guna kepentingan komersial tanpa persetujuan tertulis dari orang yang ada dalam potret atau ahli warisnya;</li><li>Membagikan tanpa izin konten karya siaran lembaga penyiaran dengan tujuan komersial.</li><li>Membuat konten yang memuat hinaan atau ketidaksetujuan dengan muatan ancaman kekerasan;</li><li>Memposting atau menyuarakan dalam bentuk apapun (pernyataan, ajakan, dukungan) yang memuat ancaman kekerasan yang berpotensi mengakibatkan kematian, cedera serius, bahaya fisik, mengancam keselamatan seseorang atau publik;</li><li>Memposting atau membagikan konten yang memuat penawaran atau permintaan untuk membunuh dan atau menculik seseorang;</li><li>Membuat ancaman dalam bentuk apapun dengan target yang ditentukan maupun yang tidak ditentukan tetapi simbolnya menunjukkan target tersebut atau Pernyataan aspirasional atau bersyarat untuk melakukan kekerasan;</li><li>Memposting dalam bentuk apapun yang menunjukkan instruksi, cara membuat atau menggunakan benda tajam atau yang membahayakan dengan tujuan untuk membunuh atau mencederai orang lain yang ditampilkan dalam bahasa atau visual. Kecuali, untuk pertahanan diri yang bersifat rekreatif, latihan militer, video game komersial, tujuan ilmiah, atau liputan berita (diposting oleh Halaman atau dengan logo berita);</li><li>Memposting dalam bentuk apapun yang memuat instruksi tentang membuat atau menggunakan bahan peledak (kecuali untuk kepentingan pendidikan yang jelas, video game komersial, latihan militer, atau kepentingan berita yang jelas);</li><li>Membuat disinformasi atau rumor yang tidak bisa diverifikasi kebenarannya sehingga menimbulkan risiko kekerasan atau bahaya fisik yang menyebabkan kematian;</li><li>Mempermaklumkan misi kekerasan atau terlibat dalam aksi kekerasan dalam menggunakan layanan kami. Seperti, aktivitas terorisme, kebencian yang terorganisir, pembunuhan massal (termasuk upaya pembunuhan), pembunuhan berantai, perdagangan manusia, dan aktivitas kekerasan atau tindakan kriminal yang terorganisir;</li><li>Memberikan dukungan dalam bentuk pernyataan, pujian, dan membagikan postingan untuk individu atau organisasi yang terlibat dalam aktivitas terorisme atau gerakan kekerasan lainnya;</li><li>Membuat akun yang bertujuan atau terencana yang dapat menyebabkan kematian, cedera, atau bahaya serius bagi warga sipil, atau orang lain dan/atau kerusakan signifikan pada properti yang berkaitan dengan kematian, cedera serius, atau bahaya serius bagi warga sipil;</li><li>Membuat akun yang bertujuan untuk politik, agama, ideologis yang memaksa, mengintimidasi, dan/atau memengaruhi masyarakat sipil, pemerintah, atau organisasi internasional dengan ancaman dan kekerasan atau cara lain yang berlawanan dengan aturan hukum;</li><li>Membuat akun dengan tujuan melakukan pembunuhan massal, pembunuhan berantai, termasuk upaya pembunuhan, terorisme, aktivitas kekerasan, kriminal terorganisir dan segala tindakan yang melanggar aturan hukum;</li><li>Menggunakan nama palsu, martabat palsu dengan tipu muslihat ataupun rangkaian kebohongan untuk menguntungkan diri sendiri atau orang lain secara melawan hukum mengerakkan seseorang untuk menyerahkan barang sesuatu kepadanya atau supaya memberi utang maupun menghapus kan piutang;</li><li>Melakukan penyuapan, penggelapan, Pencucian uang (penyembunyian asal-usul uang yang diperoleh dari tindakan kriminal)</li><li>Penipuan yang berkedok amal atau kampanye penggalangan dana palsu</li><li>Penipuan Pemutihan Hutang atau Perbaikan Kredit</li><li>Memposting barang dengan izin khusus seperti senjata api, obat-obatan non medis, obat-obatan farmasi, ganja, alkohol, hewan langka, darah manusia, artefak sejarah (kecuali untuk kepentingan umum seperti edukasi atau kepentingan lainnya yang sesuai dengan norma hukum)</li></ol><p>Konten yang mengandung ujaran kebencian</p><ol><li>Ujaran kebencian dapat berupa penghinaan, pencemaran nama baik, penistaan, perbuatan tidak menyenangkan, memprovokasi, menghasut, penyebaran berita bohong, merendahkan, menyerang dan berkobar-kobar dengan niat untuk menimbulkan dampak tertentu baik secara langsung maupun tidak langsung.</li><li>Ujaran kebencian bertujuan untuk menghasut dan menyulut kebencian terhadap individu dan/atau kelompok masyarakat bisa berdampak pada tindak diskriminasi, kekerasan, penghilangan nyawa, dan/atau konflik sosial suku; dalam berbagai komunitas yang dibedakan dari aspek:<ol><li>Agama;</li><li>aliran keagamaan;</li><li>keyakinan/kepercayaan;</li><li>Ras;</li><li>Antargolongan;</li><li>warna kulit;</li><li>Etnis;</li><li>Gender;</li><li>kaum difabel (cacat);</li><li>orientasi seksual.</li></ol></li><li>Membuat ujaran dan atau dukungan berupa visual maupun gambar yang memuat penghinaan, pencemaran nama baik, penistaan, perbuatan tidak menyenangkan, memprovokasi, menghasut, penyebaran berita bohong, merendahkan, menyerang dan berkobar-kobar dengan niat untuk menimbulkan dampak tertentu baik secara langsung maupun tidak langsung yang ditujukan bagi individu dan/atau kelompok masyarakat tertentu;</li><li>Membuat ujaran dan atau dukungan yang tidak manusiawi guna membandingkan, generalisasi, dan atau pernyataan sikap yang ditujukan untuk seseorang atau golongan tertentu;</li><li>Membuat ujaran dan atau dukungan yang menyatakan perasaan permusuhan, kebencian, atau merendahkan satu atau lebih suku bangsa Indonesia;</li><li>Membuat konten yang mempertunjukkan, menyiarkan, tulisan atau gambar yang memuat pernyataan perasaan permusuhan, kebencian atau penghinaan di antara atau terhadap golongan-golongan rakyat Indonesia;</li><li>Membuat ujaran yang menyerang kehormatan atau nama baik seseorangan dengan menuduhkan sesuatu hal yang maksudnya terang supaya hal diketahui umum;</li><li>Menyebarkan berita bohong yang menyesatkan dan mengakibatkan kerugian konsumen dalam transaksi elektronik;</li><li>Membuat ujaran dengan sengaja dan tanpa hak menyebarkan informasi dengan tujuan untuk menimbulkan rasa kebencian atau permusuhan antara individu dan atau kelompok masyarakat tertentu berdasarkan SARA;</li><li>Membuat ujaran yang menunjukkan kebencian kepada orang lain berdasarkan ras dan etnis tertentu.</li></ol><p>Tindakan melukai tubuh dengan sengaja termasuk bunuh diri, penyimpangan makan, eksploitasi sosial, pelecehan, ketelanjangan anak, eksploitasi seksual orang dewasa, perundungan (bullying), eksploitasi manusia, pelanggaran privasi dan hak privasi, gambar sadis tertentu yang dapat mendorong orang untuk melakukan.</p><ol><li>Membuat konten yang memuat ajakan, mengkoordinir, instruksi, promosi untuk bunuh diri atau melukai tubuh secara sadis dengan sengaja dan langsung (termasuk mutilasi dan penyimpangan pola makan yang ekstrim), termasuk gambar sadis tertentu;</li><li>Membuat konten yang mengidentifikasi dan secara negatif menarget orang yang selamat dari tindakan melukai diri atau bunuh diri;</li><li>Membuat konten yang berisi petunjuk menurunkan berat badan secara drastis dan tidak sehat;</li><li>Membuat konten yang mengeksploitasi secara seksual atau membahayakan anak-anak (eksploitasi anak);</li><li>Membuat konten yang memuat dukungan atau keterlibatan dalam aktivitas seksual dengan anak di bawah umur;</li><li>Melakukan pelecehan seksual terhadap anak dan perempuan melalui tulisan, gambar, video dan lainnya;</li><li>Membuat konten yang memuat gambar/foto ketelanjangan (memperlihatkan alat kelamin, anus, puting payudara perempuan), seksual;</li><li>Membuat konten yang berisi dukungan, promosi, advokasi, instruksi, dorongan untuk melakukan pelecehan anak dan perempuan;</li><li>Membuat konten yang menampilkan pornografi, prostitusi, dan kekerasan seksual;</li><li>Membuat konten yang memuat ejekan atau penghinaan terhadap korban kekerasan seksual atau korban pelecehan.</li><li>Membuat konten yang menggambarkan, mengancam, mempromosikan, dan mendukung kekerasan seksual, serangan seksual, eksploitasi seksual.</li><li>Membuat konten yang mendukung pernyataan, ajakan, ancaman, permintaan, penghinaan dalam bentuk foto/video, yang memuat pelepasan pakaian yang dipaksa.</li><li>Membuat konten yang mengeksploitasi orang atau target tertentu dengan tujuan untuk menghancurkan atau merugikan orang lain.</li><li>Membuat konten yang berisi pernyataan, ajakan, dukungan berupa perundungan dan/atau pelecehan yang dapat dilakukan dalam berbagai bentuk seperti menyerang korban pelecehan seksual, eksploitasi seksual, atau kekerasan dalam rumah tangga.</li><li>Membuat konten yang berisi hujatan dengan menggunakan kata-kata berkonotasi negatif atau penghinaan (seperti pelacur, jalang);</li><li>Membuat konten yang berisi ancaman untuk menyebarkan data pribadi orang lain.</li><li>Membuat konten yang berisi eksploitasi manusia, atau perdagangan manusia, termasuk memaksa untuk&nbsp; terlibat dalam seks komersial, kerja paksa, atau aktivitas lainnya yang bertentangan dengan keinginan dan merampas kebebasan;</li><li>Membuat konten yang menawarkan atau permintaan jasa penyelundupan manusia;</li><li>Membuat konten yang memfasilitasi pencurian identitas dengan memposting atau meminta informasi identifikasi pribadi.</li></ol><p><br></p><p><b>Catatan</b>: kami mengizinkan setiap pengguna OCD untuk menampilkan atau membuat konten yang berisi kematian seseorang akibat bunuh diri, melakukan euthanasia dengan bantuan medis untuk tujuan edukasi atau informasi demi kepentingan umum.</p>
                        </div>
                        <!-- Section Four -->
                        <div id="permintaan-pengguna" class="space-bottom-1">
                            <h3>PERMINTAAN PENGGUNA</h3> 
                            <hr>
                            <ol>
                                <li>Kami menerima Permintaan pengguna untuk menghapus akunnya sendiri. Permintaan penghapusan akun dapat dilakukan oleh anggota keluarga atau wali yang sah apabila mendapat persetujuan tertulis dari pengguna.</li>
                                <li>Kami menerima permintaan penghapusan akun atau konten yang dianggap melanggar ketentuan layanan, standar komunitas, aturan hukum yang berlaku demi kepentingan umum.</li>
                                <li>Kami menerima permintaan penghapusan konten yang memuat gambar penyiksaan anak.</li>
                            </ol>
                        </div>
                        <!-- Section Five -->
                        <div id="informasi-tambahan" class="space-bottom-1">
                            <h3>INFORMASI TAMBAHAN</h3>
                            <hr>
                            <p>Standar Komunitas ini berisi aturan apa yang diizinkan dan tidak diizinkan dengan mengacu pada peraturan perundang-undangan yang berlaku di Indonesia. Hal-hal yang belum diatur dalam Standar Komunitas ini, tetapi telah diatur dalam peraturan perundang-undangan di Indonesia, maka secara langsung mengikat setiap pengguna layanan kami. Kami berharap Anda berkomitmen bersama untuk menjadikan One Click Democracy sebagai tempat bersuara dan berbagi isu guna menyongsong demokrasi yang lebih baik.</p><p>Segala ketentuan yang belum diatur dalam standar komunitas ini, tetapi telah diatur dalam aturan hukum di Indonesia maka secara langsung dianggap mengikat bagi pengguna.</p>
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