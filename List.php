<?php 

include "connect.php";

$sql = "SELECT id, nama, email, telepon, umur FROM phonebook";
$result = mysqli_query($link, $sql);
if ($result == null) {
	echo "Belum ada data";
}
else {
echo "<table border=1>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Nama</td>";
echo "<td>Email</td>";
echo "<td>Telepon</td>";
echo "<td>Umur</td>";
echo "<td>Action</td>";
echo "<td>Action</td>";
echo "</tr>";
	while($baris = mysqli_fetch_array($result)) {
   	 $id = $baris['id'];
    	echo "<tr>";
    	echo "<td>" . $id . "</td>";
    	echo "<td>" . $baris['nama'] . "</td>";
    	echo "<td>" . $baris['email'] . "</td>";
    	echo "<td>" . $baris['telepon'] . "</td>";
    	echo "<td>" . $baris['umur'] . "</td>";
    	echo '<td><a href="Edit.php?id='.$id.'">Update</a></td>'; 
    	echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>'; 
    	echo "</tr>";
	}
    	echo "</table>";
}

    	mysqli_close($link);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <input type="button" onclick="location.href='new.html'" value="Tambah Data">
 </body>
 </html>
