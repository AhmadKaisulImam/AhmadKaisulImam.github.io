<?php
require 'function.php';
$pertanyaan = query1("SELECT * FROM pertanyaan ORDER BY id DESC LIMIT 1");

if(isset($_POST["submit"])){
  if (tambah($_POST) > 0 ){
      echo "<script>
      alert('Jawaban Berhasil Dikumpulkan!');
      document.location.href = 'quetion.php';
  </script>";
  } else {
      echo"Jawaban Gagal Dikumpulkan!";
      echo"<br>";
      echo mysqli_error($conn);
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Form Jawaban</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <?php foreach ( $pertanyaan as $row): ?>
  <!-- tombol -->
  <div class="container center">
    <a href="edit_quetion.php?id=<?=$row["id"];?>" class="btn btn-outline-success mt-5">Pertanyaan</a>
    <a href="" class="btn btn-outline-success active mt-5">Jawaban</a>
    <a href="" onclick="return confirm('Buat list pertanyaan')" class="btn btn-outline-primary mt-5">Lihat Respon</a>       
  </div>

  <!-- form pertanyaan -->
  <div class="container">
    <div class="card mt-3 mb-5">
        <div class="card-header bg-info text-center text-white">
            <h4>FORM PERTANYAAN</h4>
        </div>
        
        <div class="card-body">
            <form action="" method="post">
                <label  class="form-label" for="jawaban1"><?=$row["pertanyaan1"];?></label>
                <input class="form-control" id="jawaban1" name="jawaban1" style="width:100%" type="text" placeholder="Masukan jawaban Pertama">

                <label  class="form-label" for="jawaban2"><?=$row["pertanyaan2"];?></label> 
                <input class="form-control" id="jawaban2" name="jawaban2" style="width:100%;" type="text" placeholder="Masukan jawabn Kedua">

                <label  class="form-label" for="jawaban3"><?=$row["pertanyaan3"];?></label>
                <input class="form-control" id="jawaban3" name="jawaban3" style="width:100%" type="text" placeholder="Masukan jawaban Ketiga">

                <label  class="form-label" for="jawaban4"><?=$row["pertanyaan4"];?></label>
                <input class="form-control" id="jawaban4" name="jawaban4" style="width:100%" type="text" placeholder="Masukan jawaban Keempat">

                <label  class="form-label" for="jawaban5"><?=$row["pertanyaan5"];?></label>
                <input class="form-control" id="jawaban5" name="jawaban5" style="width:100%" type="text" placeholder="Masukan jawaban Kelima">

                <label  class="form-label" for="jawaban6"><?=$row["pertanyaan6"];?></label>
                <input class="form-control" id="jawaban6" name="jawaban6" style="width:100%" type="text" placeholder="Masukan jawaban keenam">

                <label  class="form-label" for="jawaban7"><?=$row["pertanyaan7"];?></label>
                <input class="form-control" id="jawaban7" name="jawaban7" style="width:100%" type="text" placeholder="Masukan jawaban Ketujuh">

                <label  class="form-label" for="jawaban8"><?=$row["pertanyaan8"];?></label>
                <input class="form-control" id="jawaban8" name="jawaban8" style="width:100%" type="text" placeholder="Masukan jawaban Kedelapan">
                
                <label  class="form-label" for="jawaban9"><?=$row["pertanyaan9"];?></label>
                <input class="form-control" id="jawaban9" name="jawaban9" style="width:100%" type="text" placeholder="Masukan jawaban kesembilan">

                <label  class="form-label" for="jawaban10"><?=$row["pertanyaan10"];?></label>
                <input class="form-control" id="jawaban10" name="jawaban10" style="width:100%" type="text" placeholder="Masukan jawaban kesepuluh">

                <button type="submit" name="submit" class="btn btn-success mt-4">Kirim Jawaban</button>
            </form>
        </div>
        <?php endforeach;?>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>