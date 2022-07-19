<?php
    require 'function.php';
    $id = $_GET["id"];
    if (hapus($id) > 0)
    {
        echo "<script>
        alert('respon berhasil dihapus!');
        document.location.href = 'respon.php';
    </script>";
    } else {
        echo "<script>
        alert('respon gagal dihapus!');
        document.location.href = 'respon.php';
    </script>";
        echo"<br>";
        echo mysqli_error($conn);
    }
?>