<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Akun | Maura Clothing</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('global/css') }}/style_registrasi.css">
</head>

<body>
    <div class="registration-form">
        <form action="{{ route('aksiregister') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <center>
                <h1>Registrasi Akun</h1>
            </center>

            <br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <h5>Masukkan Nama Lengkap</h5>
                <input type="text" name="name" class="form-control item" placeholder="Nama Lengkap">

            </div>

            <div class="form-group">
                <h5>Masukkan Username</h5>
                <input type="text" name="username" class="form-control item" placeholder="Username">

            </div>
            <div class="form-group">
                <h5>Masukkan Password</h5>
                <input type="password" name="password" class="form-control item" placeholder="Password">

            </div>
            <div class="form-group">
                <h5>Masukkan alamat email</h5>
                <input type="email" name="email" class="form-control item" placeholder="E-mail">

            </div>
            <div class="form-group">
                <h5>Masukkan nomor telepon</h5>
                <input type="text" name="telepon" class="form-control item" placeholder="Nomor Telepon">

            </div>
            <div class="form-group">
                <h5>Masukkan Alamat</h5>
                <input type="text" name="alamat" class="form-control item" placeholder="Alamat">

            </div>
            <h5>Tambahkan foto profil</h5>
            <input type="file" name="image" class="input-control" required>

            <input type="submit" name="submit" value="Daftar" class="btn btn-block create-account">
            <h6 style="padding-top:10px;text-align:center;">Klik
                <a href="{{ route('index') }}" style="color:#fab2d3;">disini</a> untuk kembali
            </h6>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="{{ asset('global/js') }}/script.js"></script>
</body>

</html>