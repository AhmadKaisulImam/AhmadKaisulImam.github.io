<?php
require 'function.php';
if(isset($_POST["register"]))
{
    if(registrasi($_POST) > 0)
    {
        echo"<script>
            alert('user berhasil ditambahkan');
            </script>";
            header("Location: http://localhost/dinamis_form/index.php/");
			exit;
    } else
    {
        echo mysqli_error($conn);
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun</title>
    <!-- Menghubungkan ke Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center">
    <div class="container">
        <form action="" method="post">
            <div class="kotak_login">
            <div class="card">
            <div class="card-header bg-info text-white">
            <h2>Registrasi</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password2">Konfirmasi Password :</label>
                    <input type="password" class="form-control" name="password2" id="password2">
                </div>
                <br>
                <div>
                    <button class="tombol_daftar btn btn-primary" type="submit" name="register">Daftar</button>
                </div>
            </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>