import './bootstrap';

// TOGGLE BURGER NAV
document.getElementById('menuToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdownId = "monitoringSubmenu"; // ID dropdown
    const dropdown = document.getElementById(dropdownId);
    const toggleButton = document.querySelector(`[data-bs-target="#${dropdownId}"]`);

    // Cek apakah dropdown sebelumnya terbuka di localStorage
    if (localStorage.getItem(dropdownId) === "open") {
        dropdown.classList.add("show");
        toggleButton.setAttribute("aria-expanded", "true");
    }

    // Simpan status dropdown ke localStorage saat diklik
    toggleButton.addEventListener("click", function () {
        if (dropdown.classList.contains("show")) {
            localStorage.setItem(dropdownId, "closed");
        } else {
            localStorage.setItem(dropdownId, "open");
        }
    });
});
