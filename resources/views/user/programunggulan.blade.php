<x-main-layout>
    <x-slot:title>Welcome to RUSHD PPDB Website</x-slot:title>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between pt-2 pb-2">
            <div>
                <a href="tel:+6285875595200"><i class="bi bi-telephone-fill icon-spacing"></i> +62
                    858-7559-5200</a>
                <span class="mx-3">|</span>
                <a href="mailto:yourdomain@gmail.com"><i class="bi bi-envelope-fill icon-spacing"></i>
                    yourdomain@gmail.com</a>
            </div>
            <div>
                <span><i class="bi bi-clock-fill icon-spacing"></i> Working Hours - Mon -
                    Fri: 07:00 - 16:00</span>
                <span class="mx-3">|</span>
                <a href="#"><i class="bi bi-facebook icon-spacing"></i></a>
                <a href="#" class="mx-2"><i class="bi bi-instagram icon-spacing"></i></a>
                <a href="#"><i class="bi bi-google icon-spacing"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container mt-2 mb-2">
            <a class="navbar-brand" href="#">SMA Unggulan RUSHD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#timeline">Timeline</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Seleksi
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('home') }}#prestasi">Seleksi Prestasi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('home') }}#reguler">Seleksi Reguler</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#achievement">Program Unggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#blog">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#faq">FAQ</a>
                    </li>
                    @guest
                        <li class="nav-item ms-5">
                            <a class="nav-link btn btn-primary text-white px-4" href="{{ route('login') }}">Daftar</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown ps-lg-5">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('biodata.show', Auth::user()->id) }}">Akun</a>
                                <a class="dropdown-item" href="{{ route('pengumuman') }}">Pengumuman</a>
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

    <section id="achievement" class="achievement">
        <div class="container mt-5">
            <h1 class="section-title">Program Unggulan Sekolah</h1>

            <!-- Olympiad Program -->
            <div class="row program-card align-items-center">
                <div class="col-md-4">
                    <img src="img/Olympiad.png" alt="Olympiad Program" />
                </div>
                <div class="col-md-8">
                    <h5>Olympiad Program</h5>
                    <p>
                        Olympiad program merupakan program unggulan yang diperuntukan bagi
                        para siswa yang berminat dan memiliki kemampuan secara akademik
                        untuk mendalami bidang-bidang yang dilombakan dalam olimpiade
                        sains nasional maupun internasional. Dalam program ini, seluruh
                        siswa akan diberikan pembinaan secara khusus dan diikutsertakan
                        dalam berbagai perlombaan baik ditingkat nasional maupun
                        internasional.
                    </p>
                </div>
            </div>

            <!-- Science Project -->
            <div class="row program-card align-items-center">
                <div class="col-md-8 order-md-1 order-2">
                    <h5>Science Project</h5>
                    <p>
                        Untuk menumbuhkan kemampuan ilmiah para siswa dan juga bentuk
                        partisipasi dari siswa dalam mencari solusi dari permasalahan
                        disekitar mereka. SMA Unggulan Rushd mewadahinya dalam program
                        Science Project. Dalam program ini, para siswa akan dibimbing oleh
                        para guru dan juga dosen dari kampus terkait ketika melakukan
                        suatu riset ilmiah. Output dari program ini adalah dihasilkannya
                        karya ilmiah yang dikompetisikan dalam berbagai science project
                        competition, baik ditingkat nasional maupun internasional
                    </p>
                </div>
                <div class="col-md-4 order-md-2 order-1">
                    <img src="img/Science.png" alt="Science Project" />
                </div>
            </div>

            <!-- Communication Skill -->
            <div class="row program-card align-items-center">
                <div class="col-md-4">
                    <img src="img/Communication.png" alt="Communication Skill" />
                </div>
                <div class="col-md-8">
                    <h5>Communication Skill</h5>
                    <p>
                        Kemampuan berkomunikasi merupakan salah satu hal yang penting
                        untuk dimiliki oleh siswa. Memiliki keterampilan komunikasi yang
                        kuat membantu dalam semua aspek kehidupan. Keterampilan komunikasi
                        yang baik sangat penting agar siswa memiliki rasa percaya diri
                        yang kuat didalam menyampaikan suatu pendapat/ide kepada orang
                        lain.
                    </p>
                </div>
            </div>

            <!-- STEAM Education -->
            <div class="row program-card align-items-center">
                <div class="col-md-8 order-md-1 order-2">
                    <h5>STEAM Education</h5>
                    <p>
                        Perkembangan teknologi abad 21 memunculkan inovasi baru dalam
                        dunia pendidikan, salah satunya adalah STEAM (Science, Technology,
                        Engineering, Art and Mathematic) yang merupakan pendekatan
                        interdisipliner yang menggabungkan bidang keilmuan tersebut.
                        Pendekatan STEAM Education mendorong siswa untuk belajar
                        mengeksplorasi semua kemampuan yang dimilikinya dengan cara
                        masing-masing. Pendekatan STEAM Education bertujuan untuk
                        mengembangkan pemikiran, penalaran, kerja tim, investigasi, serta
                        keterampilan kreatif yang dapat digunakan oleh siswa dalam semua
                        bidang yang ada di kehidupan mereka.
                    </p>
                </div>
                <div class="col-md-4 order-md-2 order-1">
                    <img src="img/Steam.png" alt="STEAM Education" />
                </div>
            </div>

            <!-- Entrepreneurship Program -->
            <div class="row program-card align-items-center">
                <div class="col-md-4">
                    <img src="img/Entrepreneurship.png" alt="Entrepreneurship Program" />
                </div>
                <div class="col-md-8">
                    <h5>Entrepreneurship Program</h5>
                    <p>
                        Salah satu pendorong peningkatan ekonomi suatu negara adalah
                        banyak atau sedikitnya jumlah entrepreneur. Untuk itu para siswa
                        di SMA Unggulan Rushd diperkenalkan dengan dunia wirausaha. Para
                        siswa akan diperkenalkan dengan peluang-peluang bisnis yang ada
                        disekitar mereka. Dalam program ini, para siswa juga diajarkan
                        tentang kemandirian, berani mengambil resiko dan berlatih
                        mengambil keputusan sendiri. Dengan pembelajaran entrepreneurship
                        sejak dini ini diharapkan dapat membentuk mind-set atau mental
                        entrepreneur dalam setiap siswa
                    </p>
                </div>
            </div>

            <!-- Basic Coding -->
            <div class="row program-card align-items-center">
                <div class="col-md-8 order-md-1 order-2">
                    <h5>Basic Coding</h5>
                    <p>
                        Seluruh siswa di SMA Unggulan Rushd akan mendapatkan pelajaran
                        dasar mengenai Coding. Hal ini bertujuan untuk meningkatkan
                        kemampuan problem solving, kemampuan computational thinking,
                        kreativitas, komunikasi dan digital literacy siswa. selain itu,
                        didalam era revolusi industri 4.0, dengan kemampuan coding yang
                        dimiliki siswa nantinya, akan memberikan daya saing lebih bagi
                        siswa tersebut
                    </p>
                </div>
                <div class="col-md-4 order-md-2 order-1">
                    <img src="img/Coding.png" alt="Basic Coding" />
                </div>
            </div>

            <!-- University Preparation -->
            <div class="row program-card align-items-center">
                <div class="col-md-4">
                    <img src="img/University.png" alt="University Preparation" />
                </div>
                <div class="col-md-8">
                    <h5>University Preparation</h5>
                    <p>
                        Seluruh siswa SMA Unggulan Rushd akan dipandu untuk meraih
                        perguruan tinggi yang mereka harapkan. Dalam program University
                        Preparation ini para siswa mendapatkan bimbingan untuk mengikuti
                        tes masuk perguruan tinggi dan mempersiapkan berbagai persyaratan
                        yang terkait dengan university entrance baik untuk perguruan
                        tinggi dalam maupun luar negeri. Siswa juga akan diberikan wawasan
                        mengenai perguruan tinggi dengan mengadakan kegiatan seminar atau
                        kunjungan ke perguruan tinggi secara langsung, baik perguruan
                        tinggi didalam atau luar negeri*. Program University Preparation
                        ini terintegrasi dengan program Career Planning sekolah.
                    </p>
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
                        <h5 class="fw-bold text-orange">SMA Unggulan RUSHD</h5>
                        <a href="mailto:smarush@gmail" class="text-decoration-none">
                            <div class="row">
                                <div class="col-1">
                                    <i class="fas fa-envelope text-orange"> </i>
                                </div>
                                <div class="col-11">
                                    <p class="text-orange">smarush@gmail.com</p>
                                </div>
                            </div>
                        </a>
                        <div class="row">
                            <div class="col-1">
                                <i class="fas fa-map-marker-alt text-orange"></i>
                            </div>
                            <div class="col-11">
                                <p class="text-orange">
                                    Kebayanan 1, Jati, Masaran, Sragen Regency, Central Java
                                    57282
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="fw-bold text-orange">Features</h5>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-orange mb-2">
                            <i class="fas fa-home me-2"></i>
                            <p class="mb-0">Home</p>
                        </a>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-orange mb-2">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <p class="mb-0">Timeline</p>
                        </a>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-orange mb-2">
                            <i class="fas fa-route me-2"></i>
                            <p class="mb-0">Jalur</p>
                        </a>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-orange mb-2">
                            <i class="fas fa-check me-2"></i>
                            <p class="mb-0">Seleksi</p>
                        </a>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-orange mb-2">
                            <i class="fas fa-question-circle me-2"></i>
                            <p class="mb-0">FAQ</p>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63294.8870831946!2d110.88520622732351!3d-7.4729336853503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1b53616ae30b%3A0x27ce9de645a49e95!2sSMA%20Unggulan%20Rushd!5e0!3m2!1sen!2sid!4v1724200998618!5m2!1sen!2sid"
                                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">
                    <p class="text-light-purple fw-semibold">
                        Copyright ©2024 SMA Unggulan RUSHD Reserved
                    </p>
                </div>
            </div>
        </footer>
    </section>

    <button class="back-to-top" onclick="scrollToTop()">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
</x-main-layout>
