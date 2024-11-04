document.addEventListener('DOMContentLoaded', function() {
    const selectAllCheckbox = document.querySelector('thead input[type="checkbox"]');
    const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');

    selectAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const statusCells = document.querySelectorAll('tbody td .status');

    statusCells.forEach(function(cell) {
        if (cell.textContent.toLowerCase().includes('tersedia')) {
            cell.classList.add('available');
        } else {
            cell.classList.add('unavailable');
        }
    });
});