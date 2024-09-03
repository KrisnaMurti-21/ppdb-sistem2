<x-main-layout>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="confirmation-card">
            <div class="justify-content-center text-center">
                <img src="/assets/SuccessGreen.png" alt="" />
                <h2 class="teks-berhasil poppins-bold">Selamat {{ Auth::user()->name }}</h2>
                <p class="text-secondary">
                    Terimakasih telah mendaftar pada PPDB SMA Unggulan RUSHD untuk tahun
                    ajaran 2025/2026. Mohon tunggu informasi lebih lanjut untuk jadwal
                    tes dan interview.
                </p>
                <a href="{{ route('home') }}"><button class="btn btn-primary">Kembali ke Home</button></a>
            </div>
        </div>
    </div>
</x-main-layout>
