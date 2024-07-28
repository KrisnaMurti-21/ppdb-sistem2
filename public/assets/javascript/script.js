$(document).ready(function () {
    $(".input-group").each(function () {
        var $inputGroup = $(this);
        $inputGroup.find("button").on("click", function (event) {
            event.preventDefault();
            var $input = $inputGroup.find("input");
            var $icon = $inputGroup.find("i");
            if ($input.attr("type") == "text") {
                $input.attr("type", "password");
                $icon.addClass("fa-eye-slash");
                $icon.removeClass("fa-eye");
            } else if ($input.attr("type") == "password") {
                $input.attr("type", "text");
                $icon.removeClass("fa-eye-slash");
                $icon.addClass("fa-eye");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    function toggleRequiredAndVisibility(
        selectElement,
        detailSection,
        detailInput
    ) {
        function updateDetailInput() {
            const isYes = selectElement.value === "Ya";
            detailSection.classList.toggle("visually-hidden", !isYes);
            detailInput.required = isYes;
            if (!isYes) {
                detailInput.value = "";
            }
        }

        selectElement.addEventListener("change", updateDetailInput);

        // Initial call to set the correct state on page load
        updateDetailInput();
    }

    const formFields = [
        {
            select: "alergi",
            section: "jenisAlergiSection",
            input: "jenisAlergi",
        },
        {
            select: "penyakitKronis",
            section: "jenisPenyakitSection",
            input: "jenisPenyakit",
        },
        {
            select: "perawatanMedis",
            section: "jenisPerawatanSection",
            input: "jenisPerawatan",
        },
        {
            select: "operasi",
            section: "jenisOperasiSection",
            input: "jenisOperasi",
        },
        {
            select: "obatObatan",
            section: "jenisObatSection",
            input: "jenisObat",
        },
        {
            select: "keterbatasanFisik",
            section: "jenisKeterbatasanSection",
            input: "jenisKeterbatasan",
        },
    ];

    formFields.forEach((field) => {
        const selectElement = document.getElementById(field.select);
        const detailSection = document.getElementById(field.section);
        const detailInput = document.getElementById(field.input);

        if (selectElement && detailSection && detailInput) {
            toggleRequiredAndVisibility(
                selectElement,
                detailSection,
                detailInput
            );
        }
    });
});
