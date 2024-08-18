<x-main-layout>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rapot</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <nav class="nav nav-pills nav-fill">
                        <a class="nav-item nav-link {{ request()->routeIs('biodata.show') ? 'active' : '' }}"
                            href="{{ route('biodata.show', $data->id_pendaftaran) }}">Biodata</a>
                        <a class="nav-item nav-link {{ request()->routeIs('rapot.show') ? 'active' : '' }}"
                            href="{{ route('rapot.show', $data->id_pendaftaran) }}">Rapot</a>
                        <a class="nav-item nav-link {{ request()->routeIs('kesehatan.show') ? 'active' : '' }}"
                            href="{{ route('kesehatan.show', $data->id_pendaftaran) }}">Kesehatan</a>
                        <a class="nav-item nav-link {{ request()->routeIs('datawali.show') ? 'active' : '' }}"
                            href="{{ route('datawali.show', $data->id_pendaftaran) }}">Biodata Ortu</a>
                    </nav>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 fw-semibold fs-2">Nilai Rapot</div>
                        <div class="col-sm-6 text-end pe-5"><a href="{{ route('rapot.edit', $data->id) }}"
                                class="link-underline-opacity-0 link-underline">Edit <i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                    </div>
                    <hr>
                    {{-- Nilai Kelas 7 Semester 1 --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Matematika Kelas 7 Semester 1</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->mtk_7s1 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Bahasa Inggris Kelas 7 Semester 1</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->inggris_7s1 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Ipa Kelas 7 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->ipa_7s1 }}</p>
                        </div>
                    </div>
                    <hr>
                    {{-- Nilai Kelas 7 Semester 2 --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Matematika Kelas 7 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->mtk_7s2 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Bahasa Inggris Kelas 7 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->inggris_7s2 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Ipa Kelas 7 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->ipa_7s2 }}</p>
                        </div>
                    </div>
                    <hr>
                    {{-- Nilai Kelas 8 Semester 1 --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Matematika Kelas 8 Semester 1</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->mtk_8s1 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Bahasa Inggris Kelas 8 Semester 1</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->inggris_8s1 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Ipa Kelas 8 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->ipa_8s1 }}</p>
                        </div>
                    </div>
                    <hr>
                    {{-- Nilai Kelas 8 Semester 2 --}}
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Matematika Kelas 8 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->mtk_8s2 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Bahasa Inggris Kelas 8 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->inggris_8s2 }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-0">Nilai Ipa Kelas 8 Semester 2</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0">{{ $data->ipa_8s2 }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-main-layout>
