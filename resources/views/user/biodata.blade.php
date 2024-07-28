<x-main-layout>
    <div class="container justify-content-center d-flex">
        <div class="col-md-10 col-lg-8">
            <div class="shadow-lg p-3 mb-5 mt-5 justify-content-center bg-white rounded-3">
                <div class="mt-5">
                    <h2 class="text-center text-orange poppins-bold">
                        Isi Biodata Calon Siswa
                    </h2>
                    <div class="step mt-4">
                        <span class="circle active">1</span>
                        <span class="line"></span>
                        <span class="circle">2</span>
                        <span class="line"></span>
                        <span class="circle">3</span>
                        <span class="line"></span>
                        <span class="circle">4</span>
                    </div>
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

                <div class="mx-md-5 mx-2 mb-5">
                    <form action="{{ route('biodata.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_pendaftaran" value="{{ $data->id }}">
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="namaLengkap">Nama Lengkap:</label>
                            <input type="text" class="form-control border-orange" id="namaLengkap" name="name"
                                value="{{ old('name') }}" placeholder="Masukkan nama lengkap" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="asalSekolah">Asal Sekolah:</label>
                            <input type="text" class="form-control border-orange" id="asalSekolah"
                                name="asal_sekolah" value="{{ old('asal_sekolah') }}"
                                placeholder="Masukkan asal sekolah" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="nisn">NISN:</label>
                            <input type="text" class="form-control border-orange" id="nisn" name="nisn"
                                value="{{ old('nisn') }}" placeholder="Masukkan NISN" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="jenisKelamin">Jenis Kelamin:</label>
                            <select class="form-select border-orange" id="jenisKelamin" name="gender" required>
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label noto-sans-regular" for="tempat">Tempat Lahir:</label>
                                    <input type="text" class="form-control border-orange" id="tempat"
                                        name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                        placeholder="Masukkan tempat lahir" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label noto-sans-regular" for="tanggal">Tanggal Lahir:</label>
                                    <input type="date" class="form-control border-orange" id="tanggal"
                                        name="tgl_lahir" value="{{ old('tgl_lahir') }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="alamat">Alamat Rumah:</label>
                            <input type="text" class="form-control border-orange" id="alamat" name="alamat"
                                value="{{ old('alamat') }}" placeholder="Masukkan alamat rumah" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="kabupatenKota">Kabupaten/Kota:</label>
                            <input type="text" class="form-control border-orange" id="kabupatenKota" name="kabupaten"
                                value="{{ old('kabupaten') }}" placeholder="Masukkan kabupaten/kota" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="provinsi">Provinsi:</label>
                            <input type="text" class="form-control border-orange" id="provinsi" name="provinsi"
                                value="{{ old('provinsi') }}" placeholder="Masukkan provinsi" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="telepon">Nomor Telepon/HP:</label>
                            <input type="text" class="form-control border-orange" id="telepon" name="telepon"
                                value="{{ old('telepon') }}" placeholder="Masukkan nomor telepon/HP" required />
                        </div>

                        <div class="justify-content-end d-flex">
                            <button type="submit" class="btn btn-orange text-white mt-3">
                                Selanjutnya
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
