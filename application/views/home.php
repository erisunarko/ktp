<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
</body>
	<hr>
	<h3>Data KTP</h3>
	<a href = "tambah_data">Tambah Data</a>
	<a href = "proses_logout">Logout</a>
	<hr>
	
	<?php
		if (isset($data))
		{
			echo "<table border='1'>";
				echo "<th><center>NIK</center></th>";
				echo "<th><center>Nama</center></th>";
				echo "<th><center>Tempat Lahir</center></th>";
				echo "<th><center>Tgl Lahir</center></th>";
				echo "<th><center>Jenis Kelamin</center></th>";
				echo "<th><center>Alamat</center></th>";
				echo "<th><center>Agama</center></th>";
				echo "<th><center>Status Kawin</center></th>";
				echo "<th><center>Pekerjaan</center></th>";
				echo "<th><center>Kewarganegaraan</center></th>";
				echo "<th><center>Masa Berlaku</center></th>";
				echo "<th colspan='2'><center>Kelola Data</center></th>";
				
				foreach ($data->result_array() as $row) {
					echo "<tr>";
						echo "<td>" . $row['nik'] . "</td>";
						echo "<td>" . $row['nama'] . "</td>";
						echo "<td>" . $row['tempat_lahir'] . "</td>";
						echo "<td>" . $row['tanggal_lahir'] . "</td>";
						echo "<td>" . $row['jenis_kelamin'] . "</td>";
						echo "<td>" . $row['alamat'] . "</td>";
						echo "<td>" . $row['agama'] . "</td>";
						echo "<td>" . $row['status_kawin'] . "</td>";
						echo "<td>" . $row['pekerjaan'] . "</td>";
						echo "<td>" . $row['kewarganegaraan'] . "</td>";
						echo "<td>" . $row['masa_berlaku'] . "</td>";
						echo "<td>" . '<a href = "update_data_ktp?id='. $row['nik'] . '">Update</a>' . "</td>";
						echo "<td>" . '<a href = "delete_data_ktp?id='. $row['nik'] . '"><span onClick="return doconfirm();">Delete</span></a>' . "</td>";
					echo "</tr>";
				}
			echo "</table>";
		}
		else
		{
			echo "Tidak ada data KTP";
		}
	?>
	<script>
		function doconfirm()
		{
			job=confirm("Apakah anda yakin akan menghapus data ini?");
			if(job!=true)
			{
				return false;
			}
		}
	</script>
</body>
</html>