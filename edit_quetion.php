<?php
require 'function.php';
$id = $_GET["id"];
$pertanyaan = query("SELECT * FROM pertanyaan WHERE id = $id")[0];

    if(isset($_POST["submit"])){
        if (Ubahtanya($_POST) > 0 ){
            echo "
            <script>
                alert('Pertanyaan Berhasil Diubah!');
                document.location.href = 'answer.php';
            </script>
                ";
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
    <a href="" onclick="return confirm('Buat list pertanyaan')" class="btn btn-outline-primary mt-5">Lihat Respon</a>       
  </div>

  <!-- form pertanyaan -->
  <div class="container">
    <div class="card mt-3 mb-5">
        <div class="card-header bg-info text-center text-white">
            <h4>EDIT PERTANYAAN</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pertanyaan["id"];?>">

                <label  class="form-label h4" for="pertanyaan1">Pertanyaan Pertama</label>
                <input class="form-control" id="pertanyaan1" name="pertanyaan1" type="text" value="<?=$pertanyaan["pertanyaan1"]?>">

                <label  class="form-label h4" for="pertanyaan2">Pertanyaan Kedua</label> 
                <input class="form-control" id="pertanyaan2" name="pertanyaan2" type="text" value="<?=$pertanyaan["pertanyaan2"]?>">

                <label  class="form-label h4" for="pertanyaan3">Pertanyaan Ketiga</label>
                <input class="form-control" id="pertanyaan3" name="pertanyaan3" type="text" value="<?=$pertanyaan["pertanyaan3"]?>">

                <label  class="form-label h4" for="pertanyaan4">Pertanyaan Keempat</label>
                <input class="form-control" id="pertanyaan4" name="pertanyaan4" type="text" value="<?=$pertanyaan["pertanyaan4"]?>">

                <label  class="form-label h4" for="pertanyaan5">Pertanyaan Kelima</label>
                <input class="form-control" id="pertanyaan5" name="pertanyaan5" type="text" value="<?=$pertanyaan["pertanyaan5"]?>">

                <label  class="form-label h4" for="pertanyaan6">Pertanyaan keenam</label>
                <input class="form-control" id="pertanyaan6" name="pertanyaan6" type="text" value="<?=$pertanyaan["pertanyaan6"]?>">

                <label  class="form-label h4" for="pertanyaan7">Pertanyaan Ketujuh</label>
                <input class="form-control" id="pertanyaan7" name="pertanyaan7" type="text" value="<?=$pertanyaan["pertanyaan7"]?>">

                <label  class="form-label h4" for="pertanyaan8">Pertanyaan Kedelapan</label>
                <input class="form-control" id="pertanyaan8" name="pertanyaan8" type="text" value="<?=$pertanyaan["pertanyaan8"]?>">
                
                <label  class="form-label h4" for="pertanyaan9">Pertanyaan kesembilan</label>
                <input class="form-control" id="pertanyaan9" name="pertanyaan9" type="text" value="<?=$pertanyaan["pertanyaan9"]?>">

                <label  class="form-label h4" for="pertanyaan10">Pertanyaan kesepuluh</label>
                <input class="form-control" id="pertanyaan10" name="pertanyaan10" type="text" value="<?=$pertanyaan["pertanyaan10"]?>">

                <button type="submit" name="submit" class="btn btn-success mt-4">Kirim Pertanyaan</button>
            </form>
        </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>