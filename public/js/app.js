import './bootstrap';

// TOGGLE BURGER NAV
document.getElementById('menuToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdownId = "monitoringSubmenu";
    const dropdown = document.getElementById(dropdownId);
    const toggleButton = document.querySelector(`[data-bs-target="#${dropdownId}"]`);
    const monitoringIcon = document.getElementById("monitoringIcon");

    // Icon awal (pastikan di HTML juga fa-solid fa-folder)
    // monitoringIcon.classList.add("fa-solid", "fa-folder"); // Tidak perlu lagi karena sudah di HTML

    toggleButton.addEventListener("click", function () {
        if (dropdown.classList.contains("show")) {
            monitoringIcon.classList.remove("fa-solid", "fa-folder-open");
            monitoringIcon.classList.add("fa-solid", "fa-folder");
        } else {
            monitoringIcon.classList.remove("fa-solid", "fa-folder");
            monitoringIcon.classList.add("fa-solid", "fa-folder-open");
        }
    });

    // Local Storage (opsional, tapi disarankan)
    if (localStorage.getItem(dropdownId) === "open") {
        dropdown.classList.add("show");
        toggleButton.setAttribute("aria-expanded", "true");
        monitoringIcon.classList.remove("fa-solid", "fa-folder");
        monitoringIcon.classList.add("fa-solid", "fa-folder-open");
    }

    toggleButton.addEventListener("click", function () {
        if (dropdown.classList.contains("show")) {
            localStorage.setItem(dropdownId, "closed");
        } else {
            localStorage.setItem(dropdownId, "open");
        }
    });
});
