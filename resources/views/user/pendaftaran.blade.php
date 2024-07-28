<x-main-layout>
    <div class="background-image-path">
        <div class="container-fluid position-relative top-md-50 start-md-50 translate-md-middle mt-5">
            <div class="container justify-content-center">
                <h2 class="text-white poppins-medium text-center text-shadow">
                    Jalur Pendaftaran PPDB
                </h2>
                <h1 class="text-white poppins-bold text-center text-shadow">
                    SMA UNGGULAN RUSHD
                </h1>
            </div>
            <div class="container mt-5 mb-5 mb-md-0">
                <form action="{{ route('pendaftaran.store') }}" method="post">
                    @csrf
                    <div class="row justify-content-center g-5">
                        <div class="col-md-8 col-lg-3">
                            <div class="card border-0">
                                <div class="card-header bg-orange text-white text-center poppins-medium">
                                    Jalur Reguler
                                </div>
                                <img src="/assets/kata-umum-dan-khususjpg-20230104124939.jpg"
                                    class="card-img card-image-size" alt="card-image" />
                                <div class="card-body">
                                    <h5 class="card-title text-center poppins-bold">
                                        Jalur Reguler
                                    </h5>
                                    <p class="card-text card-paragraph">
                                        Pendaftaran untuk jalur reguler, terbuka bagi semua siswa
                                        yang memenuhi syarat umum.
                                    </p>
                                    <div class="d-grid justify-content-center">
                                        <button type="submit" value="reguler" name="jenis_pendaftaran"
                                            class="btn btn-orange text-white">Daftar Jalur Reguler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-3">
                            <div class="card border-0">
                                <div class="card-header bg-orange text-white text-center poppins-medium">
                                    Jalur Prestasi
                                </div>
                                <img src="/assets/pengertian-prestasi-macam-prestasi-menurut-para-ahli-5c0c6768bde5756aec02cb78.jpg"
                                    class="card-img card-image-size" alt="card-image" />
                                <div class="card-body">
                                    <h5 class="card-title text-center poppins-bold">
                                        Jalur Prestasi
                                    </h5>
                                    <p class="card-text card-paragraph">
                                        Pendaftaran untuk jalur prestasi, terbuka bagi siswa dengan
                                        prestasi akademik atau non-akademik
                                    </p>
                                    <div class="d-grid justify-content-center">
                                        <button type="submit" value="prestasi" name="jenis_pendaftaran"
                                            class="btn btn-orange text-white">Daftar Jalur Prestasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
