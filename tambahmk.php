<?php
    include ('koneksimk.php');
    if (isset($_POST['btnSimpan'])) {

        $nama = $_POST['txtNama'];
        $semester = $_POST['txtSemester'];
        $sks_teori = $_POST['txtSks_teori'];
        $sks_praktikum = $_POST['txtSks_praktikum'];
        $jurusan = $_POST['txtjurusan'];
        echo 'nama :' . $nama;
        $query="INSERT INTO matakuliah (nama,semester,sks_teori,sks_praktikum,jurusan)
        VALUES('$nama','$semester','$sks_teori','$sks_praktikum','$jurusan')";
        $sql= mysqli_query($connect, $query);

        if (!$sql){
            echo 'tidak berhasil';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <a href="tampilmk.php"></a>
<form action="" method="POST">
    <table>    
        <tr>
        <td><label for="nama">Nama</label></td><td>:</td>
        <td><input type="text" name="txtNama" id="nama"></td>
        </tr>
        <tr>
        <td><label for="semester">Semester</label></td><td>:</td>
        <td><input type="text" name="txtSemester" id="semester"></td>
        </tr>
        <tr>
        <td><label for="sks_teori">SKS Teori</label></td><td>:</td>
        <td><input type="text" name="txtSks_teori" id="sks_teori"></td>
        </tr>
        <tr>
        <td><label for="sks_praktikum">SKS Praktikum</label></td><td>:</td>
        <td><input type="text" name="txtSks_praktikum" id="sks_praktikum"></td>
        </tr>
        <tr>
        <td><label for="jurusan">jurusan</label></td><td>:</td>
        <td><input type="text" name="txtjurusan" id="jurusan"></td>
        </tr>
        <tr>
        <td><button type="submit" name="btnSimpan" >Simpan</button></td>
        </tr>    
    </table>
</form>
</body>
</html>