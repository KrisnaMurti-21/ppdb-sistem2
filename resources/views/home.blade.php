<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB SMA Unggulan RUSHD</title>
    <link rel="shortcut icon" href="{{ url('/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS  VERSI 5-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />

    <!-- Chart.js -->
    <script src="/assets/home/chart.js"></script>
    <!-- CSS SAYA -->
    <link rel="stylesheet" type="text/css" href="/assets/home/style.css" />

    <link rel="stylesheet" href="/assets/home/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/home/aos.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar custom-navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">SMA Unggulan RUSHD</a>
            <button class="custom-navbar-toggler navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center text-white">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#carouselExampleIndicators">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#timeline">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#features">Jalur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#scholarship">Seleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#faq">FAQ</a>
                    </li>
                    @guest
                        <li class="nav-item ps-lg-5">
                            <button class="custom-btn btn rounded-pill px-4">
                                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                            </button>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown ps-lg-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end custom-dropdown-user"
                                aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('biodata.show', Auth::user()->id) }}">Akun</a>
                                <a class="dropdown-item" href="{{ route('transfer.index') }}">pembayaran</a>
                                <form class="form-inline d-block" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Log Out</button>
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item custom-carousel-item active" style="background-image: url('img/school.jpg')">
                <div class="carousel-caption custom-carousel-caption">
                    <h1>Selamat Datang di PPDB SMA Unggulan RUSHD</h1>
                    <p>
                        Bergabunglah dengan kami untuk mendapatkan pendidikan berkualitas
                        tinggi yang mempersiapkan Anda untuk masa depan yang cerah.
                    </p>
                    <p>
                        Daftarkan diri Anda sekarang dan mulailah perjalanan menuju
                        kesuksesan!
                    </p>
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-orange text-white btn-lg">Daftar Sekarang</a>
                    @endguest
                </div>
            </div>
            <div class="carousel-item custom-carousel-item" style="background-image: url('img/education.jpg')">
                <div class="carousel-caption custom-carousel-caption">
                    <h1>Belajar Mengajar Terbaik</h1>
                    <p>
                        Lembaga pendidikan dengan komitmen untuk menghasilkan generasi
                        unggul melalui pendekatan pembelajaran inovatif dan fasilitas
                        modern.
                    </p>
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-orange text-white btn-lg">Daftar Sekarang</a>
                    @endguest
                </div>
            </div>
            <div class="carousel-item custom-carousel-item" style="background-image: url('img/students.jpg')">
                <div class="carousel-caption custom-carousel-caption">
                    <h1>Kurikulum Berstandar</h1>
                    <p>
                        Menggunakan kurikulum Nasional yang dipadukan dengan kurikulum
                        Cambridge untuk bidang studi Bahasa Inggris, Sains dan Matematika.
                    </p>
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-orange text-white btn-lg">Daftar Sekarang</a>
                    @endguest
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- TIMELINE -->
    <section class="timeline" id="timeline">
        <div class="container">
            <h2 class="text-center">Timeline Beasiswa</h2>
            <ul>
                <li>
                    <div>
                        <time>Pendaftaran</time> Calon peserta dapat mendaftar secara
                        online melalui situs resmi. Pastikan untuk melengkapi semua
                        dokumen yang diperlukan dan mengisi formulir pendaftaran dengan
                        benar.
                    </div>
                </li>
                <li>
                    <div>
                        <time>TPA Test</time> Tes Potensi Akademik (TPA) akan dilaksanakan
                        secara online sesuai dengan ketentuan yang berlaku. Peserta
                        diharapkan mempersiapkan diri dengan baik.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Announcement of TPA Test Result</time> Hasil TPA akan
                        diumumkan melalui situs resmi. Peserta yang lolos akan menerima
                        Whashapp konfirmasi untuk tahap selanjutnya.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Interview</time> Peserta yang lolos TPA akan mengikuti sesi
                        wawancara. Jadwal dan format wawancara akan diinformasikan melalui
                        Whashapp.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Pengumuman Seleksi Beasiswa</time> Pengumuman penerima
                        beasiswa akan dilakukan melalui situs resmi. Penerima beasiswa
                        diharapkan untuk melakukan konfirmasi penerimaan beasiswa dalam
                        waktu yang ditentukan.
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- FEAUTERESS -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="mb-5">Jalur Beasiswa</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="custom-card card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-school fa-3x mb-3"></i>
                            <h3 class="card-title custom-card-title">Jalur Prestasi</h3>
                            <p class="card-text">
                                Beasiswa ini diberikan kepada siswa/i yang berprestasi dalam
                                bidang akademik dan/atau non-akademik dengan syarat dan
                                ketentuan sebagai berikut:
                            </p>
                            <ul>
                                <li>
                                    Melampirkan sertifikat prestasi dari kompetisi yang pernah
                                    diikuti.
                                </li>
                                <li>
                                    Jenjang kompetisi yang diikuti sekurang-kurangnya tingkat
                                    Provinsi.
                                </li>
                                <li>
                                    Rekomendasi lomba yang diikuti dapat berupa Kompetisi Sains
                                    Nasional (KSN), Festival dan Lomba Seni Siswa Nasional
                                    (FLS2N), Olimpiade Olahraga Siswa Nasional (O2SN) dan/atau
                                    kompetisi bergengsi lainnya yang diadakan oleh
                                    universitas/instansi terkemuka.
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <!-- <a href="#" class="text-white">Selengkapnya</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="custom-card card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-chalkboard-teacher fa-3x mb-3"></i>
                            <h3 class="card-title custom-card-title">Jalur Tes</h3>
                            <p class="card-text">
                                Beasiswa ini diberikan kepada siswa/i yang memiliki perolehan
                                nilai yang baik saat mengikuti tes seleksi dengan syarat dan
                                ketentuan sebagai berikut:
                            </p>
                            <ul>
                                <li>
                                    Materi tes yang diujikan berupa : Tes Potensi Akademik (TPA)
                                    : Matematika, IPA dan Bahasa Inggris.
                                </li>
                                <li>
                                    Tes dilakukan dalam mode online pada jadwal yang sudah
                                    ditentukan oleh panitia.
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <!-- <a href="#" class="text-white">Selengkapnya</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCHOLARSHIP -->
    <section id="scholarship" class="scholarship-section">
        <div class="container">
            <h2 class="mb-5">Seleksi Beasiswa Unggulan Rushd</h2>
            <p>
                SMA Unggulan Rushd memberikan kesempatan kepada seluruh siswa/siswi
                SMP/MTs/Sederajat dalam meraih Beasiswa Pendidikan untuk melanjutkan
                pendidikan di SMA Unggulan Rushd pada Tahun Ajaran 2024/2025 melalui
                Seleksi Beasiswa Unggulan Rushd yang terdiri dari dua jalur tes masuk:
            </p>
            <div class="scholarship-content container text-center">
                <div class="row">
                    <div class="col">
                        <div class="column">
                            <div class="col mb-4">
                                <div class="card custom-card h-100">
                                    <div class="card-body text-center">
                                        <div class="custom-icon">
                                            <i class="fas fa-trophy"></i>
                                        </div>
                                        <h5 class="card-title custom-card-title">
                                            Jalur Prestasi
                                        </h5>
                                        <p class="card-text">
                                            Sebanyak 30 siswa/i akan diterima melalui jalur
                                            prestasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card custom-card h-100">
                                    <div class="card-body text-center">
                                        <div class="custom-icon">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <h5 class="card-title custom-card-title">Jalur Tes</h5>
                                        <p class="card-text">
                                            Sebanyak 90 siswa/i akan diterima melalui jalur tes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-auto">
                        <div class="chart-container">
                            <canvas id="scholarshipChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq">
        <div class="container">
            <h2 class="mb-5">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            APAKAH BEASISWA UNGGULAN RUSHD?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Beasiswa Unggulan Rushd merupakan Beasiswa Pendidikan untuk
                            menempuh pendidikan di SMA Unggulan Rushd selama 3 tahun pada
                            tahun pelajaran 2024/2025. Beasiswa ini mencakup <br />
                            <ul>
                                <li>Uang Pangkal</li>
                                <li>
                                    Paket Tahunan (mencakup seragam sekolah, kegiatan sekolah,
                                    kesehatan),
                                </li>
                                <li>SPP Sekolah dan</li>
                                <li>
                                    SPP Asrama (mencakup fasilitas dan kegiatan asrama, makan
                                    3x).
                                </li>
                                <li>
                                    Beasiswa SMA Unggulan Rushd menawarkan dua jenis beasiswa
                                    yang dapat membantu pendidikan calon siswa, yaitu Full
                                    Scholarship dan Partial Scholarship.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            BERAPA BIAYA MASUK SMA UNGGULAN RUSHD?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            SMA Unggulan Rushd pada tahun ajaran 2024/2025 hanya menerima
                            siswa melalui jalur Beasiswa, baik Jalur Prestasi atau Jalur
                            Tes. Biaya Pendidikan sudah ter-cover dalam paket beasiswa yang
                            diberikan. Namun ada beberapa hal yang menjadi tanggung jawab
                            orang tua siswa,<br />
                            <ul>
                                <li>
                                    Kerusakan fasilitas sekolah/asrama akibat tindakan siswa
                                </li>
                                <li>
                                    Perubahan ukuran seragam dikemudian hari seiring dengan
                                    pertumbuhan siswa, atau seragam rusak/hilang,
                                </li>
                                <li>Buku yang rusak/hilang,</li>
                                <li>Kehilangan/kerusakan barang pribadi siswa</li>
                                <li>Uang saku</li>
                                <li>Laundry</li>
                                <li>
                                    Dan hal lain yang menimbulkan biaya diluar cakupan beasiswa
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            BAGAIMANA CARA MENDAPATKAN BEASISWA UNGGULAN RUSHD?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Ada 2 cara untuk mendapatkan Beasiswa Unggulan Rushd, yaitu;
                            <li>Jalur Prestasi</li>
                            <p>
                                Jalur Prestasi merupakan salah satu jalur untuk mendapatkan
                                Beasiswa Unggulan Rushd. Calon penerima Beasiswa Unggulan
                                Rushd harus memenuhi seluruh persyaratan umum dan administrasi
                                dan memiliki prestasi khusus di bidang sains dan non sains
                            </p>
                            <li>Jalur Seleksi (Tes)</li>
                            <p>
                                Jalur yang diperuntukan bagi seluruh calon penerima Beasiswa
                                Unggulan Rushd yang memenuhi seluruh persyaratan, baik
                                persyaratan umum maupun persyaratan administrasi namun belum
                                memiliki prestasi di luar Jalur Prestasi. Jalur seleksi (Tes)
                                ini terbuka bagi seluruh siswa/siswi yang mendaftar sebagai
                                calon penerima Beasiswa Unggulan Rushd.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            BERAPA NILAI RERATA RAPOR MINIMAL UNTUK MENGIKUTI SELEKSI
                            BEASISWA UNGGULAN RUSHD?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Terdapat 3 mata pelajaran utama, yakni Bahasa Inggris, IPA, dan
                            Matematika. Minimal rata-rata nilai pengetahuan dirapor untuk
                            bisa lolos seleksi adalah 80. Nilai 80 ini adalah total seluruh
                            nilai tiga mata pelajaran di atas, terhitung dari semester I-IV.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            MATA PELAJARAN APA SAJA YANG DIUJIKAN UNTUK JALUR SELEKSI (TES)?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <li>Bahasa Inggris</li>
                            <li>Matematika</li>
                            <li>IPA</li>
                            <p>
                                *Untuk bahasa yang digunakan dalam soal adalah Bahasa
                                Indonesia dan Bahasa Inggris
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSix" aria-expanded="false"
                            aria-controls="flush-collapseSix">
                            BERAPA KUOTA BEASISWA UNGGULAN RUSHD?
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <li>Jalur Prestasi : 30 siswa</li>
                            <li>Jalur Seleksi (Tes) : 90 siswa</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSeven" aria-expanded="false"
                            aria-controls="flush-collapseSeven">
                            KETENTUAN LAIN
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <li>
                                Setiap peserta wajib mematuhi dan mengikuti seluruh ketentuan
                                yang telah ditetapkan
                            </li>
                            <li>
                                Apabila dikemudian hari peserta seleksi Beasiswa Unggulan
                                Rushd terbukti memberikan data yang tidak sesuai dengan fakta
                                atau melakukan manipulasi data baik pada setiap tahapan
                                seleksi maupun setelah ditetapkan menjadi siswa SMA Unggulan
                                Rushd, maka kelulusan yang bersangkutan dinyatakan batal dan
                                diberhentikan dari status siswa SMA Unggulan Rushd
                            </li>
                            <li>
                                Peserta diharapkan selalu memantau setiap perkembangan
                                informasi yang diumumkan via akun sosial media resmi SMA
                                Unggulan Rushd.
                            </li>
                            <li>
                                Hal-hal lain yang belum tercantum akan disampaikan kemudian
                                hari apabila dibutuhkan.
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h6 class="text-uppercase fw-bold mb-4">SMA Unggulan RUSHD</h6>
                        <p>
                            <i class="fas fa-envelope me-3"></i>smarush@gmail.com <br />
                            <i class="fas fa-map-marker-alt me-3"></i> Kebayanan 1, Jati,
                            Masaran, Sragen Regency, Central Java 57282
                        </p>
                    </div>
                    <div class="col-sm-3 justify-content-center">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Features</h6>
                        <p>
                            <a href="#carouselExampleIndicators" class="text-reset text-decoration-none"><i
                                    class="fas fa-home me-2"></i>Home</a>
                        </p>
                        <p>
                            <a href="#timeline" class="text-reset text-decoration-none"><i
                                    class="fas fa-calendar-alt me-2"></i>Timeline</a>
                        </p>
                        <p>
                            <a href="#features" class="text-reset text-decoration-none"><i
                                    class="fas fa-route me-2"></i>Jalur</a>
                        </p>
                        <p>
                            <a href="#scholarship" class="text-reset text-decoration-none"><i
                                    class="fas fa-check me-2"></i>Seleksi</a>
                        </p>
                        <p>
                            <a href="#faq" class="text-reset text-decoration-none"><i
                                    class="fas fa-question-circle me-2"></i>FAQ</a>
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <h6 class="text-uppercase fw-bold mb-4">Location</h6>
                        <div class="map-responsive">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16258.119555947842!2d110.91857749038968!3d-7.470561087539422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1b53616ae30b%3A0x27ce9de645a49e95!2sSMA%20Unggulan%20RUSHD!5e0!3m2!1sid!2sid!4v1722572794090!5m2!1sid!2sid"
                                style="border:0;" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center pt-5 pb-3">
                    Copyright ©2024 SMA Unggulan RUSHD Reserved
                </div>
            </div>
        </footer>
    </section>

    <button class="back-to-top" onclick="scrollToTop()">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="/assets/home/js/bootstrap.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Js untuk transisi -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/home/js/script.js"></script>
    <!-- Js untuk timeline -->
    <script src="assets/home/js.js"></script>
</body>

</html>
