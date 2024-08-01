window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  const loginButton = document.querySelector(".custom-btn");

  if (navbar) {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  }

  if (loginButton) {
    if (window.scrollY > 50) {
      loginButton.classList.add("scrolled-button");
    } else {
      loginButton.classList.remove("scrolled-button");
    }
  }
});

const ctx = document.getElementById("scholarshipChart").getContext("2d");
const scholarshipChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["Jalur Prestasi", "Jalur Tes"],
    datasets: [
      {
        data: [30, 90],
        backgroundColor: ["#FFD1B3", "#FF7733"],
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: true,
        position: "top",
      },
      tooltip: {
        callbacks: {
          label: function (tooltipItem) {
            return tooltipItem.label + ": " + tooltipItem.raw + " siswa/i";
          },
        },
      },
    },
    animation: {
      animateScale: true,
      animateRotate: true,
    },
  },
});

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}
