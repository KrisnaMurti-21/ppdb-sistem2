<x-main-layout>
    <x-slot:title>Form Biodata Calon Siswa</x-slot:title>
    <x-slot:body>
        form-bg
    </x-slot:body>
    <div class="container mt-5 mb-5 rounded">
        <div class="title-form-me fw-bold px-5 fs-4 rounded-top py-3">
            Isi Biodata Calon Siswa
        </div>
        <div class="bg-white pt-3 rounded-bottom">
            <!-- tab daftar form -->
            <div class="row px-5">
                <div class="col text-form-me text-center fs-6 py-3 border-bottom border-primary-subtle">
                    <i class="fa-regular fa-circle-check me-2"></i>Biodata
                </div>
                <div class="col text-form-me text-center fs-6 py-3">
                    <i class="fa-regular fa-circle me-2"></i>Nilai Pengetahuan
                </div>
                <div class="col text-form-me text-center fs-6 py-3">
                    <i class="fa-regular fa-circle me-2"></i>Kondisi Kesehatan
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
                <form action="{{ route('biodata.store') }}" method="POST" id="biodataForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap" required />
                            </div>
                            <div class="mb-3">
                                <label for="asal_sekolah" class="form-label fw-semibold">Asal Sekolah :</label>
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                    value="{{ old('asal_sekolah') }}" placeholder="Masukkan Asal Sekolah" required />
                            </div>
                            <div class="mb-3">
                                <label for="nisn" class="form-label fw-semibold">NISN :</label>
                                <input type="text" class="form-control" id="nisn" name="nisn"
                                    value="{{ old('nisn') }}" placeholder="Masukkan NISN" />
                            </div>
                            <div class="mb-3">
                                <label for="nisn" class="form-label fw-semibold">Jenis Kelamin :</label>
                                <select class="form-select" aria-label="Default select example" name="gender" required>
                                    <option disabled {{ old('gender') ? '' : 'selected' }}>Pilih Jenis Kelamin</option>
                                    <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label fw-semibold">Tempat Lahir :</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir" required />
                            </div>
                            <div class="mb-3">
                                <label for="tgl_lahir" class="form-label fw-semibold">Tempat Lahir :</label>
                                <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir"
                                    value="{{ old('tgl_lahir') }}" required />
                            </div>
                            <div class="mb-3">
                                <label for="alamat_rumah" class="form-label fw-semibold">Alamat Rumah :</label>
                                <input type="text" class="form-control" id="alamat_rumah" name="alamat"
                                    value="{{ old('alamat') }}" placeholder="Masukkan Alamat Rumah" required />
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label fw-semibold">Kabupaten/Kota :</label>
                                <input type="text" class="form-control" id="kota" name="kabupaten"
                                    value="{{ old('kabupaten') }}" placeholder="Masukkan Kabupaten/Kota" required />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="mb-3">
                                <label for="provinsi" class="form-label fw-semibold">Provinsi :</label>

                                <input type="text" class="form-control" id="provinsi"
                                    placeholder="Masukkan Provinsi" name="provinsi" value="{{ old('provinsi') }}"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label fw-semibold">Nomor Telepon/HP :</label>
                                <input type="text" class="form-control" id="telephone" name="telepon"
                                    value="{{ old('telepon') }}" placeholder="Masukkan Nomor Telepon/HP" required />
                            </div>
                        </div>
                    </div>
                </form>
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
