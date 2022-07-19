<?php
require 'function.php';
$pertanyaan = query("SELECT * FROM pertanyaan");
$respon = query("SELECT * FROM jawaban");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Respom</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

  <div class="container center">
    <a href="" class="btn btn-outline-success active mt-5">Pertanyaan</a>
    <a href="" onclick="return confirm('Buat list pertanyaan')" class="btn btn-outline-success mt-5">Jawaban</a>
    <a href="" onclick="return confirm('Buat list pertanyaan')" class="btn btn-outline-primary mt-5">Lihat Respon</a>    
    <a href="" class="btn btn-danger mt-5 text-white">logout</a>    
  </div>
     
  <div class="container">

  <div class="card mt-3 mb-5">
    <div class="card-header bg-info text-center text-white">
      <h4>Respon</h4>
    </div>
    <div class="card-body">
    <table class="table table-striped" style="background-color:white">
    <?php foreach ( $pertanyaan as $row): ?>
    <tr>
        <th><?=$row["pertanyaan1"];?></th>
        <th><?=$row["pertanyaan2"];?></th>
        <th><?=$row["pertanyaan3"];?></th>
        <th><?=$row["pertanyaan4"];?></th>
        <th><?=$row["pertanyaan5"];?></th>
        <th><?=$row["pertanyaan6"];?></th>
        <th><?=$row["pertanyaan7"];?></th>
        <th><?=$row["pertanyaan8"];?></th>
        <th><?=$row["pertanyaan9"];?></th>
        <th><?=$row["pertanyaan10"];?></th>
        <th>Aksi</th>
    </tr>
    <?php endforeach;?>
    <?php foreach ( $respon as $row): ?>
    <tr>
        <td><?=$row["jawaban1"];?></td>
        <td><?=$row["jawaban2"];?></td>
        <td><?=$row["jawaban3"];?></td>
        <td><?=$row["jawaban4"];?></td>
        <td><?=$row["jawaban5"];?></td>
        <td><?=$row["jawaban6"];?></td>
        <td><?=$row["jawaban7"];?></td>
        <td><?=$row["jawaban8"];?></td>
        <td><?=$row["jawaban9"];?></td>
        <td><?=$row["jawaban10"];?></td>
        <td> <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Anda Yakin?');"><button type="button" class="btn btn-danger">Hapus</button></a></td>
    </tr>
        <?php endforeach;?>
    </table>
    </div>
  </div>

  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>