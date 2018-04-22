<?php 

include "connect.php";

$id = $_GET['id'];

$nama = $_REQUEST['namabaru'];
$email = $_REQUEST['emailbaru'];
$telepon = $_REQUEST['phonebaru'];
$umur = $_REQUEST['umurbaru'];

$sql = "UPDATE phonebook SET nama = '$nama' , email = '$email' , telepon = '$telepon' , umur = '$umur' WHERE id='$id'";

		

$res = mysqli_query($link, $sql);
if($res) {
	echo "Data Update Succeed"; header("refresh:1; url= List.php");
}
else { 
	echo mysqli_error($link);
}
mysqli_close($link);

 ?>