<x-main-layout>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="confirmation-card">
            <div class="justify-content-center text-center">
                <img src="/assets/RejectedRed.png" alt="" />
                <h2 class="teks-berhasil poppins-bold">Ups Data Salah!
                </h2>
                <p class="text-secondary">
                    Maaf, bukti pembayaran yang Anda unggah tidak sesuai dengan data yang diperlukan. Silakan periksa
                    kembali dokumen yang diunggah bukti pembayaran yang tepat."
                </p>
                <a href="{{ route('transfer.edit', $idDataTf) }}"><button class="btn btn-primary">Perbaiki
                        data</button></a>
            </div>
        </div>
    </div>
</x-main-layout>
