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
  var alergi = document.getElementById("alergi");
  if (alergi) {
    alergi.addEventListener("change", function () {
      var value = this.value;
      var jenisAlergiSection = document.getElementById("jenisAlergiSection");
      if (value === "Ya") {
        jenisAlergiSection.classList.remove("visually-hidden");
      } else {
        jenisAlergiSection.classList.add("visually-hidden");
        document.getElementById("jenisAlergi").value = "";
      }
    });
  }

  var penyakitKronis = document.getElementById("penyakitKronis");
  if (penyakitKronis) {
    penyakitKronis.addEventListener("change", function () {
      var value = this.value;
      var jenisPenyakitSection = document.getElementById(
        "jenisPenyakitSection"
      );
      if (value === "Ya") {
        jenisPenyakitSection.classList.remove("visually-hidden");
      } else {
        jenisPenyakitSection.classList.add("visually-hidden");
        document.getElementById("jenisPenyakit").value = "";
      }
    });
  }

  var perawatanMedis = document.getElementById("perawatanMedis");
  if (perawatanMedis) {
    perawatanMedis.addEventListener("change", function () {
      var value = this.value;
      var jenisPerawatanSection = document.getElementById(
        "jenisPerawatanSection"
      );
      if (value === "Ya") {
        jenisPerawatanSection.classList.remove("visually-hidden");
      } else {
        jenisPerawatanSection.classList.add("visually-hidden");
        document.getElementById("jenisPerawatan").value = "";
      }
    });
  }

  var operasi = document.getElementById("operasi");
  if (operasi) {
    operasi.addEventListener("change", function () {
      var value = this.value;
      var jenisOperasiSection = document.getElementById("jenisOperasiSection");
      if (value === "Ya") {
        jenisOperasiSection.classList.remove("visually-hidden");
      } else {
        jenisOperasiSection.classList.add("visually-hidden");
        document.getElementById("jenisOperasi").value = "";
      }
    });
  }

  var obatObatan = document.getElementById("obatObatan");
  if (obatObatan) {
    obatObatan.addEventListener("change", function () {
      var value = this.value;
      var jenisObatSection = document.getElementById("jenisObatSection");
      if (value === "Ya") {
        jenisObatSection.classList.remove("visually-hidden");
      } else {
        jenisObatSection.classList.add("visually-hidden");
        document.getElementById("jenisObat").value = "";
      }
    });
  }

  var keterbatasanFisik = document.getElementById("keterbatasanFisik");
  if (keterbatasanFisik) {
    keterbatasanFisik.addEventListener("change", function () {
      var value = this.value;
      var jenisKeterbatasanSection = document.getElementById(
        "jenisKeterbatasanSection"
      );
      if (value === "Ya") {
        jenisKeterbatasanSection.classList.remove("visually-hidden");
      } else {
        jenisKeterbatasanSection.classList.add("visually-hidden");
        document.getElementById("jenisKeterbatasan").value = "";
      }
    });
  }
});
