<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="container">
        <div class="login-form">
            <h1>Selamat Datang di Adem Ayem!</h1>
            <h3>Masukkan username dan password untuk melengkapi akun anda</h3>
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Masukkan username</label>
                    <div class="input-with-icon">
                        <img src="{{ asset('image/eye.svg')}}">
                        <div class="separator"></div>
                        <input type="username" id="username" name="nama" placeholder="Masukkan username anda" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-email">Masukkan email</label>
                    <div class="input-with-icon">
                        <img src="{{ asset('image/gmail-logo.svg')}}" alt="gmail-icon">
                        <div class="separator"></div>
                        <input type="input-email" id="nput-password" name="email" placeholder="Masukkan email anda" required>
                    </div>
                </div>   
                <div class="form-group">
                    <label for="input-password">Masukkan password</label>
                    <div class="input-with-icon">
                        <img src="{{ asset('image/eye.svg')}}">
                        <div class="separator"></div>
                        <input type="input-password" id="nput-password" name="password" placeholder="Masukkan password anda" required>
                    </div>
                </div>                
                <button type="submit" class="btn-register">Daftar</button>

            </form>
            <form action="/login" method="GET">
                <button type="google-auth" class="btn-google">
                    <!-- <img src="{{ asset('image/google.svg') }}" alt="Google icon" class="google-icon">
                    Lanjutkan dengan Google
                    -->
                    Sudah punya akun ? Masuk disini
                </button>
            </form>
        </div>

        <div class="image-section">
           <img src="{{ asset('image/login.png')}}" alt="login">
        </div>
    </div>

</body>
</html>
