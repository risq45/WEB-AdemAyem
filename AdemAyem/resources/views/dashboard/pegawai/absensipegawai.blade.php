<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Adem Ayem</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css' rel='stylesheet'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="../assets/images/image 2.png" alt="Logo Kiri" class="logo-left">
            <img src="../assets/images/logo_ademayem_landscape.png" alt="Logo Kanan" class="logo-right">
        </div>
        <ul>
            <li><a href="/"><img src="../assets/images/dashboard.svg" class="icon">Dashboard</a></li>
            <li><strong>Makanan</strong></li>
            <li><a href="/stokmakanan"><img src="../assets/images/stok-makanan.svg" class="icon">Stok Makanan</a></li>
            <li><a href="/stokbahanmakanan"><img src="../assets/images/stok-bahan-makanan.svg" class="icon">Stok Bahan Makanan</a></li>
            <li><strong>Pegawai</strong></li>
            <li><a href="/daftarpegawai"><img src="../assets/images/daftar-pegawai.svg" class="icon">Daftar Pegawai</a></li>
            <li style="background-color: #FDC6C5; padding: 10px; border-radius: 8px;">
                <a href="/absensipegawai" style="color: #DD3B38; text-decoration: none; font-weight: bold;">
                    <img src="../assets/images/absensi-pegawai-red.svg" class="icon" alt="Dashboard Icon" style="margin-right: 10px;">
                    Absensi Pegawai
                </a>
            </li>  
            <li><a href="/gajipegawai"><img src="../assets/images/gaji-pegawai.svg" class="icon">Gaji Pegawai</a></li>
            <li><a href="/cutipegawai"><img src="../assets/images/cuti-pegawai.svg" class="icon">Cuti Pegawai</a></li>
            <li><strong>Transaksi</strong></li>
            <li><a href="/laporanpendapatan"><img src="../assets/images/laporan-pendapatan-harian.svg" class="icon">Laporan Keuangan</a></li>
            <li><a href="/tagihan"><img src="../assets/images/tagihan.png" class="icon">Tagihan</a></li>
            <li><a href="/invoices"><img src="../assets/images/invoices.svg" class="icon">Invoices</a></li>
        </ul>

        <div class="user-profile">
            <img src="../assets/images/fotoprofil.png" alt="Foto Profil" class="profile-pic">
            <div class="user-info">
                <p class="user-name">Nama User</p>
                <p class="user-role">Role User</p>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-titles">
                <h1>Absensi Pegawai</h1>
            </div>
            <div class="header-buttons">
                <button class="header-btn">
                    <img src="../assets/images/Search.svg" alt="Search" class="icon">
                </button>
            </div>
        </header>

        <div class="dashboard-container"></div>
            <table class="default-table">
                <thead>
                    <tr>
                        <th class="table-header-left"><input type="checkbox"></th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Total Absensi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>Hartiningsih Purnamasari</td>
                        <td>Commisioner</td>
                        <td>09:00:00</td>
                        <td>17:00:00</td>
                        <td>22 Hari</td>
                        <td>
                            <div class="button-group">
                                <button class="btn btn-edit">Ubah</button>
                                <button class="btn btn-delete">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    <tr></tr>
                        <td><input type="checkbox"></td>
                        <td>Hartiningsih Purnamasari</td>
                        <td>Commisioner</td>
                        <td>09:00:00</td>
                        <td>17:00:00</td>
                        <td>22 Hari</td>
                        <td>
                            <div class="button-group">
                                <button class="btn btn-edit">Ubah</button>
                                <button class="btn btn-delete">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    <tr></tr>
                        <td><input type="checkbox"></td>
                        <td>Hartiningsih Purnamasari</td>
                        <td>Commisioner</td>
                        <td>09:00:00</td>
                        <td>17:00:00</td>
                        <td>22 Hari</td>
                        <td>
                            <div class="button-group">
                                <button class="btn btn-edit">Ubah</button>
                                <button class="btn btn-delete">Hapus</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="table.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAllCheckbox = document.getElementById('select-all');
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
    
            selectAllCheckbox.addEventListener('change', function() {
                checkboxes.forEach((checkbox) => {
                    checkbox.checked = this.checked;
                });
            });
        });
    </script>
</body>
</html>
