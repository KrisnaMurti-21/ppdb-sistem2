<x-main-layout>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="confirmation-card">
            <div class="justify-content-center text-center">
                <img src="/assets/PendingYellow.png" alt="" />
                <h2 class="teks-berhasil poppins-bold">Pendaftaranmu sedang di Proses
                </h2>
                <p class="text-secondary">
                    Pendaftaran kamu sedang di proses harap menunggu proses verifikasi oleh admin dengan sabar.
                </p>
                <a href="{{ route('home') }}"><button class="btn btn-primary">Kembali ke Home</button></a>
            </div>
        </div>
    </div>
</x-main-layout>
