<x-main-layout>
    <x-slot:title>Form Kesehatan Calon Siswa</x-slot:title>
    <x-slot:body>
        form-bg
    </x-slot:body>
    <div class="container mt-5 mb-5 rounded">
        <div class="title-form-me fw-bold px-5 fs-4 rounded-top py-3">
            Isi Kondisi Kesehatan Calon Siswa
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
                <div class="col text-form-me text-center fs-6 py-3 border-bottom border-primary-subtle">
                    <i class="fa-regular fa-circle-check me-2"></i>Kondisi Kesehatan
                </div>
                <div class="col text-form-me text-center fs-6 py-3">
                    <i class="fa-regular fa-circle me-2"></i>Orangtua
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
            <!-- Form Biodata -->
            <div class="p-5">
                <form action="{{ route('kesehatan.store') }}" method="post" id="biodataForm">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="golonganDarah" class="form-label fw-semibold">Golongan Darah:</label>
                                <select class="form-select border-orange" id="golonganDarah" name="gol_darah" required>
                                    <option value="" disabled selected>Pilih golongan darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tinggiBadan" class="form-label fw-semibold">Tinggi Badan (cm):</label>
                                <input type="number" class="form-control input-tanpa-arrow" id="tinggiBadan"
                                    name="tinggi_badan" placeholder="Masukkan tinggi badan" required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="beratBadan" class="form-label fw-semibold">Berat Badan (kg):</label>
                                <input type="number" class="form-control input-tanpa-arrow" id="beratBadan"
                                    name="berat_badan" placeholder="Masukkan berat badan" required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="alergi" class="form-label fw-semibold">Apakah Anda memiliki
                                    alergi?</label>
                                <select class="form-select border-orange" id="alergi" name="alergi" required>
                                    <option value="" disabled selected>Pilih jawaban</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div id="jenisAlergiSection" class="visually-hidden form-group mb-3">
                                <label for="jenisAlergi" class="form-label fw-semibold">Jika Ya, sebutkan jenis
                                    alergi:</label>
                                <input type="text" class="form-control" id="jenisAlergi" name="ket_alergi"
                                    placeholder="Sebutkan jenis alergi" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="penyakitKronis" class="form-label fw-semibold">Apakah Anda memiliki riwayat
                                    penyakit kronis?</label>
                                <select class="form-select border-orange" id="penyakitKronis" name="kronis" required>
                                    <option value="" disabled selected>Pilih jawaban</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div id="jenisPenyakitSection" class="visually-hidden">
                                <label for="jenisPenyakit" class="form-label fw-semibold">Jika Ya, sebutkan jenis
                                    penyakit:</label>
                                <input type="text" class="form-control" id="jenisPenyakit" name="ket_kronis"
                                    placeholder="Sebutkan jenis penyakit" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="perawatanMedis" class="form-label fw-semibold">Apakah Anda sedang dalam
                                    perawatan medis?</label>
                                <select class="form-select border-orange" id="perawatanMedis" name="medis" required>
                                    <option value="" disabled selected>Pilih jawaban</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div id="jenisPerawatanSection" class="visually-hidden">
                                <label for="jenisPerawatan" class="form-label fw-semibold">Jika Ya, sebutkan jenis
                                    perawatan:</label>
                                <input type="text" class="form-control" id="jenisPerawatan" name="ket_medis"
                                    placeholder="Sebutkan jenis perawatan" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group mb-3">
                                <label for="operasi" class="form-label fw-semibold">Apakah Anda pernah menjalani
                                    operasi?</label>
                                <select class="form-select border-orange" id="operasi" name="operasi" required>
                                    <option value="" disabled selected>Pilih jawaban</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div id="jenisOperasiSection" class="visually-hidden">
                                <label for="jenisOperasi" class="form-label fw-semibold">Jika Ya, sebutkan jenis
                                    operasi dan tanggal:</label>
                                <input type="text" class="form-control" id="jenisOperasi" name="ket_operasi"
                                    placeholder="Masukkan jenis operasi dan tanggal" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="obatObatan" class="form-label fw-semibold">Apakah Anda rutin mengonsumsi
                                    obat-obatan?</label>
                                <select class="form-select border-orange" id="obatObatan" name="obat" required>
                                    <option value="" disabled selected>Pilih jawaban</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div id="jenisObatSection" class="visually-hidden">
                                <label for="jenisObat" class="form-label fw-semibold">Jika Ya, sebutkan jenis
                                    obat:</label>
                                <input type="text" class="form-control" id="jenisObat" name="ket_obat"
                                    placeholder="Masukkan jenis obat" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="keterbatasanFisik" class="form-label fw-semibold">Apakah Anda memiliki
                                    keterbatasan fisik atau kebutuhan khusus?</label>
                                <select class="form-select border-orange" id="keterbatasanFisik" name="khusus"
                                    required>
                                    <option value="" disabled selected>Pilih jawaban</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div id="jenisKeterbatasanSection" class="visually-hidden">
                                <label for="jenisKeterbatasan" class="form-label fw-semibold">Jika Ya, sebutkan
                                    keterbatasan atau kebutuhan khusus:</label>
                                <input type="text" class="form-control" id="jenisKeterbatasan" name="ket_khusus"
                                    placeholder="Masukkan keterbatasan atau kebutuhan khusus" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="keteranganTambahan" class="form-label fw-semibold">Keterangan tambahan
                                    mengenai kondisi kesehatan:</label>
                                <textarea class="form-control" id="keteranganTambahan" name="tambahan" rows="8"
                                    placeholder="Masukkan keterangan tambahan" required></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="fw-semibold mt-3">Catatan:</p>
                <p class="text-rata">
                    Isikan informasi kesehatan ini dengan lengkap dan jujur. SMA Unggulan Rushd hanya menyediakan
                    fasilitas untuk pengobatan ringan. Untuk kebutuhan pengobatan yang lebih serius, hal tersebut
                    menjadi
                    tanggung jawab orang tua atau wali siswa. Penyampaian informasi yang tidak benar mengakibatkan
                    diskualifikasi calon siswa atau siswa.
                </p>
            </div>

            <!-- End of Form Biodata -->
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
