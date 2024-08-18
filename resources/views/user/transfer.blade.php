<x-main-layout>
    <div class="container justify-content-center d-flex">
        <div class="col-lg-7 shadow-lg p-3 mb-5 mt-5 bg-white rounded py-4 px-4">
            <div class="bg-orange rounded-top text-center py-2">
                <h3 class="text-white poppins-medium">Pendaftaran PPDB</h3>
                <h1 class="text-white poppins-semibold">SMA Unggulan Rushd</h1>
            </div>
            <div class="mt-4">
                <p class="poppins-regular">
                    Untuk mendukung kelancaran proses administrasi pembayaran biaya
                    pendidikan di SMA Unggulan Rushd, berikut kami informasikan nomor
                    rekening Bank BRI yang dapat digunakan untuk melakukan pembayaran:
                </p>
                <strong class="poppins-bold">Bank BRI</strong>
                <p class="poppins-regular">
                    Nomor Rekening: 014001002717308<br />
                    Atas Nama: SMA Unggulan Rushd <br />
                    Biaya Registrasi: Rp.500.000,-
                </p>
                <h5 class="poppins-regular">Instruksi Pembayaran:</h5>
                <ol class="poppins-regular">
                    <li>
                        Silakan melakukan transfer sesuai dengan jumlah yang telah
                        ditentukan melalui ATM, Mobile Banking, atau Internet Banking ke
                        nomor rekening di atas.
                    </li>
                    <li>
                        Setelah melakukan transfer, harap segera mengunggah bukti transfer
                        sebagai konfirmasi pembayaran.
                    </li>
                </ol>
            </div>
            <form action="{{ route('transfer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="buktiTransfer" class="form-label noto-sans-regular">
                        Upload Bukti Transfer:
                    </label>
                    <input type="file" class="form-control border-orange" id="buktiTransfer" name="bukti_transfer"
                        required />
                </div>

                <div class="form-group mb-3">
                    <label for="sumberInformasi" class="form-label noto-sans-regular">
                        Informasi SMA Unggulan didapatkan dari:
                    </label>
                    <select class="form-select border-orange" id="sumberInformasi" name="sumber_informasi" required>
                        <option selected disabled>Pilih sumber</option>
                        <option value="Keluarga">Keluarga</option>
                        <option value="Rekan">Rekan</option>
                        <option value="Media Sosial">Media Sosial</option>
                        <option value="Website">Website</option>
                        <option value="Iklan">Iklan</option>
                        <option value="Brosur">Brosur</option>
                    </select>
                </div>

                <div class="form-check">
                    <input class="form-check-input border-orange" type="checkbox" value="true" name="accepts_whatsapp"
                        id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        Saya setuju untuk menerima pesan melalui whatsapp dari SMA Unggulan RUSHD
                    </label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-orange text-white mt-3">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-main-layout>
