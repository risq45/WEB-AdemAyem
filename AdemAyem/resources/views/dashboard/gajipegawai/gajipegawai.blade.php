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
            <img src="{{ asset('image/image 2.png') }}" alt="Logo Kiri" class="logo-left">
            <img src="{{ asset('image/logo_ademayem_landscape.png') }}" alt="Logo Kanan" class="logo-right">
        </div>
        <ul>
            <li><a href="/"><img src="{{ asset('image/dashboard.svg') }}" class="icon">Dashboard</a></li>
            <li><strong>Makanan</strong></li>
            <li><a href="/stokmakanan"><img src="{{ asset('image/stok-makanan.svg') }}" class="icon">Stok Makanan</a></li>
            <li><a href="/stokbahanmakanan"><img src="{{ asset('image/stok-bahan-makanan.svg') }}" class="icon">Stok Bahan Makanan</a></li>
            <li><strong>Pegawai</strong></li>
            <li><a href="/daftarpegawai"><img src="{{ asset('image/daftar-pegawai.svg') }}" class="icon">Daftar Pegawai</a></li>
            <li><a href="/absensipegawai"><img src="{{ asset('image/absensi-pegawai.svg') }}" class="icon">Absensi Pegawai</a></li>
            <li style="background-color: #FDC6C5; padding: 10px; border-radius: 8px;">
                <a href="/gajipegawai" style="color: #DD3B38; text-decoration: none; font-weight: bold;">
                    <img src="{{ asset('image/gaji-pegawai-red.svg') }}" class="icon" alt="Dashboard Icon" style="margin-right: 10px;">
                    Gaji Pegawai
                </a>
            </li> 
            <li><a href="/cutipegawai"><img src="{{ asset('image/cuti-pegawai.svg') }}" class="icon">Cuti Pegawai</a></li>
            <li><strong>Transaksi</strong></li>
            <li><a href="/laporanpendapatan"><img src="{{ asset('image/laporan-pendapatan-harian.svg') }}" class="icon">Laporan Keuangan</a></li>
            <li><a href="/tagihan"><img src="{{ asset('image/tagihan.png') }}" class="icon">Tagihan</a></li>
            <li><a href="/invoices"><img src="{{ asset('image/invoices.svg') }}" class="icon">Invoices</a></li>
        </ul>

        <div class="user-profile">
            <img src="{{ asset('image/fotoprofil.png') }}" alt="Foto Profil" class="profile-pic">
            <div class="user-info">
                <p class="user-name">Nama User</p>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-titles">
                <h1>Gaji Pegawai</h1>
            </div>
            <div class="header-buttons">
                <button class="header-btn">
                    <img src="{{ asset('image/Search.svg') }}" alt="Search" class="icon">
                </button>
                <form action="/tambahgajipegawai" method="GET">
                <button class="btn btn-primary">
                    <span class="icon">+</span> 
                    <h3>Tambah Slip Gaji</h3>
                </button>
                </form>
            </div>
        </header>

        <div class="dashboard-container"></div>
            <table class="default-table">
                <thead>
                    <tr>
                        <th class="table-header-left">
                            <input type="checkbox" id="select-all">
                        </th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Total Gaji</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Status</th>
                        <th class="table-header-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($gaji->isEmpty())
                        <tr>
                            <td colspan="7" class="no-data">Tidak ada gaji pegawai yang terdaftar.</td>
                        </tr>
                    @endif
                    @forEach ($gaji as $item)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>Rp {{ number_format($item->gajipokok + $item->tunjangan, 0, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('j F Y') }}</td>
                        <td>Terbayar</td>
                        <td>
                            <div class="button-group">
                                <form action="/editgajipegawai/{{ $item->id }}" method="GET">
                                    <button class="btn btn-edit">Ubah</button>
                                </form>

                                <form action="/hapusgajipegawaipost/{{ $item->id }}" method="POST">
                                    @csrf
                                    <button class="btn btn-delete">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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
