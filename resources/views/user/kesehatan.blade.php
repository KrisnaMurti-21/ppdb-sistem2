<x-main-layout>
    <div class="container justify-content-center d-flex">
        <div class="col-md-10 col-lg-8">
            <div class="shadow-lg p-3 mb-5 mt-5 justify-content-center rounded-3 bg-white">
                <div class="mt-5">
                    <h2 class="text-center text-orange poppins-bold">
                        Kondisi Kesehatan Calon Siswa
                    </h2>
                    <div class="step mt-4">
                        <span class="circle active">1</span>
                        <span class="line active"></span>
                        <span class="circle active">2</span>
                        <span class="line active"></span>
                        <span class="circle active">3</span>
                        <span class="line"></span>
                        <span class="circle">4</span>
                    </div>
                </div>
                <div class="mx-md-5 mx-2 mb-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('kesehatan.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="golonganDarah" class="noto-sans-regular">Golongan Darah:</label>
                            <select class="form-select border-orange" id="golonganDarah" name="gol_darah" required>
                                <option value="" disabled selected>
                                    Pilih golongan darah
                                </option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="tinggiBadan" class="noto-sans-regular">Tinggi Badan (cm):</label>
                            <input type="number" class="form-control border-orange" id="tinggiBadan"
                                name="tinggi_badan" placeholder="Masukkan tinggi badan" required />
                        </div>

                        <div class="form-group mb-3">
                            <label for="beratBadan" class="noto-sans-regular">Berat Badan (kg):</label>
                            <input type="number" class="form-control border-orange" id="beratBadan" name="berat_badan"
                                placeholder="Masukkan berat badan" required />
                        </div>

                        <div class="form-group mb-3">
                            <label for="alergi" class="noto-sans-regular">Apakah Anda memiliki alergi?</label>
                            <select class="form-select border-orange" id="alergi" name="alergi" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div id="jenisAlergiSection" class="visually-hidden">
                            <label for="jenisAlergi" class="noto-sans-regular">Jika Ya, sebutkan jenis alergi:</label>
                            <input type="text" class="form-control border-orange" id="jenisAlergi" name="ket_alergi"
                                placeholder="Masukkan jenis alergi" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="penyakitKronis" class="noto-sans-regular">Apakah Anda memiliki riwayat penyakit
                                kronis?</label>
                            <select class="form-select border-orange" id="penyakitKronis" name="kronis" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div id="jenisPenyakitSection" class="visually-hidden">
                            <label for="jenisPenyakit" class="noto-sans-regular">Jika Ya, sebutkan jenis
                                penyakit:</label>
                            <input type="text" class="form-control border-orange" id="jenisPenyakit"
                                name="ket_kronis" placeholder="Masukkan jenis penyakit" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="perawatanMedis" class="noto-sans-regular">Apakah Anda sedang dalam perawatan
                                medis?</label>
                            <select class="form-select border-orange" id="perawatanMedis" name="medis" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div id="jenisPerawatanSection" class="visually-hidden">
                            <label for="jenisPerawatan" class="noto-sans-regular">Jika Ya, sebutkan jenis
                                perawatan:</label>
                            <input type="text" class="form-control border-orange" id="jenisPerawatan"
                                name="ket_medis" placeholder="Masukkan jenis perawatan" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="operasi" class="noto-sans-regular">Apakah Anda pernah menjalani
                                operasi?</label>
                            <select class="form-select border-orange" id="operasi" name="operasi" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div id="jenisOperasiSection" class="visually-hidden">
                            <label for="jenisOperasi" class="noto-sans-regular">Jika Ya, sebutkan jenis operasi dan
                                tanggal:</label>
                            <input type="text" class="form-control border-orange" id="jenisOperasi"
                                name="ket_operasi" placeholder="Masukkan jenis operasi dan tanggal" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="obatObatan" class="noto-sans-regular">Apakah Anda rutin mengonsumsi
                                obat-obatan?</label>
                            <select class="form-select border-orange" id="obatObatan" name="obat" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div id="jenisObatSection" class="visually-hidden">
                            <label for="jenisObat" class="noto-sans-regular">Jika Ya, sebutkan jenis obat:</label>
                            <input type="text" class="form-control border-orange" id="jenisObat" name="ket_obat"
                                placeholder="Masukkan jenis obat" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="keterbatasanFisik" class="noto-sans-regular">Apakah Anda memiliki keterbatasan
                                fisik atau kebutuhan
                                khusus?</label>
                            <select class="form-select border-orange" id="keterbatasanFisik" name="khusus" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div id="jenisKeterbatasanSection" class="visually-hidden">
                            <label for="jenisKeterbatasan" class="noto-sans-regular">Jika Ya, sebutkan keterbatasan
                                atau kebutuhan khusus:</label>
                            <input type="text" class="form-control border-orange" id="jenisKeterbatasan"
                                name="ket_khusus" placeholder="Masukkan keterbatasan atau kebutuhan khusus" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="keteranganTambahan" class="noto-sans-regular">Keterangan tambahan mengenai
                                kondisi kesehatan:</label>
                            <textarea class="form-control border-orange" id="keteranganTambahan" rows="3" name="tambahan"
                                placeholder="Masukkan keterangan tambahan" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <p class="text-muted">
                                <strong>Catatan:</strong> Isikan informasi kesehatan ini
                                dengan lengkap dan jujur. SMA Unggulan Rushd hanya menyediakan
                                fasilitas untuk pengobatan ringan. Untuk kebutuhan pengobatan
                                yang lebih serius, hal tersebut menjadi tanggung jawab orang
                                tua atau wali siswa. Penyampaian informasi yang tidak benar
                                mengakibatkan diskualifikasi calon siswa atau siswa.
                            </p>
                        </div>

                        <button type="submit" class="btn btn-orange text-white mt-3">
                            Selanjutnya
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
