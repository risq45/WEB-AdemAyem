<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Adem Ayem</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

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
                <h2>
                    <a href="stok-makanan-link">Gaji Pegawai </a>>Tambah Slip Pegawai
                </h2>
            </div>            
            <div class="header-buttons">
            </div>
        </header>

        <div class="dashboard-container"></div>
            <form action="/tambahgajipegawaipost" method="POST" enctype="multipart/form-data" class="food-form">
                @csrf
                <div class="form-group">
                    <label for="pegawaiName">Nama Pegawai</label>
                    <input type="text" id="pegawaiName" name="nama" placeholder="Masukkan Nama Pegawai" required>
                </div>
            
                <div class="form-group">
                    <label for="pegawaiJabatan">Jabatan</label>
                    <input type="text" id="pegawaiJabatan" name="jabatan" placeholder="Masukkan Jabatan" required>
                </div>

                <div class="form-group">
                    <label for="nohandphonePegawai">No Handphone</label>
                    <input type="text" id="nohandphonePegawai" name="hp" placeholder="Masukkan No Handphone" required>
                </div>

                <div class="form-group">
                    <label for="gajipokokPegawai">Gaji Pokok</label>
                    <input type="text" id="gajipokokPegawai" name="gajipokok" placeholder="Masukkan Gaji Pokok Pegawai" required>
                </div>

                <div class="form-group">
                    <label for="tunjanganPegawai">Tunjangan</label>
                    <input type="text" id="tunjanganPegawai" name="tunjangan" placeholder="Masukkan Tunjanngan Pegawai" required>
                </div>

                <div class="form-group">
                    <label for="tanggalPembayaran">Tanggal Pembayaran</label>
                    <input type="date" id="tanggalPembayaran" name="tanggal" required>
                </div>                
            
                <div class="form-group button-container">
                    <button type="submit" class="btn btn-secondary">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../script.js"></script>
    <script src="../table.js"></script>
</body>
</html>
