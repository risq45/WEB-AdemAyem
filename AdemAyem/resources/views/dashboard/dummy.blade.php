<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            * {
                box-sizing: border-box;
                font-family: 'Nunito';
            }

            body {
                font-family: 'Nunito';
                margin: 0;
                padding: 0;
                display: flex;
                height: 100vh;
                background-color: white;
            }

            .container {
                display: flex;
                width: 100%;
                height: 100vh;
            }

            .login-form {
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding: 40px;
                width: 50%;
            }

            .login-form h1 {
                font-size: 30px;
                font-family: 'Nunito'; 
                color: #101010;
            }

            .login-form h3 {
                font-size: 20px; 
                font-family: 'Nunito'; 
                color: #101010;
                opacity: 90%;
                margin-top: 0;
                font-weight: 400;
            }

            .image-section {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .image-section img {
                width: 500px;    
                height: auto;
                object-fit: contain;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                margin-bottom: 5px;
                font-weight: 600;
            }



            .form-group input {
                width: 100%; /* Lebar penuh */
                padding: 10px; /* Padding yang sama seperti tombol */
                font-size: 18px; /* Ukuran font yang sama dengan tombol */
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box; /* Agar padding dan border tidak menambah lebar */
            }

            .form-group a {
                display: block;
                padding: 5px;
                margin-bottom: 10px;
                text-decoration: none;
                color: #B81D1B;
                font-size: 14px;
                float: right
            }

            .form-group input {
                font-family: 'Nunito';
                font-size:16px;
                font-weight:normal;
            }

            .btn-login {
                width: 100%; 
                padding: 10px; 
                background-color: #DD3B38;
                border: none;
                color: white;
                font-size: 18px;
                cursor: pointer;
                border-radius: 5px;
                box-sizing: border-box;
            }

            .btn-login:hover {
                background-color: #FDC6C5;
            }

            .btn-google:hover {
                background-color: #FDC6C5; /* Warna latar saat hover */
            }

            .input-with-icon {
                display: flex;
                align-items: center;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 5px;
            }

            .input-with-icon img {
                width: 20px;
                height: 20px;
                margin-left: 5px;
                cursor: pointer;
            }

            .separator {
                width: 1px;
                height: 24px;
                background-color: #101010;
                margin: 5px; 
            }

            .input-with-icon input {
                border: none;
                flex: 1;
                padding: 0;
                font-size: 16px;
            }
            .input-with-icon input:focus {
                outline: none; 
            }


            .btn-google {
                display: flex; 
                align-items: center; 
                justify-content: center;
                width: 100%; 
                padding: 10px; 
                background-color: #fff;
                border: 1px solid #DDD538; 
                color: #DDD538;
                font-size: 18px;
                cursor: pointer;
                border-radius: 5px;
                margin-top: 20px;
            }

            .google-icon {
                width: 20px; 
                height: 20px;
                margin-right: 10px;
            }

            .btn-register {
                width: 100%; 
                padding: 10px; 
                background-color: #DDD538;
                border: none;
                color: white;
                font-size: 18px;
                cursor: pointer;
                border-radius: 5px;
                box-sizing: border-box;
            }

            .btn-login:hover {
                background-color: #FDC6C5;
            }

            .btn-google:hover {
                background-color: #FDC6C5; /* Warna latar saat hover */
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container">
            <div class="login-form">
                <h1>Masuk Akun</h1>
                <h3>Selamat datang kembali! Silahkan masuk ke akun anda</h3>
                <form action="/submit-login" method="POST">
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
                    
                    <button type="google-auth" class="btn-google">
                        <img src="{{ asset('image/google.svg') }}" alt="Google icon" class="google-icon">
                        Lanjutkan dengan Google
                    </button>

                </form>
            </div>

            <div class="image-section">
                <img src="{{ asset('image/login.png') }}" alt="login">
            </div>
        </div>
    </body>
</html>
