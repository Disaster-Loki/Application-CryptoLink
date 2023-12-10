// Create menu-siderbar
const body = document.querySelector("body"),
      siderbar = document.querySelector(".siderbar"),
      toggleIcon = document.querySelector(".toggle-icon"),
      searchBtn = document.querySelector(".search-box"),
      modeSwitch = document.querySelector(".toggle-switch"),
      modeText = document.querySelector(".mode-text");

toggleIcon.addEventListener("click", () => {
  siderbar.classList.toggle("close");
  toggleIcon.classList.toggle("rotated");
});

searchBtn.addEventListener("click", () => {
  siderbar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    modeText.innerText = "Light Mode";
  } else {
    modeText.innerText = "Dark Mode";
  }
});

// Choose option

// Getting the menu and items
const menu = document.querySelectorAll('.menu');
const menulink= document.querySelector('.nav-link');

// Getting the elements menu
const dashboardLink = document.querySelector('.menu .nav-link .dash');

const customersLink = document.querySelector('.menu .nav-link .market');

const overLink = document.querySelector('.menu .nav-link .ove');

const settingsLink = document.querySelector('.menu .nav-link .pro');

const wallLink = document.querySelector('.menu .nav-link .wall')

// Getting the pages
const dashboard = document.getElementById('dashboard');

const customers = document.getElementById('marketplace');

const over = document.getElementById('over');

const settings = document.getElementById('profile');

const wall = document.getElementById('wallet');

// Function for display page like
function showPage(pageId) {
    const pages = document.querySelectorAll('.page');
    pages.forEach((page) => {
        page.style.display = 'none';
    });
    const page = document.getElementById(pageId);
    page.style.display = 'block';
}

showPage('dashboard');
//dashboardLink.classList.add('active');

//Showi the content  when clicking on the item
dashboardLink.addEventListener('click', function () {
    showPage('dashboard');
})

customersLink.addEventListener('click', function () {
    showPage('marketplace')
})

overLink.addEventListener('click', function () {
    showPage('over')
})

wallLink.addEventListener('click', function () {
    showPage('wallet');
})

settingsLink.addEventListener('click', function () {
    showPage('profile')
})

// Over
document.addEventListener('DOMContentLoaded', function () {
  var ctx = document.getElementById('cryptoChart').getContext('2d');
  var cryptoChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [
        {
          label: 'Bitcoin',
          data: [50000, 52000, 48000, 55000, 53000, 56000, 58000, 59000, 60000, 62000, 61000, 63000],
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 2,
          fill: false,
        },
        {
          label: 'Ethereum',
          data: [3000, 3200, 2800, 3100, 3300, 3400, 3600, 3700, 3800, 4000, 4200, 4100],
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 2,
          fill: false,
        },
        {
          label: 'Tether USDT',
          data: [1.0003, 1.1, 1, 0.9, 1.2, 1.1, 1.2, 1.3, 1.2, 1.1, 1.0, 1.1],
          borderColor: 'rgba(255, 205, 86, 1)',
          borderWidth: 2,
          fill: false,
        },
        {
          label: 'BNB',
          data: [500, 520, 480, 550, 530, 560, 590, 580, 600, 620, 610, 630],
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 2,
          fill: false,
        },
      ],
    },
    options: {
      scales: {
        x: {
          beginAtZero: true,
        },
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

// Grafics

document.addEventListener("DOMContentLoaded", function () {
  createChart("bitcoin-chart", "Bitcoin", generateRandomData(), 'rgb(255, 99, 132)');
  createChart("ethereum-chart", "Ethereum", generateRandomData(), 'rgb(54, 162, 235)');
  createChart("bnb-chart", "BNB", generateRandomData(), 'rgb(255, 205, 86)');
});

function createChart(containerId, label, data, color) {
  var ctx = document.getElementById(containerId).getContext("2d");
  new Chart(ctx, {
      type: "line",
      data: {
          labels: data.labels,
          datasets: [{
              label: label,
              borderColor: color,
              data: data.values,
              fill: false
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
              x: {
                  type: 'linear',
                  position: 'bottom'
              }
          }
      }
  });
}

function generateRandomData() {
  var labels = [];
  var values = [];
  for (var i = 0; i < 10; i++) {
      labels.push(i);
      values.push(Math.sin(i) * 50 + 50);
  }
  return { labels: labels, values: values };
}
