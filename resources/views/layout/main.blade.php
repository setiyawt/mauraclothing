<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maura Clothing</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('global/css') }}/styleuser.css " rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon-32x32.png')  }}">
</head>
<body>
    @include('layout.header')

    @yield('content')

    @if(!Auth::check())
        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Registrasi untuk mendapatkan update tentang kami</h4>
                <p>Dapatkan update email mengenai kabar terbaru toko kami dan dapatkan <span>penawaran spesial</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your Email Address">
                <button class="normal">Sign Up</button>
            </div>
        </section>
    @else
        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Dengan login, anda sudah terdaftar untuk program majalah kami!</h4>
                <p>Anda akan mendapatkan update email mengenai kabar terbaru toko kami dan dapatkan <span>penawaran spesial</span></p>
            </div>
        </section>
    @endif

    @include('layout.footer')

    <script src="{{ asset('global/js') }}script.js"></script>
</body>
</html>
