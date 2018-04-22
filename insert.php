<?php

include "connect.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$telepon   = $_POST['telepon'];
$umur = $_POST['umur'];

$sql = "INSERT INTO phonebook (nama, email, telepon, umur) "
     . "VALUES ('$nama','$email','$telepon','$umur')";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
if($res) echo "Data successfully to save.";
else echo mysqli_error($link);

/* tutup koneksi MySQL */
mysqli_close($link);
