<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Adem Ayem</title>  
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css' rel='stylesheet'/>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!--
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">   
        <link rel="stylesheet" href="{{ asset('css/button.css') }}"> 
        
    </head>
    <body>
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('image/image 2.png') }}" alt="Logo Kiri" class="logo-left">
            <img src="{{ asset('image/logo_ademayem_landscape.png') }}" alt="Logo Kanan" class="logo-right">
        </div>
        <ul>
            <li style="background-color: #FDC6C5; padding: 10px; border-radius: 8px;">
                <a href="/" style="color: #DD3B38; text-decoration: none; font-weight: bold;">
                    <img src="{{ asset('image/dashboard.svg') }}" class="icon" alt="Dashboard Icon" style="margin-right: 10px;">
                    Dashboard
                </a>
            </li>            <li><strong>Makanan</strong></li>
            <li><a href="/stokmakanan"><img src="{{ asset('image/stok-makanan.svg') }}" class="icon">Stok Makanan</a></li>
            <li><a href="/stokbahanmakanan"><img src="{{ asset('image/stok-bahan-makanan.svg') }}" class="icon">Stok Bahan Makanan</a></li>
            <li><strong>Pegawai</strong></li>
            <li><a href="/daftarpegawai"><img src="{{ asset('image/daftar-pegawai.svg') }}" class="icon">Daftar Pegawai</a></li>
            <li><a href="/absensipegawai"><img src="{{ asset('image/absensi-pegawai.svg') }}" class="icon">Absensi Pegawai</a></li>
            <li><a href="/gajipegawai"><img src="{{ asset('image/gaji-pegawai.svg') }}" class="icon">Gaji Pegawai</a></li>
            <li><a href="/cutipegawai"><img src="{{ asset('image/cuti-pegawai.svg') }}" class="icon">Cuti Pegawai</a></li>
            <li><strong>Transaksi</strong></li>
            <li><a href="/laporanpendapatan"><img src="{{ asset('image/laporan-pendapatan-harian.svg') }}" class="icon">Laporan Keuangan</a></li>
            <li><a href="/tagihan"><img src="{{ asset('image/tagihan.png') }}" class="icon">Tagihan</a></li>
            <li><a href="/invoices"><img src="{{ asset('image/invoices.svg') }}" class="icon">Invoices</a></li>
        </ul>

        <div class="user-profile">
            <img src="{{ asset('image/fotoprofil.png') }}" alt="Foto Profil" class="profile-pic">
            <div class="user-info">
                <p class="user-name">{{ $user->nama }}</p>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-titles">
                <h1>Hello, Adem Ayem 👋</h1>
                <h2>Here’s what's going on today</h2>
            </div>
            <div class="header-buttons">
                <button class="header-btn">
                    <img src="{{ asset('image/Search.svg') }}" alt="Search" class="icon">
                </button>
                <button class="header-btn">
                    <img src="{{ asset('image/Help.svg') }}" alt="Informasi" class="icon">
                </button>
                <button class="header-btn">
                    <img src="{{ asset('image/Notification.svg') }}" alt="Notifikasi" class="icon">
                </button>
            </div>
        </header>
        
        <div class="dashboard-container">
            <div class="tables-container">
                <div class="section-container">
                    <h2>Stok Makanan</h2>
                    <div class="stok-makanan table">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Produk</th>
                                        <th>Status</th>
                                        <th>Persediaan</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('image/sotoayam.png') }}" alt="Gambar Soto Ayam"></td>
                                        <td>Soto Ayam</td>
                                        <td>Tersedia</td>
                                        <td>3 dari 5 Stok</td>
                                        <td>Makanan Berat</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('image/sotoayam.png') }}" alt="Gambar Soto Ayam"></td>
                                        <td>Soto Ayam</td>
                                        <td>Tersedia</td>
                                        <td>3 dari 5 Stok</td>
                                        <td>Makanan Berat</td>
                                    </tr>
                                    <tr></tr>
                                        <td><img src="{{ asset('image/sotoayam.png') }}" alt="Gambar Soto Ayam"></td>
                                        <td>Soto Ayam</td>
                                        <td>Tersedia</td>
                                        <td>3 dari 5 Stok</td>
                                        <td>Makanan Berat</td>
                                    </tr>
                                    <tr></tr>
                                        <td><img src="{{ asset('image/sotoayam.png') }}" alt="Gambar Soto Ayam"></td>
                                        <td>Soto Ayam</td>
                                        <td>Tersedia</td>
                                        <td>3 dari 5 Stok</td>
                                        <td>Makanan Berat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        
                <div class="section-container calendar-pegawai">
                    <h2>Cuti Pegawai</h2>
                    <div class="calendar table">
                        <div class="calendar-controls">
                            <h2 id="month-name"></h2>
                            <select id="month-select"></select>
                            <select id="year-select"></select>
                        </div>
                        <div class="calendar-grid" id="calendar"></div>
                    </div>
                </div>
            </div>

            <div class="tables-container">
                <div class="section-container">
                    <h2>Laporan Pendapatan Bulanan</h2>
                    <div class="laporanpendapatanbulanan">
                        <canvas id="grafikPendapatanBulanan"></canvas>
                    </div>
                </div>
                
                <script src="{{ asset('js/grafik.js') }}"></script>
    
                <div class="section-container ringkasan">
                    <h2>Ringkasan</h2>
                    <div class="ringkasan-content">
                        <div class="ringkasan-row">
                            <span class="ringkasan-label">Total Transaksi</span>
                            <span class="ringkasan-value">1510</span>
                        </div>
                        <div class="ringkasan-row">
                            <span class="ringkasan-label">Transaksi Terbesar</span>
                            <span class="ringkasan-value">Rp. 5.000.000</span>
                        </div>
                        <div class="ringkasan-row">
                            <span class="ringkasan-label">Rata-Rata Transaksi</span>
                            <span class="ringkasan-value">Rp. 1.580.000</span>
                        </div>
                        <div class="ringkasan-row">
                            <span class="ringkasan-label">Total Pemasukan</span>
                            <span class="ringkasan-value">Rp. 256.000.000</span>
                        </div>
                        <div class="ringkasan-row">
                            <span class="ringkasan-label">Total Pengeluaran</span>
                            <span class="ringkasan-value">Rp. 50.000.000</span>
                        </div>
                        <hr class="garis-dash">
                        <button class="unduh-ringkasan-btn">Unduh Ringkasan</button>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>

    <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
