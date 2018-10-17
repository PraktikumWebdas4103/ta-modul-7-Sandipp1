<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$sql = "DELETE FROM input WHERE nim='$nim'";

if ($con->query($sql) === TRUE) {

 header("http://localhost/formdatabase/ta7/home.php");

echo "Note : <br> <font color='green'>Data dengan Nim $nim berhasil di hapus</font>";

echo "<br><a href='tampil.php'>BACK</a>";

} else {

echo "Error deleting record: " . $conn->error;

}

?>