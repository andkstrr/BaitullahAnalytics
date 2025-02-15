// TOGGLE BURGER NAV
document.getElementById('menuToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdownId = "monitoringSubmenu";
    const dropdown = document.getElementById(dropdownId);
    const toggleButton = document.querySelector(`[data-bs-target="#${dropdownId}"]`);
    const icon = toggleButton.querySelector("i");

    // Cek apakah dropdown terbuka sebelumnya
    if (localStorage.getItem(dropdownId) === "open") {
        let bsCollapse = new bootstrap.Collapse(dropdown, { toggle: false });
        bsCollapse.show();
        toggleButton.setAttribute("aria-expanded", "true");
        icon.classList.remove("fa-chevron-down");
        icon.classList.add("fa-chevron-up");
    }

    // Update icon dan simpan status ke localStorage saat dropdown dibuka
    dropdown.addEventListener("shown.bs.collapse", function () {
        localStorage.setItem(dropdownId, "open");
        toggleButton.setAttribute("aria-expanded", "true");
        icon.classList.remove("fa-chevron-down");
        icon.classList.add("fa-chevron-up");
    });

    // Update icon dan simpan status ke localStorage saat dropdown ditutup
    dropdown.addEventListener("hidden.bs.collapse", function () {
        localStorage.setItem(dropdownId, "closed");
        toggleButton.setAttribute("aria-expanded", "false");
        icon.classList.remove("fa-chevron-up");
        icon.classList.add("fa-chevron-down");
    });
});

const monthYearElement = document.getElementById('monthYear');
const datesElement = document.getElementById('dates');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentDate = new Date();

const updateCalendar = () => {
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();

    // Mendapatkan tanggal pertama dalam bulan saat ini
    const firstDay = new Date(currentYear, currentMonth, 1);
    // Mendapatkan tanggal terakhir dalam bulan saat ini
    const lastDay = new Date(currentYear, currentMonth + 1, 0);
    const totalDays = lastDay.getDate(); // Total hari dalam bulan ini

    const firstDayIndex = firstDay.getDay(); // Hari pertama dalam minggu (0 = Minggu, 6 = Sabtu)
    const lastDayIndex = lastDay.getDay(); // Hari terakhir dalam minggu (0 = Minggu, 6 = Sabtu)

    // Format tampilan bulan dan tahun
    const monthYearString = currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });
    monthYearElement.textContent = monthYearString;

    let datesHTML = '';

    // Menambahkan tanggal bulan sebelumnya yang muncul di kalender (agar tampilan tetap rapi)
    const prevLastDay = new Date(currentYear, currentMonth, 0).getDate(); // Hari terakhir bulan sebelumnya
    for (let i = firstDayIndex; i > 0; i--) {
        datesHTML += `<div class="date inactive">${prevLastDay - i + 1}</div>`;
    }

    // Menampilkan tanggal bulan saat ini
    for (let i = 1; i <= totalDays; i++) {
        const date = new Date(currentYear, currentMonth, i);
        const activeClass = date.toDateString() === new Date().toDateString() ? 'active' : '';
        datesHTML += `<div class="date ${activeClass}">${i}</div>`;
    }

    // Menambahkan tanggal bulan berikutnya untuk melengkapi tampilan grid
    let nextDays = 7 - ((firstDayIndex + totalDays) % 7);
    if (nextDays < 7) {
        for (let i = 1; i <= nextDays; i++) {
            datesHTML += `<div class="date inactive">${i}</div>`;
        }
    }

    datesElement.innerHTML = datesHTML;
}

// Event listener untuk tombol navigasi bulan sebelumnya
prevBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
});

// Event listener untuk tombol navigasi bulan berikutnya
nextBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
});

// Menjalankan fungsi saat pertama kali di-load
updateCalendar();

// CLOCK REAL TIME
window.addEventListener("load", () => {
    clock();
    function clock() {
      const today = new Date();

      // get time components
      const hours = today.getHours();
      const minutes = today.getMinutes();
      const seconds = today.getSeconds();

      //add '0' to hour, minute & second when they are less 10
      const hour = hours < 10 ? "0" + hours : hours;
      const minute = minutes < 10 ? "0" + minutes : minutes;
      const second = seconds < 10 ? "0" + seconds : seconds;

      //make clock a 12-hour time clock
      const hourTime = hour > 12 ? hour - 12 : hour;

      // if (hour === 0) {
      //   hour = 12;
      // }
      //assigning 'am' or 'pm' to indicate time of the day
      const ampm = hour < 12 ? "AM" : "PM";

      //get current date and time
      const time = hourTime + ":" + minute + ":" + second + " " + ampm;

      //print current date and time to the DOM
      document.getElementById("date-time").innerHTML = time;
      setTimeout(clock, 1000);
    }
});

// Inisialisasi Peta
var map = L.map('map').setView([20, 0], 2); // Posisi awal

// Tambahkan TileLayer (Peta Dasar)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Data Dummy (Bisa Diganti dengan Data dari Database)
var locations = [
    { lat: 37.7749, lng: -122.4194 }, // San Francisco
    { lat: 48.8566, lng: 2.3522 }, // Paris
    { lat: -1.2921, lng: 36.8219 }, // Nairobi
    { lat: 35.6895, lng: 139.6917 }, // Tokyo
    { lat: -33.8688, lng: 151.2093 } // Sydney
];

// Tambahkan Marker ke Peta
locations.forEach(function(loc) {
    L.marker([loc.lat, loc.lng]).addTo(map);
});
