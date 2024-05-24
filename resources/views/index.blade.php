<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk Akun | Maura Clothing</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('global/css') }}/style-login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
    <img class="wave" src="{{ asset('global/admin/assets/img') }}/wave.jpg">
    <div class="container">
        <div class="img">
            <img src="{{ asset('global/admin/assets/img') }}/shopping.svg">
        </div>
        <div class="login-content">
            <form action="{{ route ('loginaksi') }}" method="POST">
                @csrf
                <img class="logo" src="{{ asset('global/css/img') }}/logo-pemweb.png" alt="Maura Clothing Logo">
                <h2 class="title">Selamat Datang di Maura Clothing!</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="username" placeholder="Username" class="input" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" placeholder="Password" class="input" required>
                    </div>
                </div>
                @if ($errors->any())
                <h5>Username atau Password anda tidak Valid!</h5>
                @endif
                <input type="submit" name="submit" value="Masuk" class="btn">
                <h4>Belum punya akun?<a href="/register" style="text-align:center;"> Daftar sekarang!</a></h4>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('global/admin/assets/js') }}/main.js"></script>
</body>

</html>