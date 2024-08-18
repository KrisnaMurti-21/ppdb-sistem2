<x-main-layout>
    <div class="container justify-content-center d-flex">
        <div class="col-md-10 col-lg-8">
            <div class="shadow-lg p-3 mb-5 mt-5 justify-content-center bg-white rounded-3">
                <div class="mt-5">
                    <h2 class="text-center text-orange poppins-bold">
                        Edit Biodata Siswa
                    </h2>
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
                    <form action="{{ route('biodata.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="namaLengkap">Nama Lengkap:</label>
                            <input type="text" class="form-control border-orange" id="namaLengkap"
                                name="nama_lengkap" value="{{ old('nama_lengkap', auth()->user()->name) }}"
                                placeholder="Masukkan nama lengkap" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="asalSekolah">Asal Sekolah:</label>
                            <input type="text" class="form-control border-orange" id="asalSekolah"
                                name="asal_sekolah" value="{{ old('asal_sekolah', $data->asal_sekolah) }}"
                                placeholder="Masukkan asal sekolah" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="nisn">NISN:</label>
                            <input type="text" class="form-control border-orange" id="nisn" name="nisn"
                                value="{{ old('nisn', $data->nisn) }}" placeholder="Masukkan NISN" required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="jenisKelamin">Jenis Kelamin:</label>
                            <select class="form-select border-orange" id="jenisKelamin" name="jenis_kelamin" required>
                                <option disabled {{ old('gender', $data->jenis_kelamin) ? '' : 'selected' }}>Pilih Jenis
                                    Kelamin</option>
                                <option value="L"
                                    {{ old('gender', $data->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="P"
                                    {{ old('gender', $data->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label noto-sans-regular" for="tempat">Tempat Lahir:</label>
                                    <input type="text" class="form-control border-orange" id="tempat"
                                        name="tempat_lahir" value="{{ old('tempat_lahir', $data->tempat_lahir) }}"
                                        placeholder="Masukkan tempat lahir" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label noto-sans-regular" for="tanggal">Tanggal Lahir:</label>
                                    <input type="date" class="form-control border-orange" id="tanggal"
                                        name="tgl_lahir" value="{{ old('tgl_lahir', $data->tanggal_lahir) }}"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="alamat">Alamat Rumah:</label>
                            <input type="text" class="form-control border-orange" id="alamat" name="alamat"
                                value="{{ old('alamat', $data->alamat) }}" placeholder="Masukkan alamat rumah"
                                required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="kabupatenKota">Kabupaten/Kota:</label>
                            <input type="text" class="form-control border-orange" id="kabupatenKota" name="kota"
                                value="{{ old('kota', $data->kota) }}" placeholder="Masukkan kabupaten/kota"
                                required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="provinsi">Provinsi:</label>
                            <input type="text" class="form-control border-orange" id="provinsi" name="provinsi"
                                value="{{ old('provinsi', $data->provinsi) }}" placeholder="Masukkan provinsi"
                                required />
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label noto-sans-regular" for="telepon">Nomor Telepon/HP:</label>
                            <input type="text" class="form-control border-orange" id="telepon" name="telephone"
                                value="{{ old('telephone', $data->telephone) }}"
                                placeholder="Masukkan nomor telepon/HP" required />
                        </div>

                        <div class="justify-content-end d-flex">
                            <button type="submit" class="btn btn-orange text-white mt-3">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
