<x-main-layout>
    <x-slot:title>Form Submit Bukti Pembayaran</x-slot:title>
    <x-slot:body>
        form-bg
    </x-slot:body>
    <div class="container mt-5 mb-5 rounded">
        <div class="title-form-me fw-bold px-5 fs-4 rounded-top py-3">
            Bukti Transfer
        </div>
        <div class="bg-white pt-3 rounded-bottom">
            <!-- Form Biodata -->
            <div class="p-5">
                <form action="{{ route('transfer.update', $transfer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="preview-zone visually-hidden">
                                            <div class="box box-solid">
                                                <div class="box-header with-border">
                                                    <div><b>Preview</b></div>
                                                    <div class="box-tools pull-right">
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs remove-preview visually-hidden">
                                                            <i class="fa fa-times"></i> Ganti Gambar
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body"></div>
                                            </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                            <div class="dropzone-desc">
                                                <i class="fa-solid fa-cloud-arrow-up fs-1 fw-bold text-form-me"></i>
                                                <p>Drop File Here</p>
                                                <p>Support file PNG, JPG, JPEG</p>
                                                <p>OR</p>
                                                <p class="text-form-me">Browse files</p>
                                            </div>
                                            <input type="file" class="dropzone" id="buktiTransfer"
                                                name="bukti_transfer" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="form-group mb-3 px-3">
                        <label for="sumberInformasi" class="form-label noto-sans-regular">
                            Informasi SMA Unggulan didapatkan dari:
                        </label>
                        <select class="form-select border-orange" id="sumberInformasi" name="sumber_informasi" required>
                            <option disabled
                                {{ old('sumber_informasi', $transfer->sumber_informasi) ? '' : 'selected' }}>
                                Pilih sumber</option>
                            <option value="Keluarga"
                                {{ old('sumber_informasi', $transfer->sumber_informasi) == 'Keluarga' ? 'selected' : '' }}>
                                Keluarga</option>
                            <option value="Rekan"
                                {{ old('sumber_informasi', $transfer->sumber_informasi) == 'Rekan' ? 'selected' : '' }}>
                                Rekan</option>
                            <option value="Media Sosial"
                                {{ old('sumber_informasi', $transfer->sumber_informasi) == 'Media Sosial' ? 'selected' : '' }}>
                                Media Sosial</option>
                            <option value="Website"
                                {{ old('sumber_informasi', $transfer->sumber_informasi) == 'Website' ? 'selected' : '' }}>
                                Website</option>
                            <option value="Iklan"
                                {{ old('sumber_informasi', $transfer->sumber_informasi) == 'Iklan' ? 'selected' : '' }}>
                                Iklan</option>
                            <option value="Brosur"
                                {{ old('sumber_informasi', $transfer->sumber_informasi) == 'Brosur' ? 'selected' : '' }}>
                                Brosur</option>
                        </select>

                    </div>
                    <div class="form-check">
                        <input class="form-check-input border-orange" type="checkbox" value="true"
                            name="accepts_whatsapp" id="flexCheckDefault"
                            {{ old('accepts_whatsapp', $transfer->accepts_whatsapp) ? 'checked' : '' }} required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Saya setuju untuk menerima pesan melalui WhatsApp dari SMA Unggulan RUSHD
                        </label>

                    </div>
                    <div class="row px-5 py-3">
                        <div class="col-12 col-sm-6">
                            <p class="text-body-tertiary">
                                Pastikan data yang diisikan sudah benar!
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-between gap-3">
                            <button type="button" class="btn button-cancel-form">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                Continue<i class="fa-solid fa-arrow-left ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End of Form Biodata -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var htmlPreview =
                        '<img width="200" src="' +
                        e.target.result +
                        '" />' +
                        "<p>" +
                        input.files[0].name +
                        "</p>";

                    var wrapperZone = $(input).closest(".form-group");
                    var previewZone = wrapperZone.find(".preview-zone");
                    var boxZone = previewZone.find(".box-body");
                    var removeBtn = wrapperZone.find(".remove-preview");
                    var dropzoneWrapper = wrapperZone.find(".dropzone-wrapper");

                    // Menampilkan preview dan menyembunyikan dropzone
                    wrapperZone.find(".dropzone-wrapper").addClass("visually-hidden");
                    previewZone.removeClass("visually-hidden");
                    boxZone.empty().append(htmlPreview);
                    removeBtn.removeClass("visually-hidden");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function reset(input) {
            input.wrap("<form>").closest("form").get(0).reset();
            input.unwrap();
        }

        $(".dropzone").change(function() {
            readFile(this);
        });

        $(".dropzone-wrapper").on("dragover", function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass("dragover");
        });

        $(".dropzone-wrapper").on("dragleave", function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass("dragover");
        });

        $(".remove-preview").on("click", function() {
            var boxZone = $(this).closest(".form-group").find(".box-body");
            var previewZone = $(this).closest(".form-group").find(".preview-zone");
            var dropzoneWrapper = $(this)
                .closest(".form-group")
                .find(".dropzone-wrapper");
            var dropzone = $(this).closest(".form-group").find(".dropzone");

            // Mengosongkan preview, menyembunyikan zona preview, dan menampilkan dropzone kembali
            boxZone.empty();
            previewZone.addClass("visually-hidden");
            dropzoneWrapper.removeClass("visually-hidden");
            reset(dropzone);
            $(this).addClass("visually-hidden");
        });
    </script>
</x-main-layout>
