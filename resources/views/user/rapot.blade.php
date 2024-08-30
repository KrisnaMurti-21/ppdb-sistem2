<x-main-layout>
    <x-slot:title>Form Rapot Calon Siswa</x-slot:title>
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
                <div class="col text-form-me text-center fs-6 py-3 border-bottom border-primary-subtle">
                    <i class="fa-regular fa-circle-check me-2"></i>Nilai Pengetahuan
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
            <!-- Form Rapot -->
            <div class="p-5">
                <form action="{{ route('rapot.store') }}" method="POST" id="biodataForm">
                    @csrf
                    <div class="row row-gap-5">
                        <div class="col-12 col-sm-6 px-lg-5">
                            <div class="bg-white shadow-lg rounded pb-3">
                                <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                    Kelas 7 Semester 1
                                </div>
                                <div class="mx-4 mt-3">
                                    <div class="mb-3">
                                        <label for="matematika_7s1" class="form-label fw-semibold">Matematika</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="matematika_7s1"
                                            name="mtk_7s1" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="b_inggris_7s1" class="form-label fw-semibold">Bahasa Inggris</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="b_inggris_7s1"
                                            name="inggris_7s1" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="ipa_7s1" class="form-label fw-semibold">IPA</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="ipa_7s1"
                                            name="ipa_7s1" placeholder="Masukkan Nilai" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 px-lg-5">
                            <div class="bg-white shadow-lg rounded pb-3">
                                <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                    Kelas 7 Semester 2
                                </div>
                                <div class="mx-4 mt-3">
                                    <div class="mb-3">
                                        <label for="matematika_7s2" class="form-label fw-semibold">Matematika</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="matematika_7s2"
                                            name="mtk_7s2" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="b_inggris_7s2" class="form-label fw-semibold">Bahasa Inggris</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="b_inggris_7s2"
                                            name="inggris_7s2" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="ipa_7s2" class="form-label fw-semibold">IPA</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="ipa_7s2"
                                            name="ipa_7s2" placeholder="Masukkan Nilai" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 px-lg-5">
                            <div class="bg-white shadow-lg rounded pb-3">
                                <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                    Kelas 8 Semester 1
                                </div>
                                <div class="mx-4 mt-3">
                                    <div class="mb-3">
                                        <label for="matematika_8s1" class="form-label fw-semibold">Matematika</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="matematika_8s1"
                                            name="mtk_8s1" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="b_inggris_8s1" class="form-label fw-semibold">Bahasa Inggris</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="b_inggris_8s1"
                                            name="inggris_8s1" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="ipa_8s1" class="form-label fw-semibold">IPA</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="ipa_8s1"
                                            name="ipa_8s1" placeholder="Masukkan Nilai" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 px-lg-5">
                            <div class="bg-white shadow-lg rounded pb-3">
                                <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                    Kelas 8 Semester 2
                                </div>
                                <div class="mx-4 mt-3">
                                    <div class="mb-3">
                                        <label for="matematika_8s2" class="form-label fw-semibold">Matematika</label>
                                        <input type="number" class="form-control input-tanpa-arrow"
                                            id="matematika_8s2" name="mtk_8s2" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="b_inggris_8s2" class="form-label fw-semibold">Bahasa
                                            Inggris</label>
                                        <input type="number" class="form-control input-tanpa-arrow"
                                            id="b_inggris_8s2" name="inggris_8s2" placeholder="Masukkan Nilai" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="ipa_8s2" class="form-label fw-semibold">IPA</label>
                                        <input type="number" class="form-control input-tanpa-arrow" id="ipa_8s2"
                                            name="ipa_8s2" placeholder="Masukkan Nilai" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prestasi -->
                    @if ($jalur == 'prestasi')
                        <div class="row">
                            <div class="col px-lg-5 pt-5">
                                <div class="bg-white shadow-lg rounded pb-3">
                                    <div class="form-head-orange text-center fs-3 fw-semibold rounded py-3">
                                        Prestasi
                                    </div>
                                    <div class="mx-4 mt-3" id="prestasi-container">
                                        <div class="prestasi-item">
                                            <div class="mb-3">
                                                <label for="tingkat" class="form-label fw-semibold">Tingkat</label>
                                                <input type="text" class="form-control input-tanpa-arrow"
                                                    name="prestasis[0][tingkat]" placeholder="Masukkan Tingkat" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="juara" class="form-label fw-semibold">Juara</label>
                                                <input type="text" class="form-control input-tanpa-arrow"
                                                    name="prestasis[0][juara]" placeholder="Masukkan Juara" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="bidang" class="form-label fw-semibold">Bidang</label>
                                                <input type="text" class="form-control input-tanpa-arrow"
                                                    name="prestasis[0][bidang]" placeholder="Masukkan Bidang" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="penyelenggara"
                                                    class="form-label fw-semibold">Penyelenggara</label>
                                                <input type="text" class="form-control input-tanpa-arrow"
                                                    name="prestasis[0][penyelenggara]"
                                                    placeholder="Masukkan Penyelenggara" />
                                            </div>
                                            <button type="button" class="btn btn-danger remove-prestasi">
                                                Hapus Prestasi
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ms-4">

                                        <button type="button" id="add-prestasi" class="btn btn-primary mt-3">
                                            Tambah Prestasi <i class="fa-solid fa-arrow-left ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- End of Prestasi -->
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
        let prestasiCount = 1;

        document.getElementById('add-prestasi').addEventListener('click', function() {
            const prestasiContainer = document.getElementById('prestasi-container');
            const newPrestasiItem = document.createElement('div');
            newPrestasiItem.classList.add('prestasi-item');

            newPrestasiItem.innerHTML = `
        <hr />
        <div class="mb-3">
            <label for="tingkat" class="form-label fw-semibold">Tingkat</label>
            <input type="text" class="form-control input-tanpa-arrow" name="prestasis[${prestasiCount}][tingkat]"
                placeholder="Masukkan Tingkat" />
        </div>
        <div class="mb-3">
            <label for="juara" class="form-label fw-semibold">Juara</label>
            <input type="text" class="form-control input-tanpa-arrow" name="prestasis[${prestasiCount}][juara]"
                placeholder="Masukkan Juara" />
        </div>
        <div class="mb-3">
            <label for="bidang" class="form-label fw-semibold">Bidang</label>
            <input type="text" class="form-control input-tanpa-arrow" name="prestasis[${prestasiCount}][bidang]"
                placeholder="Masukkan Bidang" />
        </div>
        <div class="mb-3">
            <label for="penyelenggara" class="form-label fw-semibold">Penyelenggara</label>
            <input type="text" class="form-control input-tanpa-arrow" name="prestasis[${prestasiCount}][penyelenggara]"
                placeholder="Masukkan Penyelenggara" />
        </div>
        <button type="button" class="btn btn-danger remove-prestasi">
            Hapus Prestasi
        </button>
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

        document.getElementById('submitButton').addEventListener('click', function() {
            document.getElementById('biodataForm').submit();
        });
    </script>
</x-main-layout>
