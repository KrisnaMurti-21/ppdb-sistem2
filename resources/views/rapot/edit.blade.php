<x-main-layout>
    <div class="container shadow-lg p-3 mb-5 mt-5 justify-content-center bg-white rounded">
        <div class="mt-5">
            <h2 class="text-center text-orange poppins-bold">
                Edit Nilai Rapor Kelas 7 dan 8
            </h2>
        </div>

        <div class="mt-5 mx-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('rapot.update', $rapot->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <!-- Kelas 7 Semester 1 -->
                        <div class="card mb-4">
                            <div class="card-header bg-orange">
                                <h5 class="card-title text-white noto-sans-regular">
                                    Kelas 7 Semester 1
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="math7s1" class="form-label noto-sans-regular">Matematika</label>
                                    <input type="number" class="form-control border-orange" id="math_7s1"
                                        name="mtk_7s1" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('mtk_7s1', $rapot->mtk_7s1) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="english7s1" class="form-label noto-sans-regular">Bahasa Inggris</label>
                                    <input type="number" class="form-control border-orange" id="english7s1"
                                        name="inggris_7s1" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('inggris_7s1', $rapot->inggris_7s1) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="ipa7s1" class="form-label noto-sans-regular">IPA</label>
                                    <input type="number" class="form-control border-orange" id="ipa7s1"
                                        name="ipa_7s1" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('ipa_7s1', $rapot->ipa_7s1) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Kelas 7 Semester 2 -->
                        <div class="card mb-4">
                            <div class="card-header bg-orange">
                                <h5 class="card-title text-white noto-sans-regular">
                                    Kelas 7 Semester 2
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="math7s2" class="form-label noto-sans-regular">Matematika</label>
                                    <input type="number" class="form-control border-orange" id="math7s2"
                                        name="mtk_7s2" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('mtk_7s2', $rapot->mtk_7s2) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="english7s2" class="form-label noto-sans-regular">Bahasa Inggris</label>
                                    <input type="number" class="form-control border-orange" id="english7s2"
                                        name="inggris_7s2" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('inggris_7s2', $rapot->inggris_7s2) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="ipa7s2" class="form-label noto-sans-regular">IPA</label>
                                    <input type="number" class="form-control border-orange" id="ipa7s2"
                                        name="ipa_7s2" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('ipa_7s2', $rapot->ipa_7s2) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Kelas 8 Semester 1 -->
                        <div class="card mb-4">
                            <div class="card-header bg-orange">
                                <h5 class="card-title text-white noto-sans-regular">
                                    Kelas 8 Semester 1
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="math8s1" class="form-label noto-sans-regular">Matematika</label>
                                    <input type="number" class="form-control border-orange" id="math8s1"
                                        name="mtk_8s1" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('mtk_8s1', $rapot->mtk_8s1) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="english8s1" class="form-label noto-sans-regular">Bahasa
                                        Inggris</label>
                                    <input type="number" class="form-control border-orange" id="english8s1"
                                        name="inggris_8s1" placeholder="Masukkan nilai" min="0"
                                        max="100" value="{{ old('inggris_8s1', $rapot->inggris_8s1) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="ipa8s1" class="form-label noto-sans-regular">IPA</label>
                                    <input type="number" class="form-control border-orange" id="ipa8s1"
                                        name="ipa_8s1" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('ipa_8s1', $rapot->ipa_8s1) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Kelas 8 Semester 2 -->
                        <div class="card mb-4">
                            <div class="card-header bg-orange">
                                <h5 class="card-title text-white noto-sans-regular">
                                    Kelas 8 Semester 2
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="math8s2" class="form-label noto-sans-regular">Matematika</label>
                                    <input type="number" class="form-control border-orange" id="math8s2"
                                        name="mtk_8s2" placeholder="Masukkan nilai" min="0"
                                        max="100"value="{{ old('mtk_8s2', $rapot->mtk_8s2) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="english8s2" class="form-label noto-sans-regular">Bahasa
                                        Inggris</label>
                                    <input type="number" class="form-control border-orange" id="english8s2"
                                        name="inggris_8s2" placeholder="Masukkan nilai" min="0"
                                        max="100" value="{{ old('inggris_8s2', $rapot->inggris_8s2) }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="ipa8s2" class="form-label noto-sans-regular">IPA</label>
                                    <input type="number" class="form-control border-orange" id="ipa8s2"
                                        name="ipa_8s2" placeholder="Masukkan nilai" min="0" max="100"
                                        value="{{ old('ipa_8s2', $rapot->ipa_8s2) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($jalur == 'prestasi')
                    <h2 class="text-center text-orange poppins-bold">
                        Form Input Prestasi
                    </h2>

                    <div id="prestasi-container">
                        @foreach ($prestasis as $index => $prestasi)
                            @if ($index > 0)
                                <hr>
                            @endif
                            <div class="prestasi-item">
                                <input type="hidden" name="prestasis[{{ $index }}][id]"
                                    value="{{ $prestasi->id ?? '' }}" />
                                <div class="mb-3">
                                    <label for="tingkat" class="noto-sans-regular">Tingkat</label>
                                    <input type="text" class="form-control border-orange"
                                        name="prestasis[{{ $index }}][tingkat]"
                                        placeholder="Masukkan tingkat kejuaraan"
                                        value="{{ $prestasi->tingkat ?? '' }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="juara" class="noto-sans-regular">Juara</label>
                                    <input type="text" class="form-control border-orange"
                                        name="prestasis[{{ $index }}][juara]"
                                        placeholder="Masukkan peringkat juara"
                                        value="{{ $prestasi->juara ?? '' }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="bidang" class="noto-sans-regular">Bidang</label>
                                    <input type="text" class="form-control border-orange"
                                        name="prestasis[{{ $index }}][bidang]"
                                        placeholder="Masukkan Bidang Lomba" value="{{ $prestasi->bidang ?? '' }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="penyelenggara" class="noto-sans-regular">Penyelenggara</label>
                                    <input type="text" class="form-control border-orange"
                                        name="prestasis[{{ $index }}][penyelenggara]"
                                        placeholder="Masukkan Nama Penyelenggara"
                                        value="{{ $prestasi->penyelenggara ?? '' }}" />
                                </div>
                                @if ($index > 0)
                                    <button type="button" class="btn btn-danger remove-prestasi">Hapus
                                        Prestasi</button>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <button type="button" id="add-prestasi" class="btn btn-orange text-white mb-3">
                        Tambah Prestasi
                    </button>
                @endif

                <!-- Submit Button -->
                <div class="d-grid mb-5">
                    <button type="submit" class="btn btn-orange text-white mt-3">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5"><br /></div>

    <script>
        let prestasiCount = {{ count($prestasis) }}; // Set initial count to match existing items

        document.getElementById('add-prestasi').addEventListener('click', function() {
            const prestasiContainer = document.getElementById('prestasi-container');
            const newPrestasiItem = document.createElement('div');
            newPrestasiItem.classList.add('prestasi-item');

            newPrestasiItem.innerHTML = `
        <input type="hidden" name="prestasis[${prestasiCount}][id]" value="" />
        <div class="mb-3">
            <label for="tingkat" class="noto-sans-regular">Tingkat</label>
            <input type="text" class="form-control border-orange" name="prestasis[${prestasiCount}][tingkat]"
                placeholder="Masukkan tingkat kejuaraan" />
        </div>
        <div class="mb-3">
            <label for="juara" class="noto-sans-regular">Juara</label>
            <input type="text" class="form-control border-orange" name="prestasis[${prestasiCount}][juara]"
                placeholder="Masukkan peringkat juara" />
        </div>
        <div class="mb-3">
            <label for="bidang" class="noto-sans-regular">Bidang</label>
            <input type="text" class="form-control border-orange" name="prestasis[${prestasiCount}][bidang]"
                placeholder="Masukkan Bidang Lomba" />
        </div>
        <div class="mb-3">
            <label for="penyelenggara" class="noto-sans-regular">Penyelenggara</label>
            <input type="text" class="form-control border-orange" name="prestasis[${prestasiCount}][penyelenggara]"
                placeholder="Masukkan Nama Penyelenggara" />
        </div>
        <button type="button" class="btn btn-danger remove-prestasi">Hapus Prestasi</button>
    `;

            prestasiContainer.appendChild(newPrestasiItem);
            prestasiCount++;
        });

        document.getElementById('prestasi-container').addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-prestasi')) {
                const prestasiItems = document.querySelectorAll('.prestasi-item');
                if (prestasiItems.length > 1) {
                    event.target.parentElement.remove();
                } else {
                    alert("Setidaknya satu kolom prestasi harus ada.");
                }
            }
        });
    </script>
</x-main-layout>
