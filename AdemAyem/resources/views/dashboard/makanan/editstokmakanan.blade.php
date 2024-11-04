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
            <li style="background-color: #FDC6C5; padding: 10px; border-radius: 8px;">
                <a href="/stokmakanan" style="color: #DD3B38; text-decoration: none; font-weight: bold;">
                    <img src="{{ asset('image/stok-makanan-red.svg') }}" class="icon" alt="Dashboard Icon" style="margin-right: 10px;">
                    Stok Makanan
                </a>
            </li>        
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
                <p class="user-name">Nama User</p>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-titles">
                <h2>
                    <a href="stok-makanan-link">Stok Makanan </a> > Edit {{ $makanan->nama }}
                </h2>
            </div>            
            <div class="header-buttons">
                <button class="header-btn">
                    <img src="../assets/images/Search.svg" alt="Search" class="icon">
                </button>
                <button class="btn btn-primary">
                    <span class="icon">+</span> 
                    <h3>Tambah Stok</h3>
                </button>
            </div>
        </header>

        <div class="dashboard-container"></div>
            <form action="/editstokmakananpost/{{ $makanan->id }}" method="POST" enctype="multipart/form-data" class="food-form">
                @csrf
                <div class="form-group image-upload">
                    <input type="file" id="foodImage" name="foodImage" accept="image/*" style="display: none;" onclick="event.stopPropagation();" onchange="previewImage(event);">
                    <div class="image-placeholder" onclick="document.getElementById('foodImage').click();">
                        <img id="uploadedImage" src="" alt="Uploaded Food Image" style="display: none; width: 100%; height: auto; border-radius: 8px;">
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="foodName">Nama Makanan </label>
                    <input type="text" id="foodName" name="nama" required>
                </div>
            
                <div class="form-group">
                    <label for="foodStatus">Status</label>
                    <select id="foodStatus" name="status" required>
                        <option value="tersedia">Tersedia</option>
                        <option value="tidak tersedia">Tidak Tersedia</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="foodStock">Persediaan</label>
                    <div class="stock-container">
                        <input type="number" id="foodStock" name="stockmin" placeholder="0" required>
                        <span class="text-separator">dari</span>
                        <input type="number" id="foodStockMax" name="stockmax" placeholder="0" required>
                        <span class="text-separator">stok</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="foodCategory">Kategori</label>
                    <select id="foodCategory" name="kategori" required>
                        <option value="makanan ringan">Makanan Ringan</option>
                        <option value="makanan berat">Makanan Berat</option>
                    </select>
                </div>
            
                <div class="form-group button-container">
                    <button type="submit" class="btn btn-secondary">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="table.js"></script>
    <script>
        // Sample data
        const foodData = {
            imageUrl: "../assets/images/nasigoreng.png", 
            name: "{{ $makanan->nama }}",
            status: "{{ $makanan->status ? 'tersedia' : 'tidak tersedia' }}",
            stock: "{{ $makanan->stockmin }}",
            stockMax: "{{ $makanan->stockmax }}",
            category: "{{ $makanan->kategori }}",
        };

        // Function to pre-fill the form
        function preFillForm() {
            document.getElementById('uploadedImage').src = foodData.imageUrl; 
            document.getElementById('uploadedImage').style.display = 'block';
            document.getElementById('foodName').value = foodData.name;
            document.getElementById('foodStatus').value = foodData.status;
            document.getElementById('foodStock').value = foodData.stock;
            document.getElementById('foodStockMax').value = foodData.stockMax;
            document.getElementById('foodCategory').value = foodData.category;
        }

        // Call preFillForm when the page loads
        window.onload = preFillForm;
    </script>
</body>
</html>
