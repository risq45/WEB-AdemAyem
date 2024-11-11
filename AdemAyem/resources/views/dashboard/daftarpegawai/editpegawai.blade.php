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
            <li style="background-color: #FDC6C5; padding: 10px; border-radius: 8px;">
                <a href="/daftarpegawai" style="color: #DD3B38; text-decoration: none; font-weight: bold;">
                    <img src="{{ asset('image/daftar-pegawai-red.svg') }}" class="icon" alt="Dashboard Icon" style="margin-right: 10px;">
                    Daftar Pegawai
                </a>
            </li>             
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
                    <a href="stok-makanan-link">Daftar Pegawai > {{ $pegawai->nama }} </a> > Edit Pegawai
                </h2>
            </div>            
            <div class="header-buttons">
            </div>
        </header>

        <div class="dashboard-container"></div>
        <form action="/editpegawaipost/{{ $pegawai->id }}" method="POST" enctype="multipart/form-data" class="food-form" id="pegawaiForm">
            @csrf
            <div class="form-group uploaded-image-pegawai">
                <input type="file" id="foodImage" name="foodImage" accept="image/*" style="display: none;" onclick="event.stopPropagation();" onchange="previewImage(event);">
                <div class="image-placeholder" onclick="document.getElementById('foodImage').click();">
                    <img id="uploadedImage" src="" alt="Uploaded Food Image" style="display: none; width: 100%; height: auto; border-radius: 8px;">
                </div>
            </div>
    
            <div class="form-group">
                <label for="pegawaiName">Nama Pegawai</label>
                <input type="text" id="pegawaiName" name="nama" required>
            </div>
    
            <div class="form-group">
                <label for="pegawaiJabatan">Jabatan</label>
                <input type="text" id="pegawaiJabatan" name="jabatan" required >
            </div>
    
            <div class="form-group">
                <label for="nohandphonePegawai">No Handphone</label>
                <input type="text" id="nohandphonePegawai" name="hp" >
            </div>
    
            <div class="form-group button-container">
                <button type="button" class="btn btn-primary" id="ubahBtn" onclick="enableForm()">Ubah</button>
                <button type="submit" class="btn btn-secondary" id="saveBtn" disabled>Simpan</button>
            </div>
        </form>
    
        </div>
    </div>

    <script src="script.js"></script>
    <script src="table.js"></script>
    <script>
        
        let isUbahButtonPressed = false; 

        function enableForm() {
            const formElements = document.querySelectorAll('#pegawaiForm input');
            formElements.forEach(element => {
                element.disabled = false; 
            });

            document.getElementById('saveBtn').disabled = false;

            isUbahButtonPressed = true;
            console.log("Tombol Ubah sudah ditekan:", isUbahButtonPressed);
        }

        document.getElementById('saveBtn').addEventListener('click', function(event) {
            if (!isUbahButtonPressed) {
                event.preventDefault();  
                alert("Harap tekan tombol 'Ubah' terlebih dahulu untuk mengaktifkan form.");
            }
        });

        const pegData = {
            imageUrl: "{{ asset('/image/pegawai-f-2.svg') }}", 
            name: "{{ $pegawai->nama }}",
            jabatan: "{{ $pegawai->jabatan }}",
            hp: "{{ $pegawai->hp }}",
        };

        // Function to pre-fill the form
        function preFillForm() {
            document.getElementById('uploadedImage').src = pegData.imageUrl; 
            document.getElementById('uploadedImage').style.display = 'block';
            document.getElementById('pegawaiName').value = pegData.name;
            document.getElementById('pegawaiJabatan').value = pegData.jabatan;
            document.getElementById('nohandphonePegawai').value = pegData.hp;
        }

        window.onload = preFillForm;
    </script>
</body>
</html>
