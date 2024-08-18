<x-main-layout>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Orang Tua</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <nav class="nav nav-pills nav-fill">
                        <a class="nav-item nav-link {{ request()->routeIs('biodata.show') ? 'active' : '' }}"
                            href="{{ route('biodata.show', $dataBio->id_pendaftaran) }}">Biodata</a>
                        <a class="nav-item nav-link {{ request()->routeIs('rapot.show') ? 'active' : '' }}"
                            href="{{ route('rapot.show', $dataBio->id_pendaftaran) }}">Rapot</a>
                        <a class="nav-item nav-link {{ request()->routeIs('kesehatan.show') ? 'active' : '' }}"
                            href="{{ route('kesehatan.show', $dataBio->id_pendaftaran) }}">Kesehatan</a>
                        <a class="nav-item nav-link {{ request()->routeIs('datawali.show') ? 'active' : '' }}"
                            href="{{ route('datawali.show', $dataBio->id_pendaftaran) }}">Biodata Ortu</a>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 fw-semibold fs-2">Data Orang Tua</div>
                                <div class="col-sm-6 text-end pe-5"><a href="{{ route('datawali.edit', $dataBio->id) }}"
                                        class="link-underline-opacity-0 link-underline">Edit <i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                </div>
                            </div>
                            <hr>
                            {{-- Data Ayah --}}
                            <div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Nama Ayah</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataAyah->nama }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Pekerjaan Ayah</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataAyah->pekerjaan }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Nomor Telepon Ayah</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataAyah->telephone }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Alamat Ayah</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataAyah->alamat }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Kota Ayah</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataAyah->kota }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Provinsi Ayah</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataAyah->provinsi }}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            {{-- Data Ibu --}}
                            <div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Nama Ibu</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataIbu->nama }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Pekerjaan Ibu</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataIbu->pekerjaan }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Nomor Telepon Ibu</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataIbu->telephone }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Alamat Ibu</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataIbu->alamat }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Kota Ibu</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataIbu->kota }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Provinsi Ibu</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $dataIbu->provinsi }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Data Wali --}}
                            @if ($dataWali)
                                <hr>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Nama Wali</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $dataWali->nama }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Pekerjaan Wali</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $dataWali->pekerjaan }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Nomor Telepon Wali</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $dataWali->telephone }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Alamat Wali</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $dataWali->alamat }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Kota Wali</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $dataWali->kota }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Provinsi Wali</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $dataWali->provinsi }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-main-layout>
