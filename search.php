<?php
if(isset($_GET['nim'] !==' ')){
	$searchq = $_GET['nim'];
	include 'koneksi.php';
	$nim = $data['nim'];
	$sql = mysqli_query($con, "SELECT * from search where keywords like '%$nim%' ");
	$con = mysqli_num_rows($nim);
}
if($c == 0){
$output = 'Tidak ada Pencarian' .$searchq.''; 
            $no = 1;
        }else{
            while($data = mysqli_fetch_array($sql)){
            	$nama = $data['nama'];
            	$nim = $data['nim'];
            	$jeniskelamin = $data['jeniskelamin'];
            	$programstudi = $data['programstudi'];
            	$fakultas = $data['fakultas'];
            	$asal = $data['asal'];
            	$motohidup = $data['motohidup']; 
        }
     print_r(expression)
?>
<table border="1">
	<tr>
		<th>no</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Jenis Kelamin</th>
		<th>Program Studi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<td>Moto Hidup</td>
	</tr>
	<tr>
	<td><?php echo $no ?></td>
	<td><?php echo $_POST['nim'];?></td>
	<td><?php echo $data['nama'];?></td>
	<td><?php echo $data['jeniskelamin'];?></td>
	<td><?php echo $data['programstudi'];?></td>
	<td><?php echo $data['fakultas'];?></td>
	<td><?php echo $data['asal'];?></td>
	<td><?php echo $data['motohidup'];?></td>
	</tr>
	<?php $no++; } ?>
        <?php } ?>
</table>
