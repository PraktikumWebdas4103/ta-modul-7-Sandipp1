<form action="" method="POST">
<table>
	<tr>
<td>Nama</td>
<td>:</td> 
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Nim</td>
<td>:</td> 
<td><input type="int" name="nim"></td>
</tr>
<tr>
<td>Jenis Kelamin</td> 
<td>:</td> 
<td><input type="radio" name="jeniskelamin" value="pria">Pria
<input type="radio" name="jeniskelamin" value="wanita">Wanita</td>
</tr>
<tr>
<td>Program Studi</td> 
<td>:</td> 
			<td><select name="programstudi">
				<option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
				<option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
				<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
				<option value="S1 MBTI">S1 MBTI</option>
				<option value="D3 Perhotelan">D3 Perhotelan</option>
				<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
			</select>
		</td>
	</tr>
	<tr>
<td>Fakultas</td> 
<td>:</td> 
<td><select name="fakultas">
		   <option value="FEB">FEB</option>
		   <option value="FIK">FIK</option>
		   <option value="FRI">FRI</option>
		   <option value="FI">FI</option>
		   <option value="FIT">FIT</option>
		   <option value="FKB">FKB</option>
</select>
</td>
</tr>
<tr>
<td>Asal</td> 
<td>:</td> 
<td><input type="text" name="asal"></td>
</tr>
<tr>
<td>Moto Hidup</td> 
<td>:</td> 
<td><textarea rows="5" cols="50" name="motohidup"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>

<?php
if (isset($_POST['submit'])){
include 'koneksi.php';
$nama= $_POST['nama'];
$nim = $_POST['nim'];
$jeniskelamin = $_POST['jeniskelamin'];
$programstudi = $_POST['programstudi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$motohidup = $_POST['motohidup'];
$sql ="INSERT INTO input (nama,nim,jeniskelamin,programstudi,fakultas,asal,motohidup) values ('$nama','$nim','$jeniskelamin','$programstudi','$fakultas','$asal','$motohidup')";
if (mysqli_query($con,$sql)){
	header("location: http://localhost/jurnalg/tampil.php");
}else{
	echo "Gagal Regis";
	echo "<a href='input.php'>Back</a>";
}
}
?>