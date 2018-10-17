<?php
include "koneksi.php";
$sql = mysqli_query($con,"SELECT * FROM input");
?>
  <tr>
            <form action="search.php" method="POST">
            <td>search</td>
            <td><input type="text" name="nim" placeholder="nim"></td>
            <td><input type="submit" name="submit" value="submit"></td>
            </form>
        </tr>
        <form action="" method=POST>
    <table border="1" cellpadding="0" cellspacing="0">
      
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>nim</th>
            <th>action</th>
        </tr>
        <?php 
        if(mysqli_num_rows($sql)>0){ 
            $no = 1;
            while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nim"];?></td>
            <td><a href="delete.php?nim=<?=$data['nim']?>">Hapus</a>
            <a href="detail.php?nim=<?=$data['nim']?>">Detail</a></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>