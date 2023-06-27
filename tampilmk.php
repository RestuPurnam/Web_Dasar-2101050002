<?php
include('koneksimk.php');
$sql = "SELECT * FROM matakuliah";
$query2 = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Matakuliah</title>
</head>
<body>
<table border="1">
        <h4>
            <a href="tambahmk.php">Tambah Data</a>
        </h4>
        <tr>
            <th>Nama</th>
            <th>Semester</th>
            <th>SKS Teori</th>
            <th>SKS Praktikum</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        
        <?php
        while ($result2 = mysqli_fetch_array($query2)){?>

        <tr>
            <td><?= $result2['nama']?></td>
            <td><?= $result2['semester']?></td>
            <td><?= $result2['sks_teori']?></td>
            <td><?= $result2['sks_praktikum']?></td>
            <td><?= $result2['jurusan']?></td>
            <td>
                <a href="">Ubah<a>
                <a href="hapusmk.php?id=<?= $result2['id']?>">Hapus</a>
            </td>
        </tr>            
        <?php } ?>
            

    </table>
    
    
</body>
</html>