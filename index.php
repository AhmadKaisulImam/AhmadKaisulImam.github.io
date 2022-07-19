<?php 
require 'function.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {

			header("Location:http://localhost/dinamis_form/quetion.php");
			exit;
		}
	}

	$error = true;

}

?>



<!doctype html>
<html lang="en">
  <head>
    <title>LOGIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c09f168d35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/styl.css">

    <!-- Bootstrap CSS v5.2.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
        <?php if( isset($error) ) {
            echo"<script>
            alert('username/password tidak sesuai');
            </script>";
            }
        ?>
    
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <div class="mb-md-5 mt-md-4 pb-5">
                    <form action="" method="post" onsubmit="return validasi()">

                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <h5 class="text-white-50 mb-5">Masukan Username dan Password !</h5>

                        <div class="form-outline form-white mb-4">
                        <input type="username" name="username" id="username" class="form-control form-control-lg" autocomplete="off" />
                        <label class="form-label" for="username">Username</label>
                        </div>

                        <div class="form-outline form-white mb-4">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" autocomplete="off" />
                        <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="checkbox" class="form-check-input" id="show-password"> Tampilkan Password
                        </div>

                        <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Login</button>
                    </form>

                  </div>

                  <div>
                    <p class="mb-0">Belum punya akun? <a href="http://localhost/dinamis_form/registrasi.php/" class="text-white-50 fw-bold">Daftar Akun</a>
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
    <script>    
      $(document).ready(function() {
            $('#show-password').click(function() {
                if ($(this).is(':checked')) {
                    $('#password').attr('type', 'text');
                } else {
                    $('#password').attr('type', 'password');
                }
            });
        });
    </script>
    <script type="text/javascript">
        function validasi() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;		
            if (username != "" && password!="") {
                return true;
            }else{
                alert('Username dan Password harus di isi !');
                return false;
            }
	}
 
    </script>
  </body>
</html>