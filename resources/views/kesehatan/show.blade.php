<x-main-layout>
    <x-slot:body>
        form-bg
    </x-slot:body>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kesehatan</li>
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

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 fw-semibold fs-2">Kesehatan</div>
                                <div class="col-sm-6 text-end pe-5"><a href="{{ route('kesehatan.edit', $data->id) }}"
                                        class="link-underline-opacity-0 link-underline">Edit <i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Gol. Darah</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">{{ $data->gol_darah }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Tinggi badan</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">{{ $data->tinggi_badan }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Alergi</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->alergi == 1 ? 'Iya' : 'Tidak' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Keterangan Alergi</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->ket_alergi ?? '-' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Penyakit Kronis</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->kronis == 1 ? 'Iya' : 'Tidak' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Keterangan Penyakit Kronis</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->ket_kronis ?? '-' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Riwayat Medis</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->medis == 1 ? 'Iya' : 'Tidak' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Keterangan Riwayat Medis</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->ket_medis ?? '-' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Riwayat Operasi</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->operasi == 1 ? 'Iya' : 'Tidak' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Keterangan Riwayat Operasi</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->ket_operasi ?? '-' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Riwayat Pengobatan</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->obat == 1 ? 'Iya' : 'Tidak' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Keterangan Riwayat Pengobatan</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->ket_obat ?? '-' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Kebutuhan Khusus</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->khusus == 1 ? 'Iya' : 'Tidak' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Keterangan Kebutuhan Khusus</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->ket_khusus ?? '-' }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Keterangan Tambahan</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">
                                        {{ $data->tambahan }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
