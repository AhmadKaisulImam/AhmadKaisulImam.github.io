<?php
require 'function.php';
    if(isset($_POST["submit"])){
        if (tambah1($_POST) > 0 ){
            echo "<script>
            alert('Form Pertanyaan Berhasil Dibuat');
            document.location.href = 'answer.php';
        </script>";
        } else {
            echo"Formulir Gagal Dibuat!";
            echo"<br>";
            echo mysqli_error($conn);
        }

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Form Pertanyaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  
  <!-- tombol -->
  <div class="container center">
    <a href="" class="btn btn-outline-success active mt-5">Pertanyaan</a>
    <a href="" onclick="return confirm('Buat list pertanyaan')" class="btn btn-outline-success mt-5">Jawaban</a>
    <a href="respon.php" class="btn btn-outline-primary mt-5">Lihat Respon</a>    
    <a href="" class="btn btn-danger mt-5 text-white">logout</a>    
  </div>

  <!-- form pertanyaan -->
  <div class="container">
    <div class="card mt-3 mb-5">
        <div class="card-header bg-info text-center text-white">
            <h4>FORM PERTANYAAN</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <label  class="form-label h4" for="pertanyaan1">Pertanyaan Pertama</label>
                <input class="form-control" id="pertanyaan1" name="pertanyaan1" style="width:100%" type="text" placeholder="Masukan Pertanyaan Pertama">

                <label  class="form-label h4" for="pertanyaan2">Pertanyaan Kedua</label> 
                <input class="form-control" id="pertanyaan2" name="pertanyaan2" style="width:100%;" type="text" placeholder="Masukan Pertanyaan Kedua">

                <label  class="form-label h4" for="pertanyaan3">Pertanyaan Ketiga</label>
                <input class="form-control" id="pertanyaan3" name="pertanyaan3" style="width:100%" type="text" placeholder="Masukan Pertanyaan Ketiga">

                <label  class="form-label h4" for="pertanyaan4">Pertanyaan Keempat</label>
                <input class="form-control" id="pertanyaan4" name="pertanyaan4" style="width:100%" type="text" placeholder="Masukan Pertanyaan Keempat">

                <label  class="form-label h4" for="pertanyaan5">Pertanyaan Kelima</label>
                <input class="form-control" id="pertanyaan5" name="pertanyaan5" style="width:100%" type="text" placeholder="Masukan Pertanyaan Kelima">

                <label  class="form-label h4" for="pertanyaan6">Pertanyaan keenam</label>
                <input class="form-control" id="pertanyaan6" name="pertanyaan6" style="width:100%" type="text" placeholder="Masukan Pertanyaan keenam">

                <label  class="form-label h4" for="pertanyaan7">Pertanyaan Ketujuh</label>
                <input class="form-control" id="pertanyaan7" name="pertanyaan7" style="width:100%" type="text" placeholder="Masukan Pertanyaan Ketujuh">

                <label  class="form-label h4" for="pertanyaan8">Pertanyaan Kedelapan</label>
                <input class="form-control" id="pertanyaan8" name="pertanyaan8" style="width:100%" type="text" placeholder="Masukan Pertanyaan Kedelapan">
                
                <label  class="form-label h4" for="pertanyaan9">Pertanyaan kesembilan</label>
                <input class="form-control" id="pertanyaan9" name="pertanyaan9" style="width:100%" type="text" placeholder="Masukan Pertanyaan kesembilan">

                <label  class="form-label h4" for="pertanyaan10">Pertanyaan kesepuluh</label>
                <input class="form-control" id="pertanyaan10" name="pertanyaan10" style="width:100%" type="text" placeholder="Masukan Pertanyaan kesepuluh">

                <button type="submit" name="submit" class="btn btn-success mt-4">Kirim Pertanyaan</button>
            </form>
        </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>