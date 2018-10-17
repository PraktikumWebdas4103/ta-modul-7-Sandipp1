<?php 
include 'koneksi.php';
$nim = $_GET['nim'];
$sql ="SELECT * FROM input WHERE nim ='$nim'";

$result = $con->query($sql);

if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {

echo "Detail Data : <br> Nim :" . $row["nim"]. "<br>Nama :" . $row["nama"]. "<br>Jenis Kelamin :" . $row["jeniskelamin"]. "<br>Prodi :" . $row["programstudi"]. "<br>Fakultas :" . $row["fakultas"]."<br> Asal :" . $row["asal"]."<br> Moto Hidup :". $row['motohidup'];

}

}else {

echo "Data mungkin tidak tersedia " . $con->error;

}