<x-main-layout>
    <div class="container justify-content-center d-flex">
        <div class="col-md-10 col-lg-8">
            <div class="shadow-lg p-3 mb-5 mt-5 justify-content-center rounded-3 bg-white">
                <div class="mt-5">
                    <h2 class="text-center text-orange poppins-bold">
                        Edit Kondisi Kesehatan
                    </h2>

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
                    <form action="{{ route('kesehatan.update', $kesehatan->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="golonganDarah" class="noto-sans-regular">Golongan Darah:</label>
                            <select class="form-select border-orange" id="golonganDarah" name="gol_darah" required>
                                <option value="" disabled>
                                    Pilih golongan darah
                                </option>
                                <option value="A"
                                    {{ old('gol_darah', $kesehatan->gol_darah ?? '') == 'A' ? 'selected' : '' }}>A
                                </option>
                                <option value="B"
                                    {{ old('gol_darah', $kesehatan->gol_darah ?? '') == 'B' ? 'selected' : '' }}>B
                                </option>
                                <option value="AB"
                                    {{ old('gol_darah', $kesehatan->gol_darah ?? '') == 'AB' ? 'selected' : '' }}>AB
                                </option>
                                <option value="O"
                                    {{ old('gol_darah', $kesehatan->gol_darah ?? '') == 'O' ? 'selected' : '' }}>O
                                </option>
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label for="tinggiBadan" class="noto-sans-regular">Tinggi Badan (cm):</label>
                            <input type="number" class="form-control border-orange" id="tinggiBadan"
                                name="tinggi_badan" placeholder="Masukkan tinggi badan"
                                value="{{ old('tinggi_badan', $kesehatan->tinggi_badan) }}" required />
                        </div>

                        <div class="form-group mb-3">
                            <label for="beratBadan" class="noto-sans-regular">Berat Badan (kg):</label>
                            <input type="number" class="form-control border-orange" id="beratBadan" name="berat_badan"
                                placeholder="Masukkan berat badan"
                                value="{{ old('berat_badan', $kesehatan->berat_badan) }}" required />
                        </div>

                        <div class="form-group mb-3">
                            <label for="alergi" class="noto-sans-regular">Apakah Anda memiliki alergi?</label>
                            <select class="form-select border-orange" id="alergi" name="alergi" required>
                                <option value="" disabled>Pilih jawaban</option>
                                <option value="Ya"
                                    {{ old('alergi', $kesehatan->alergi ?? '') == '1' ? 'selected' : '' }}>Ya</option>
                                <option value="Tidak"
                                    {{ old('alergi', $kesehatan->alergi ?? '') == '0' ? 'selected' : '' }}>Tidak
                                </option>
                            </select>
                        </div>

                        <div id="jenisAlergiSection" class="visually-hidden">
                            <label for="jenisAlergi" class="noto-sans-regular">Jika Ya, sebutkan jenis alergi:</label>
                            <input type="text" class="form-control border-orange" id="jenisAlergi" name="ket_alergi"
                                placeholder="Masukkan jenis alergi"
                                value="{{ old('ket_alergi', $kesehatan->ket_alergi) }}"" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="penyakitKronis" class="noto-sans-regular">Apakah Anda memiliki riwayat penyakit
                                kronis?</label>
                            <select class="form-select border-orange" id="penyakitKronis" name="kronis" required>
                                <option value="" disabled>Pilih jawaban</option>
                                <option value="Ya"
                                    {{ old('kronis', $kesehatan->kronis ?? '') == '1' ? 'selected' : '' }}>Ya</option>
                                <option value="Tidak"
                                    {{ old('kronis', $kesehatan->kronis ?? '') == '0' ? 'selected' : '' }}>Tidak
                                </option>
                            </select>
                        </div>

                        <div id="jenisPenyakitSection" class="visually-hidden">
                            <label for="jenisPenyakit" class="noto-sans-regular">Jika Ya, sebutkan jenis
                                penyakit:</label>
                            <input type="text" class="form-control border-orange" id="jenisPenyakit"
                                name="ket_kronis" placeholder="Masukkan jenis penyakit"
                                value="{{ old('ket_kronis', $kesehatan->ket_kronis) }}" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="perawatanMedis" class="noto-sans-regular">Apakah Anda sedang dalam perawatan
                                medis?</label>
                            <select class="form-select border-orange" id="perawatanMedis" name="medis" required>
                                <option value="" disabled>Pilih jawaban</option>
                                <option value="Ya"
                                    {{ old('medis', $kesehatan->medis ?? '') == '1' ? 'selected' : '' }}>Ya</option>
                                <option value="Tidak"
                                    {{ old('medis', $kesehatan->medis ?? '') == '0' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div id="jenisPerawatanSection" class="visually-hidden">
                            <label for="jenisPerawatan" class="noto-sans-regular">Jika Ya, sebutkan jenis
                                perawatan:</label>
                            <input type="text" class="form-control border-orange" id="jenisPerawatan"
                                name="ket_medis" placeholder="Masukkan jenis perawatan"
                                value="{{ old('ket_medis', $kesehatan->ket_medis) }}" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="operasi" class="noto-sans-regular">Apakah Anda pernah menjalani
                                operasi?</label>
                            <select class="form-select border-orange" id="operasi" name="operasi" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya"
                                    {{ old('operasi', $kesehatan->operasi ?? '') == '1' ? 'selected' : '' }}>Ya
                                </option>
                                <option value="Tidak"
                                    {{ old('operasi', $kesehatan->operasi ?? '') == '0' ? 'selected' : '' }}>Tidak
                                </option>
                            </select>
                        </div>

                        <div id="jenisOperasiSection" class="visually-hidden">
                            <label for="jenisOperasi" class="noto-sans-regular">Jika Ya, sebutkan jenis operasi dan
                                tanggal:</label>
                            <input type="text" class="form-control border-orange" id="jenisOperasi"
                                name="ket_operasi" placeholder="Masukkan jenis operasi dan tanggal"
                                value="{{ old('ket_operasi', $kesehatan->ket_operasi) }}" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="obatObatan" class="noto-sans-regular">Apakah Anda rutin mengonsumsi
                                obat-obatan?</label>
                            <select class="form-select border-orange" id="obatObatan" name="obat" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya"
                                    {{ old('obat', $kesehatan->obat ?? '') == '1' ? 'selected' : '' }}>Ya</option>
                                <option value="Tidak"
                                    {{ old('obat', $kesehatan->obat ?? '') == '0' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>

                        <div id="jenisObatSection" class="visually-hidden">
                            <label for="jenisObat" class="noto-sans-regular">Jika Ya, sebutkan jenis obat:</label>
                            <input type="text" class="form-control border-orange" id="jenisObat" name="ket_obat"
                                placeholder="Masukkan jenis obat"
                                value="{{ old('ket_obat', $kesehatan->ket_obat) }}" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="keterbatasanFisik" class="noto-sans-regular">Apakah Anda memiliki keterbatasan
                                fisik atau kebutuhan
                                khusus?</label>
                            <select class="form-select border-orange" id="keterbatasanFisik" name="khusus" required>
                                <option value="" disabled selected>Pilih jawaban</option>
                                <option value="Ya"
                                    {{ old('khusus', $kesehatan->khusus ?? '') == '1' ? 'selected' : '' }}>Ya</option>
                                <option value="Tidak"
                                    {{ old('khusus', $kesehatan->khusus ?? '') == '0' ? 'selected' : '' }}>Tidak
                                </option>
                            </select>
                        </div>

                        <div id="jenisKeterbatasanSection" class="visually-hidden">
                            <label for="jenisKeterbatasan" class="noto-sans-regular">Jika Ya, sebutkan keterbatasan
                                atau kebutuhan khusus:</label>
                            <input type="text" class="form-control border-orange" id="jenisKeterbatasan"
                                name="ket_khusus" placeholder="Masukkan keterbatasan atau kebutuhan khusus"
                                value="{{ old('ket_khusus', $kesehatan->ket_khusus) }}" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="keteranganTambahan" class="noto-sans-regular">Keterangan tambahan mengenai
                                kondisi kesehatan:</label>
                            <textarea class="form-control border-orange" id="keteranganTambahan" rows="3" name="tambahan"
                                placeholder="Masukkan keterangan tambahan" required>{{ old('tambahan', $kesehatan->tambahan) }}</textarea>
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
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
