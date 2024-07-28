<x-main-layout>
    <div class="container justify-content-center d-flex">
        <div class="col-md-10 col-lg-8">
            <div class="shadow-lg p-3 mb-5 mt-5 justify-content-center rounded-3 bg-white">
                <div class="mt-5">
                    <h2 class="text-center text-orange poppins-bold">
                        Isi Biodata Orang Tua Calon Siswa
                    </h2>
                    <div class="step mt-4">
                        <span class="circle active">1</span>
                        <span class="line active"></span>
                        <span class="circle active">2</span>
                        <span class="line active"></span>
                        <span class="circle active">3</span>
                        <span class="line active"></span>
                        <span class="circle active">4</span>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="mx-md-5 mx-2 mb-5">
                    <form action="{{ route('datawali.store') }}" method="POST">
                        @csrf
                        <h4>Ayah</h4>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="namaAyah">Nama Lengkap:</label>
                            <input type="text" class="form-control border-orange" id="namaAyah" name="nama_ayah"
                                placeholder="Masukkan nama lengkap ayah" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="pekerjaanAyah">Pekerjaan:</label>
                            <input type="text" class="form-control border-orange" id="pekerjaanAyah"
                                name="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="teleponAyah">Nomor Telepon:</label>
                            <input type="text" class="form-control border-orange" id="teleponAyah"
                                name="telepon_ayah" placeholder="Masukkan nomor telepon ayah" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="alamatAyah">Alamat Rumah:</label>
                            <input type="text" class="form-control border-orange" id="alamatAyah" name="alamat_ayah"
                                placeholder="Masukkan alamat rumah ayah" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="kabupatenKotaAyah">Kabupaten/Kota:</label>
                            <input type="text" class="form-control border-orange" id="kabupatenKotaAyah"
                                name="kota_ayah" placeholder="Masukkan kabupaten/kota ayah" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="provinsiAyah">Provinsi:</label>
                            <input type="text" class="form-control border-orange" id="provinsiAyah"
                                name="provinsi_ayah" placeholder="Masukkan provinsi ayah" required />
                        </div>

                        <h4>Ibu</h4>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="namaIbu">Nama Lengkap:</label>
                            <input type="text" class="form-control border-orange" id="namaIbu" name="nama_ibu"
                                placeholder="Masukkan nama lengkap ibu" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="pekerjaanIbu">Pekerjaan:</label>
                            <input type="text" class="form-control border-orange" id="pekerjaanIbu"
                                name="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="teleponIbu">Nomor Telepon:</label>
                            <input type="text" class="form-control border-orange" id="teleponIbu" name="telepon_ibu"
                                placeholder="Masukkan nomor telepon ibu" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="alamatIbu">Alamat Rumah:</label>
                            <input type="text" class="form-control border-orange" id="alamatIbu" name="alamat_ibu"
                                placeholder="Masukkan alamat rumah ibu" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="kabupatenKotaIbu">Kabupaten/Kota:</label>
                            <input type="text" class="form-control border-orange" id="kabupatenKotaIbu"
                                name="kota_ibu" placeholder="Masukkan kabupaten/kota ibu" required />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="provinsiIbu">Provinsi:</label>
                            <input type="text" class="form-control border-orange" id="provinsiIbu"
                                name="provinsi_ibu" placeholder="Masukkan provinsi ibu" required />
                        </div>

                        <h4>Wali Siswa</h4>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="namaWali">Nama Lengkap:</label>
                            <input type="text" class="form-control border-orange" id="namaWali" name="nama_wali"
                                placeholder="Masukkan nama lengkap wali" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="pekerjaanWali">Pekerjaan:</label>
                            <input type="text" class="form-control border-orange" id="pekerjaanWali"
                                name="pekerjaan_wali" placeholder="Masukkan pekerjaan wali" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="teleponWali">Nomor Telepon:</label>
                            <input type="text" class="form-control border-orange" id="teleponWali"
                                name="telepon_wali" placeholder="Masukkan nomor telepon wali" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="alamatWali">Alamat Rumah:</label>
                            <input type="text" class="form-control border-orange" id="alamatWali"
                                name="alamat_wali" placeholder="Masukkan alamat rumah wali" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular"
                                for="kabupatenKotaWali">Kabupaten/Kota:</label>
                            <input type="text" class="form-control border-orange" id="kabupatenKotaWali"
                                name="kota_wali" placeholder="Masukkan kabupaten/kota wali" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="provinsiWali">Provinsi:</label>
                            <input type="text" class="form-control border-orange" id="provinsiWali"
                                name="provinsi_wali" placeholder="Masukkan provinsi wali" />
                        </div>

                        <button type="submit" class="btn btn-orange text-white mt-3">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
