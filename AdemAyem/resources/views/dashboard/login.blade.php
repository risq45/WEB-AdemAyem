<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container">
            <div class="login-form">
                <h1>Masuk Akun</h1>
                <h3>Selamat datang kembali! Silahkan masuk ke akun anda</h3>
                @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-with-icon">
                            <img src="{{ asset('image/gmail-logo.svg') }}" alt="gmail-icon">
                            <div class="separator"></div>
                            <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-with-icon">
                            <img src="{{ asset('image/eye.svg') }}" alt="password-icon" id="toggle-password" onclick="togglePasswordVisibility()">
                            <div class="separator"></div>
                            <input type="password" id="password" name="password" placeholder="Masukkan password anda" required>
                        </div>
                        <a href="#">Lupa password?</a>
                    </div>                
                    <button type="submit" class="btn-login">Masuk</button>
                    
                    

                </form>
                <form action="/register" method="GET">
                    <button type="google-auth" class="btn-google">
                        <!-- <img src="{{ asset('image/google.svg') }}" alt="Google icon" class="google-icon">
                        Lanjutkan dengan Google
                        -->
                        Belum punya akun ? Daftar disini
                    </button>
                </form>
            </div>

            <div class="image-section">
                <img src="{{ asset('image/login.png') }}" alt="login">
            </div>
        </div>
    </body>
</html>
