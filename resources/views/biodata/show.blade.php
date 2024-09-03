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
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <nav class="nav nav-pills nav-fill">
                        <a class="nav-item nav-link {{ request()->routeIs('biodata.show') ? 'active' : '' }}"
                            href="{{ route('biodata.show', $biodata->id_pendaftaran) }}">Biodata</a>
                        <a class="nav-item nav-link {{ request()->routeIs('rapot.show') ? 'active' : '' }}"
                            href="{{ route('rapot.show', $biodata->id_pendaftaran) }}">Rapot</a>
                        <a class="nav-item nav-link {{ request()->routeIs('kesehatan.show') ? 'active' : '' }}"
                            href="{{ route('kesehatan.show', $biodata->id_pendaftaran) }}">Kesehatan</a>
                        <a class="nav-item nav-link {{ request()->routeIs('datawali.show') ? 'active' : '' }}"
                            href="{{ route('datawali.show', $biodata->id_pendaftaran) }}">Biodata Ortu</a>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="/img/default-avatar.jpg" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            <h5 class="my-3">{{ $biodata->nama_lengkap }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 fw-semibold fs-2">Biodata</div>
                                <div class="col-sm-6 text-end pe-5"><a href="{{ route('biodata.edit', $biodata->id) }}"
                                        class="link-underline-opacity-0 link-underline">Edit <i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $biodata->nama_lengkap }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NISN</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->nisn }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $biodata->telephone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gender</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->jenis_kelamin == 'P' ? 'Perempuan' : ($biodata->jenis_kelamin == 'L' ? 'Laki-laki' : 'Tidak Diketahui') }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tempat Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->tempat_lahir }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->tanggal_lahir }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Asal Sekolah</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->asal_sekolah }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->alamat }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Kota</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->kota }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Provinsi</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $biodata->provinsi }}
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
