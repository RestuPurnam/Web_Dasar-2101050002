<?php
include('koneksimk.php');
$id = $_GET['id'];
$query2 = "DELETE FROM matakuliah WHERE id = $id ";
$result = mysqli_query($connect,$query2);
header("location:tampilmk.php");

?>