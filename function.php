<?php
$conn = mysqli_connect("localhost","root","","dinamis");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
//pertanyaan
function query1($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah1($data){
    global $conn;
    $pertanyaan1 = htmlspecialchars($data["pertanyaan1"]);
    $pertanyaan2 = htmlspecialchars($data["pertanyaan2"]);
    $pertanyaan3 = htmlspecialchars($data["pertanyaan3"]);
    $pertanyaan4 = htmlspecialchars($data["pertanyaan4"]);
    $pertanyaan5 = htmlspecialchars($data["pertanyaan5"]);
    $pertanyaan6 = htmlspecialchars($data["pertanyaan6"]);
    $pertanyaan7 = htmlspecialchars($data["pertanyaan7"]);
    $pertanyaan8 = htmlspecialchars($data["pertanyaan8"]);
    $pertanyaan9 = htmlspecialchars($data["pertanyaan9"]);
    $pertanyaan10 = htmlspecialchars($data["pertanyaan10"]);

    $query = "INSERT INTO pertanyaan VALUES ('','$pertanyaan1','$pertanyaan2','$pertanyaan3','$pertanyaan4','$pertanyaan5',
                                                '$pertanyaan6','$pertanyaan7','$pertanyaan8','$pertanyaan9','$pertanyaan10')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// akhir pertanyaan
function tambah($data){
    global $conn;
    $jawaban1 = htmlspecialchars($data["jawaban1"]);
    $jawaban2 = htmlspecialchars($data["jawaban2"]);
    $jawaban3 = htmlspecialchars($data["jawaban3"]);
    $jawaban4 = htmlspecialchars($data["jawaban4"]);
    $jawaban5 = htmlspecialchars($data["jawaban5"]);
    $jawaban6 = htmlspecialchars($data["jawaban6"]);
    $jawaban7 = htmlspecialchars($data["jawaban7"]);
    $jawaban8 = htmlspecialchars($data["jawaban8"]);
    $jawaban9 = htmlspecialchars($data["jawaban9"]);
    $jawaban10 = htmlspecialchars($data["jawaban10"]);

    $query = "INSERT INTO jawaban VALUES ('','$jawaban1','$jawaban2','$jawaban3','$jawaban4','$jawaban5',
                                            '$jawaban6','$jawaban7','$jawaban8','$jawaban9','$jawaban10')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM jawaban WHERE id= $id");
    return mysqli_affected_rows($conn);
}
function Ubahtanya($data){
    global $conn;
    $id = $data["id"];
    $pertanyaan1 = htmlspecialchars($data["pertanyaan1"]);
    $pertanyaan2 = htmlspecialchars($data["pertanyaan2"]);
    $pertanyaan3 = htmlspecialchars($data["pertanyaan3"]);
    $pertanyaan4 = htmlspecialchars($data["pertanyaan4"]);
    $pertanyaan5 = htmlspecialchars($data["pertanyaan5"]);
    $pertanyaan6 = htmlspecialchars($data["pertanyaan6"]);
    $pertanyaan7 = htmlspecialchars($data["pertanyaan7"]);
    $pertanyaan8 = htmlspecialchars($data["pertanyaan8"]);
    $pertanyaan9 = htmlspecialchars($data["pertanyaan9"]);
    $pertanyaan10 = htmlspecialchars($data["pertanyaan10"]);

    $query = "UPDATE pertanyaan SET 
                pertanyaan1 = '$pertanyaan1',
                pertanyaan2 = '$pertanyaan2',
                pertanyaan3 = '$pertanyaan3',
                pertanyaan4 = '$pertanyaan4',
                pertanyaan5 = '$pertanyaan5',
                pertanyaan6 = '$pertanyaan6',
                pertanyaan7 = '$pertanyaan7',
                pertanyaan8 = '$pertanyaan8',
                pertanyaan9 = '$pertanyaan9',
                pertanyaan10 = '$pertanyaan10'
              WHERE id = '$id'";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //cek
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result))
    {
        echo "<script>
            alert('username sudah terdaftar');
            </script>";
        return false;
    }

    //konfirmasi password
    if($password !== $password2)
    {
        echo"<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
    return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //menambahkan data
    mysqli_query($conn,"INSERT INTO user VALUE('','$nama','$username','$password')");
    return mysqli_affected_rows($conn);
}
?>