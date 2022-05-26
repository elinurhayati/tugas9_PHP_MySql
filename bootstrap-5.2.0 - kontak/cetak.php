<?php
	include "koneksi.inc.php";
	//Variabel untuk mengurutkan data berdasarkan id
	$sql="SELECT * from kontak order by id;";
	//Variabel untuk menjalankan query setelah berhasil terkoneksi ke db
	$query=mysqli_query($conn, $sql) or die("Proses cetak gagal");

	//Mengatur table
	echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
	<tr>
	<th>ID</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Email</th>
	<th>Alamat</th>
	<th>Kota</th>
	<th>Pesan</th>
	<tr>";

	$no=1;
	//Melakukan perulangan terhadap variabel hasil
	while($hasil=mysqli_fetch_row($query)){
		echo "<tr>
		<td>$hasil[0]</td>
		<td>$hasil[1]</td>
		<td>$hasil[2]</td>
		<td>$hasil[3]</td>
		<td>$hasil[4]</td>
		<td>$hasil[5]</td>
		<td>$hasil[6]</td>
		</tr>";
	$no++;
	}
	echo "</table>"
?>
<a href="kontak.php">Kembali</a>