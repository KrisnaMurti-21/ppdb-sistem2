<x-main-layout>
    <x-slot:title>Form Biodata Orang Tua Calon Siswa</x-slot:title>
    <x-slot:body>
        form-bg
    </x-slot:body>
    <div class="container mt-5 mb-5 rounded">
        <div class="title-form-me fw-bold px-5 fs-4 rounded-top py-3">
            Nilai Pengetahuan Rapor Kelas 7 dan 8
        </div>
        <div class="bg-white pt-3 rounded-bottom">
            <!-- tab daftar form -->
            <div class="row px-5">
                <div class="col text-form-me text-center fs-6 py-3">
                    <i class="fa-regular fa-circle-check me-2"></i>Biodata
                </div>
                <div class="col text-form-me text-center fs-6 py-3">
                    <i class="fa-regular fa-circle-check me-2"></i>Nilai Pengetahuan
                </div>

                <div class="col text-form-me text-center fs-6 py-3">
                    <i class="fa-regular fa-circle-check me-2"></i>Kondisi Kesehatan
                </div>
                <div class="col text-form-me text-center fs-6 py-3 border-bottom border-primary-subtle">
                    <i class="fa-regular fa-circle-check me-2"></i>Orangtua
                </div>
            </div>
            <!-- End of Daftar Form -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Form Rapot -->
            <div class="p-3 p-md-5">
                <form action="{{ route('datawali.store') }}" method="POST" id="biodataForm">
                    @csrf
                    <div class="row row-gap-5">
                        <div class="col-12 col-lg-6 px-lg-5">
                            <div class="bg-white shadow-lg rounded pb-3">
                                <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                    Data Ayah
                                </div>
                                <div class="mx-4 mt-3">
                                    <div class="mb-3">
                                        <label for="namaAyah" class="form-label fw-semibold">Nama Lengkap:</label>
                                        <input type="text" class="form-control " id="namaAyah" name="nama_ayah"
                                            placeholder="Masukkan Nama Lengkap" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaanAyah" class="form-label fw-semibold">Pekerjaan:</label>
                                        <input type="text" class="form-control " id="pekerjaanAyah"
                                            name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="teleponAyah" class="form-label fw-semibold">Nomor Telepon:</label>
                                        <input type="text" class="form-control input-tanpa-arrow " id="teleponAyah"
                                            name="telepon_ayah" placeholder="Masukkan Nomor Telepon" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamatAyah" class="form-label fw-semibold">Alamat Rumah:</label>
                                        <input type="text" class="form-control " id="alamatAyah" name="alamat_ayah"
                                            placeholder="Masukkan Alamat Rumah" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="kabupatenKotaAyah"
                                            class="form-label fw-semibold">Kabupaten/Kota:</label>
                                        <input type="text" class="form-control " id="kabupatenKotaAyah"
                                            name="kota_ayah" placeholder="Masukkan Kabupaten/Kota" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsiAyah" class="form-label fw-semibold">Provinsi:</label>
                                        <input type="text" class="form-control " id="provinsiAyah"
                                            name="provinsi_ayah" placeholder="Masukkan Provinsi" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 px-lg-5">
                            <div class="bg-white shadow-lg rounded pb-3">
                                <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                    Data Ibu
                                </div>
                                <div class="mx-4 mt-3">
                                    <div class="mb-3">
                                        <label for="namaIbu" class="form-label fw-semibold">Nama Lengkap:</label>
                                        <input type="text" class="form-control " id="namaIbu" name="nama_ibu"
                                            placeholder="Masukkan Nama Lengkap" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaanIbu" class="form-label fw-semibold">Pekerjaan:</label>
                                        <input type="text" class="form-control " id="pekerjaanIbu"
                                            name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="teleponIbu" class="form-label fw-semibold">Nomor Telepon:</label>
                                        <input type="text" class="form-control input-tanpa-arrow " id="teleponIbu"
                                            name="telepon_ibu" placeholder="Masukkan Nomor Telepon" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamatIbu" class="form-label fw-semibold">Alamat Rumah:</label>
                                        <input type="text" class="form-control " id="alamatIbu" name="alamat_ibu"
                                            placeholder="Masukkan Alamat Rumah" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="kabupatenKotaIbu"
                                            class="form-label fw-semibold">Kabupaten/Kota:</label>
                                        <input type="text" class="form-control " id="kabupatenKotaIbu"
                                            name="kota_ibu" placeholder="Masukkan Kabupaten/Kota" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsiIbu" class="form-label fw-semibold">Provinsi:</label>
                                        <input type="text" class="form-control " id="provinsiIbu"
                                            name="provinsi_ibu" placeholder="Masukkan Provinsi" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Wali Siswa -->
                    <div class="row">
                        <div class="col px-lg-5 pt-5">
                            <div class="bg-white shadow-lg rounded pb-3">
                                <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                    Data Wali
                                </div>
                                <div class="mx-4 mt-3">
                                    <div class="mb-3">
                                        <label for="namaWali" class="form-label fw-semibold">Nama Lengkap:</label>
                                        <input type="text" class="form-control " id="namaWali" name="nama_wali"
                                            placeholder="Masukkan Nama Lengkap" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaanWali" class="form-label fw-semibold">Pekerjaan:</label>
                                        <input type="text" class="form-control " id="pekerjaanWali"
                                            name="pekerjaan_wali" placeholder="Masukkan Pekerjaan" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="teleponWali" class="form-label fw-semibold">Nomor Telepon:</label>
                                        <input type="text" class="form-control input-tanpa-arrow "
                                            id="teleponWali" name="telepon_wali"
                                            placeholder="Masukkan Nomor Telepon" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamatWali" class="form-label fw-semibold">Alamat Rumah:</label>
                                        <input type="text" class="form-control " id="alamatWali"
                                            name="alamat_wali" placeholder="Masukkan Alamat Rumah" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="kabupatenKotaWali"
                                            class="form-label fw-semibold">Kabupaten/Kota:</label>
                                        <input type="text" class="form-control " id="kabupatenKotaWali"
                                            name="kota_wali" placeholder="Masukkan Kabupaten/Kota" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsiWali" class="form-label fw-semibold">Provinsi:</label>
                                        <input type="text" class="form-control " id="provinsiWali"
                                            name="provinsi_wali" placeholder="Masukkan Provinsi" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Wali Siswa -->
                </form>
            </div>

            <!-- End of Form Rapot -->
            <hr />
            <div class="row px-5 py-3">
                <div class="col-12 col-sm-6">
                    <p class="text-body-tertiary">
                        Pastikan data yang diisikan sudah benar!
                    </p>
                </div>
                <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-between gap-3">
                    <button type="button" class="btn button-cancel-form">Cancel</button>
                    <button type="button" class="btn btn-primary" id="submitButton">
                        Continue<i class="fa-solid fa-arrow-left ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('submitButton').addEventListener('click', function() {
            document.getElementById('biodataForm').submit();
        });
    </script>
</x-main-layout>
