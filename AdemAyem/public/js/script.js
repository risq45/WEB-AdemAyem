// const menuToggle = document.getElementById('menu-toggle');
// const sidebar = document.querySelector('.sidebar');
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const monthSelect = document.getElementById('month-select');
    const yearSelect = document.getElementById('year-select');

    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    const currentMonthIndex = new Date().getMonth(); 
    const currentMonthName = monthNames[currentMonthIndex]; 
    
    document.getElementById('month-name').textContent = currentMonthName;
    function populateMonthDropdown() {
        monthNames.forEach((month, index) => {
            const option = document.createElement('option');
            option.value = index;
            option.textContent = month;
            if (index === currentMonth) option.selected = true;
            monthSelect.appendChild(option);
        });
    }

    function populateYearDropdown() {
        const startYear = 1900;
        const endYear = 2100;
        for (let year = startYear; year <= endYear; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            if (year === currentYear) option.selected = true;
            yearSelect.appendChild(option);
        }
    }

    function generateCalendar(month, year) {
        calendarEl.innerHTML = '';

        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const currentDate = today.getDate();

        const daysOfWeek = ['MIN', 'SEN', 'SEL', 'RAB', 'KAM', 'JUM', 'SAB'];

        // Membuat header hari dalam seminggu
        daysOfWeek.forEach(day => {
            const dayEl = document.createElement('div');
            dayEl.textContent = day;
            dayEl.style.fontWeight = 'bold';
            calendarEl.appendChild(dayEl);
        });

        // Mendapatkan hari pertama di bulan tersebut
        const firstDayOfMonth = new Date(year, month, 1).getDay();

        // Isi ruang kosong sebelum hari pertama
        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyEl = document.createElement('div');
            calendarEl.appendChild(emptyEl);
        }

        // Menambahkan tanggal pada kalender
        for (let day = 1; day <= daysInMonth; day++) {
            const dayEl = document.createElement('div');
            dayEl.textContent = day;

            if (day === currentDate && month === today.getMonth() && year === today.getFullYear()) {
                dayEl.classList.add('today');
            }

            calendarEl.appendChild(dayEl);
        }
    }

    // Event listener untuk perubahan bulan
    monthSelect.addEventListener('change', function() {
        currentMonth = parseInt(this.value);
        generateCalendar(currentMonth, currentYear);
    });

    // Event listener untuk perubahan tahun
    yearSelect.addEventListener('change', function() {
        currentYear = parseInt(this.value);
        generateCalendar(currentMonth, currentYear);
    });

    populateMonthDropdown();
    populateYearDropdown();
    generateCalendar(currentMonth, currentYear);
});

// function previewImage(event) {
//     const file = event.target.files[0];
//     const reader = new FileReader();

//     reader.onload = function(e) {
//         const imgElement = document.getElementById('uploadedImage');
//         const icon = document.querySelector('.icon');
//         const text = document.querySelector('.image-placeholder p');
        
//         imgElement.src = e.target.result;
//         imgElement.style.display = 'block'; 
//         icon.style.display = 'none'; 
//         text.style.display = 'none'; 
//     }

//     if (file) {
//         reader.readAsDataURL(file); 
//     }
// }

function previewImage(event) {
    const input = event.target;
    const uploadedImage = document.getElementById('uploadedImage');
    const icon = document.querySelector('.image-placeholder .icon'); // Select the icon
    const text = document.querySelector('.image-placeholder p'); 
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            uploadedImage.src = e.target.result; 
            uploadedImage.style.display = 'block'; 
            icon.style.display = 'none'; 
            text.style.display = 'none';
        }
        
        reader.readAsDataURL(input.files[0]); // Convert the file to a data URL
    }
}

function enableForm() {
    const formElements = document.querySelectorAll('#pegawaiForm input');
    formElements.forEach(element => {
        element.disabled = false;  
    });

    document.getElementById('saveBtn').disabled = false;
}

// document.getElementById('buttonUbah').addEventListener('click', function() {

//     window.location.href = '../pages/detail-cuti-pegawai.html'; 

// });

