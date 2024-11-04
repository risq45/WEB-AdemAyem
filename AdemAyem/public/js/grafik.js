const ctx = document.getElementById('grafikPendapatanBulanan').getContext('2d');

const dataPendapatanBulanan = {
    labels: ['Jan 24', 'Feb 24', 'Mar 24', 'Apr 24', 'Mei 24', 'Jun 24'], 
    datasets: [{
        label: 'Pendapatan',
        data: [5000000, 4700000, 4600000, 4900000, 5100000, 5200000], 
        backgroundColor: '#FDC6C5', 
    }]
};

const configPendapatanBulanan = {
    type: 'bar',
    data: dataPendapatanBulanan,
    options: {
        responsive: true,
        scales: {
            x: {
                beginAtZero: true,
            },
            y: {
                beginAtZero: true,
                display: false, 
                ticks: {
                    callback: function(value) {
                        return 'Rp ' + value.toLocaleString();
                    }
                }
            }
        },
        plugins: {
            legend: {
                display: false, 
            },
        },
        elements: {
            bar: {
                backgroundColor: '#FDC6C5', 
                borderColor: 'rgba(0, 0, 0, 0)', 
            }
        },
        backgroundColor: '#FFFFFF'
    }
};

const grafikPendapatanBulanan = new Chart(ctx, configPendapatanBulanan);
