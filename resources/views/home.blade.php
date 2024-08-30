<x-main-layout>
    <x-slot:title>Welcome to RUSHD PPDB Website</x-slot:title>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between pt-2 pb-2">
            <div>
                <a href="tel:+6285875595200"><i class="fa-solid fa-phone"></i> +62
                    858-7559-5200</a>
                <span class="mx-3">|</span>
                <a href="mailto:yourdomain@gmail.com"><i class="fa-solid fa-envelope"></i>
                    smarush@gmail.com</a>
            </div>
            <div>
                <span><i class="fa-solid fa-clock"></i> Working Hours - Mon -
                    Fri: 07:00 - 16:00</span>
                <span class="mx-3">|</span>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="mx-2"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-google"></i></a>
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
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline">Timeline</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Seleksi
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#prestasi">Seleksi Prestasi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#reguler">Seleksi Reguler</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#achievement">Program Unggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
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
                                <a class="dropdown-item" href="{{ route('transfer.index') }}">Pembayaran</a>
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

    <!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('img/school.jpg')">
                <div class="carousel-caption">
                    <h1>Selamat Datang di PPDB SMA Unggulan RUSHD</h1>
                    <p>
                        Bergabunglah dengan kami untuk mendapatkan pendidikan berkualitas
                        tinggi yang mempersiapkan Anda untuk masa depan yang cerah.
                    </p>
                    <p>
                        Daftarkan diri Anda sekarang dan mulailah perjalanan menuju
                        kesuksesan!
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('img/education.jpg')">
                <div class="carousel-caption">
                    <h1>Belajar Mengajar Terbaik</h1>
                    <p>
                        Lembaga pendidikan dengan komitmen untuk menghasilkan generasi
                        unggul melalui pendekatan pembelajaran inovatif dan fasilitas
                        modern.
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('img/students.jpg')">
                <div class="carousel-caption">
                    <h1>Kurikulum Berstandar</h1>
                    <p>
                        Menggunakan kurikulum Nasional yang dipadukan dengan kurikulum
                        Cambridge untuk bidang studi Bahasa Inggris, Sains dan Matematika.
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
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

    <div class="container my-5">
        <!-- Single Card with Numbers -->
        <div class="card card-custom">
            <div class="numbers-container">
                <div class="number-item">
                    <div class="number-value counter" data-target="230">0</div>
                    <p>Jalur Reguler</p>
                </div>
                <div class="number-item">
                    <div class="number-value counter" data-target="80">0</div>
                    <p>Jalur Prestasi</p>
                </div>
                <div class="number-item">
                    <div class="number-value counter" data-target="357">0</div>
                    <p>Pendaftar</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Timeline -->
    <section id="timeline" class="timeline">
        <div class="container my-5">
            <h2 class="section-title">Timeline Pendaftaran</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="timeline-container">
                        <div class="timeline-item">
                            <i class="bi bi-calendar timeline-item-icon"></i>
                            <div class="timeline-item-content">
                                <span class="timeline-item-title">Pendaftaran - 01 Jan 2024:</span>
                                <span class="timeline-item-subtitle">Start your application process with our
                                    easy-to-follow
                                    steps.</span>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <i class="bi bi-pencil-square timeline-item-icon"></i>
                            <div class="timeline-item-content">
                                <span class="timeline-item-title">TPA Test - 15 Jan 2024:</span>
                                <span class="timeline-item-subtitle">Take the aptitude test to qualify for the next
                                    stage.</span>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <i class="bi bi-megaphone timeline-item-icon"></i>
                            <div class="timeline-item-content">
                                <span class="timeline-item-title">Announcement of TPA Test Results - 22 Jan
                                    2024:</span>
                                <span class="timeline-item-subtitle">Check your results online.</span>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <i class="bi bi-file-earmark-text timeline-item-icon"></i>
                            <div class="timeline-item-content">
                                <span class="timeline-item-title">Interview - 01 Feb 2024:</span>
                                <span class="timeline-item-subtitle">Prepare for the interview with our tips.</span>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <i class="bi bi-award timeline-item-icon"></i>
                            <div class="timeline-item-content">
                                <span class="timeline-item-title">Pengumuman Seleksi Beasiswa - 10 Feb 2024:</span>
                                <span class="timeline-item-subtitle">Find out if you’ve been selected for the
                                    scholarship.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="img/students.jpg" alt="Students" />
                        <div class="quote-box">
                            <i class="bi bi-chat-quote quote-icon"></i>
                            <p class="quote-text">
                                Anim voluptate amet culpa velit velit elit nulla consectetur!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Prestasi -->
    <section id="prestasi" class="prestasi">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/prestasi.png') }}" alt="Students" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <h2 class="fw-bold">Prestasi</h2>
                    <div class="line-curve"></div>
                    <p>
                        Beasiswa ini diberikan kepada siswa/i yang berprestasi dalam
                        bidang akademik dan/atau non-akademik dengan syarat dan ketentuan.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success"></i> Melampirkan
                            sertifikat prestasi dari kompetisi yang pernah diikuti.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success"></i> Jenjang
                            kompetisi yang diikuti sekurang-kurangnya tingkat Provinsi.
                        </li>
                    </ul>
                    <!-- Button trigger modal -->
                    <a href="#" class="btn btn-learn-more" data-bs-toggle="modal"
                        data-bs-target="#prestasiModal">Learn more</a>
                </div>
            </div>
        </div>

        <!-- Modal Prestasi -->
        <div class="modal fade" id="prestasiModal" tabindex="-1" aria-labelledby="prestasiModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="prestasiModalLabel">
                            Beasiswa Prestasi
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Beasiswa Prestasi memberikan kesempatan kepada siswa/i yang
                            telah meraih prestasi dalam berbagai bidang, baik akademik
                            maupun non-akademik. Penerima beasiswa ini diharapkan dapat
                            menunjukkan bukti prestasi dalam bentuk sertifikat yang diakui
                            secara resmi. Prestasi yang diterima minimum harus setingkat
                            provinsi untuk bidang akademik maupun non-akademik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Reguler -->
    <section id="reguler" class="reguler">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="fw-bold">Reguler</h2>
                    <div class="line-curve"></div>
                    <p>
                        Beasiswa ini diberikan kepada siswa/i yang memiliki perolehan
                        nilai yang baik saat mengikuti tes seleksi dengan syarat dan
                        ketentuan.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success"></i> Materi tes
                            yang diujikan: Tes Potensi Akademik (TPA): Matematika, IPA, dan
                            Bahasa Inggris.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success"></i> Tes
                            dilakukan dalam mode online pada jadwal yang sudah ditentukan
                            oleh panitia.
                        </li>
                    </ul>
                    <!-- Button trigger modal -->
                    <a href="#" class="btn btn-learn-more" data-bs-toggle="modal"
                        data-bs-target="#regulerModal">Learn more</a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/reguler.png') }}" alt="Students" class="img-fluid" />
                </div>
            </div>
        </div>

        <!-- Modal Reguler -->
        <div class="modal fade" id="regulerModal" tabindex="-1" aria-labelledby="regulerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="regulerModalLabel">
                            Beasiswa Reguler
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Beasiswa Reguler diberikan kepada siswa/i yang memiliki nilai
                            terbaik pada saat tes seleksi. Materi tes meliputi Tes Potensi
                            Akademik (TPA) yang mencakup Matematika, IPA, dan Bahasa
                            Inggris. Tes ini dilakukan secara online sesuai jadwal yang
                            telah ditentukan oleh panitia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRESTASI -->
    <section id="achievement" class="achievement">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-4 text-center">
                    <h2 class="section-title">Program Unggulan</h2>
                    <p class="lead">
                        Program unggulan di SMA RUSHD dirancang untuk mengembangkan potensi siswa baik di bidang
                        akademik maupun non-akademik.
                    </p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="card card-p-unggulan">
                        <i class="fas fa-medal icon"></i>
                        <h6 class="prestasi-title-list">Olympiad Program</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card card-p-unggulan">
                        <i class="fas fa-flask icon"></i>
                        <h6 class="prestasi-title-list">Science Project</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card card-p-unggulan">
                        <i class="fas fa-comments icon"></i>
                        <h6 class="prestasi-title-list">Communication Skill</h6>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center mt-4">
                <div class="col-md-4 col-lg-3">
                    <div class="card card-p-unggulan">
                        <i class="fas fa-robot icon"></i>
                        <h6 class="prestasi-title-list">STEAM Education</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card card-p-unggulan">
                        <i class="fas fa-lightbulb icon"></i>
                        <h6 class="prestasi-title-list">Entrepreneurship Program</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card card-p-unggulan">
                        <i class="fas fa-code icon"></i>
                        <h6 class="prestasi-title-list">Basic Coding</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card card-p-unggulan">
                        <i class="fas fa-graduation-cap icon"></i>
                        <h6 class="prestasi-title-list">University Preparation</h6>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col text-center">
                    <a href="program.html" class="btn btn-learn-more">See More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOg -->

    <section id="blog" class="blog">
        <div class="container mt-4">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/C-nRq31vgba/?utm_source=ig_embed&amp;utm_campaign=loading"
                        target="_blank" class="text-decoration-none">
                        <div class="card d-flex flex-row card-hover mb-3" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold truncate-multiline">
                                    Juara 1 Lomba Gebyar Kreasi Fisika
                                </h5>
                                <p class="card-text text-body-secondary truncate-multiline">
                                    We are incredibly proud to announce that Muhammad Global Galleryan has secured 1st
                                    place in the Gebyar Lomba Kreasi Fisika 2024 held by UIN Alauddin Makassar on July
                                    19, 2024! Your exceptional talent, dedication, and passion for physics have led to
                                    this remarkable achievement. You've not only made us proud but have also set a
                                    shining example of excellence. Keep pushing the boundaries of knowledge and continue
                                    to inspire us all!
                                </p>
                            </div>
                            <img src="{{ asset('img/prestasi/satu.jpg') }}" class="card-img-top h-auto"
                                alt="Fissure in Sandstone" style="max-width: 150px;">
                        </div>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/C-fUElxvs6X/?utm_source=ig_embed&amp;utm_campaign=loading"
                        target="_blank" class="text-decoration-none">
                        <div class="card d-flex flex-row card-hover mb-3" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold truncate-multiline">
                                    Juara 2 Kompetisi Matematika 2024
                                </h5>
                                <p class="card-text text-body-secondary truncate-multiline">
                                    A huge congratulations to Mochammad Rigan Haryono for securing 2nd place in the
                                    SEMPOA IX 2024 Mathematics Competition at the Province Level! This incredible
                                    achievement reflects not only your exceptional mathematical skills but also your
                                    dedication and perseverance. You've set a remarkable example for your peers and have
                                    shown that hard work truly leads to success. Keep pushing boundaries and continue to
                                    excel in all your future endeavors. We couldn't be prouder!
                                </p>
                            </div>
                            <img src="{{ asset('img/prestasi/dua.jpg') }}" class="card-img-top h-auto"
                                alt="Academic Excellence" style="max-width: 150px;">
                        </div>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/C9BV3WKhAps/?utm_source=ig_embed&amp;utm_campaign=loading"
                        target="_blank" class="text-decoration-none">
                        <div class="card d-flex flex-row card-hover mb-3" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold truncate-multiline">
                                    Seorang Pemimpin Muda yang menginspirasi
                                </h5>
                                <p class="card-text text-body-secondary truncate-multiline">
                                    Meet Nathania Nadine Nurbudi from SMA Unggulan Rushd, whose journey as an internship
                                    member in Forum OSIS Jawa Tengah showcases her dedication and leadership. On July
                                    1st, 2024, at Teater Liem Liang Peng in Semarang, Nathania collaborated with
                                    committee members from various high schools in Central Java to organize the SSCF
                                    event. Her role as a moderator at this prestigious venue exemplifies her exceptional
                                    communication and leadership skills. Nathania's active participation during the
                                    school holidays not only inspires us to pursue excellence but also underscores the
                                    importance of making a positive impact in our communities. Thanks for the inspiring
                                    story!
                                </p>
                            </div>
                            <img src="{{ asset('img/prestasi/tiga.jpg') }}" class="card-img-top h-auto"
                                alt="Art and Culture Award" style="max-width: 150px;">
                        </div>
                    </a>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/C8uLjVivnYP/?utm_source=ig_embed&amp;utm_campaign=loading"
                        target="_blank" class="text-decoration-none">
                        <div class="card d-flex flex-row card-hover mb-3" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold truncate-multiline">
                                    The top 3 spots in the Video Competition
                                </h5>
                                <p class="card-text text-body-secondary truncate-multiline">
                                    Congratulations to Candi, Excelsia, and Fidzar from SMA Unggulan Rushd for securing
                                    the top 3 spots in the Video Competition held by HMP Ganesha at Sebelas Maret
                                    University! This remarkable achievement showcases that our school excels not only in
                                    academics but also in fostering creativity, teamwork, and innovative thinking. Your
                                    success is a testament to the diverse talents nurtured at SMA Unggulan Rushd. Keep
                                    up the fantastic work and continue to inspire!
                                </p>
                            </div>
                            <img src="{{ asset('img/prestasi/empat.jpg') }}" class="card-img-top h-auto"
                                alt="Debate Competition" style="max-width: 150px;">
                        </div>
                    </a>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/C8IqP20hA_4/?utm_source=ig_embed&amp;utm_campaign=loading"
                        target="_blank" class="text-decoration-none">
                        <div class="card d-flex flex-row card-hover mb-3" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold truncate-multiline">
                                    Winning gold at the SASMO 2024
                                </h5>
                                <p class="card-text text-body-secondary truncate-multiline">
                                    Rigan and Waldo have done it again, winning gold at the SASMO 2024. Their continuous
                                    string of victories and relentless pursuit of excellence inspire us all. Kudos to
                                    these extraordinary students for their remarkable achievements and for making our
                                    school shine on the international stage!
                                </p>
                            </div>
                            <img src="{{ asset('img/prestasi/lima.jpg') }}" class="card-img-top h-auto"
                                alt="Robotics Competition" style="max-width: 150px;">
                        </div>
                    </a>
                </div>

                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.instagram.com/p/C71g3D0PusP/?utm_source=ig_embed&amp;utm_campaign=loading"
                        target="_blank" class="text-decoration-none">
                        <div class="card d-flex flex-row card-hover mb-3" style="height: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold truncate-multiline">
                                    Champions at the IRC 2024
                                </h5>
                                <p class="card-text text-body-secondary truncate-multiline">
                                    We are thrilled to celebrate the incredible achievements of our champions at the IRC
                                    2024 hosted by Wardaya College on May 4th, 2024! Waldo clinched the gold in
                                    Mathematics, Keisha earned bronze in Informatics, Diandra took home bronze in
                                    Chemistry, and Rigan secured bronze in Mathematics. Your hard work and dedication
                                    have truly paid off. Keep reaching for the stars!
                                </p>
                            </div>
                            <img src="{{ asset('img/prestasi/enam.jpg') }}" class="card-img-top h-auto"
                                alt="Environmental Award" style="max-width: 150px;">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq">
        <div class="container mt-5">
            <br />
            <h2 class="mb-3">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            APAKAH BEASISWA UNGGULAN RUSHD ?
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
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            BERAPA NILAI RERATA RAPOR MINIMAL UNTUK MENGIKUTI SELEKSI
                            BEASISWA UNGGULAN RUSHD?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
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
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            MATA PELAJARAN APA SAJA YANG DIUJIKAN UNTUK JALUR SELEKSI (TES)?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
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
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            BERAPA KUOTA BEASISWA UNGGULAN RUSHD ?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
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
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            KETENTUAN LAIN
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
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
    <br />

    <!-- LOGO UNIV -->
    <!-- <div class="container"> -->
    <h1 class="text-center mb-4">Target Lulusan di Universitas Terbaik</h1>
    <div class="logo-container">
        <div class="logo-row">
            <div class="logo-item">
                <img src="{{ asset('img/oxford.png') }}" alt="Oxford University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/harvard.png') }}" alt="Harvard University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/california.png') }}" alt="California University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/washington.png') }}" alt="University of Washington" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/ntu.png') }}" alt="Nanyang Technological University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/itb.png') }}" alt="Institut Teknologi Bandung" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/ui.png') }}" alt="Universitas Indonesia" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/ugm.png') }}" alt="Universitas Gadjah Mada" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/airlangga.png') }}" alt="Universitas Airlangga" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/its.png') }}" alt="Institut Teknologi Sepuluh Nopember" />
            </div>
            <!-- Duplicate logos for seamless animation -->
            <div class="logo-item">
                <img src="{{ asset('img/oxford.png') }}" alt="Oxford University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/harvard.png') }}" alt="Harvard University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/california.png') }}" alt="California University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/washington.png') }}" alt="University of Washington" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/ntu.png') }}" alt="Nanyang Technological University" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('img/itb.png') }}" alt="Institut Teknologi Bandung" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('') }}img/ui.png" alt="Universitas Indonesia" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('') }}img/ugm.png" alt="Universitas Gadjah Mada" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('') }}img/airlangga.png" alt="Universitas Airlangga" />
            </div>
            <div class="logo-item">
                <img src="{{ asset('') }}img/its.png" alt="Institut Teknologi Sepuluh Nopember" />
            </div>
        </div>
    </div>
    <br /><br />
    <!-- </div> -->

    <!-- FOOTER -->
    <section class="footer">
        <footer class="footer">
            <div class="container pt-5">
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
                <hr>
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
    <!-- Instagram Embed Script -->
    <script async src="//www.instagram.com/embed.js"></script>
    <!-- Counter Animation Card Angka Script -->
    <script>
        const counters = document.querySelectorAll(".counter");
        counters.forEach((counter) => {
            counter.innerText = "0";

            const updateCounter = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;

                const increment = target / 200;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            };

            updateCounter();
        });
    </script>
    <!-- SROLL UP -->
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>
</x-main-layout>
