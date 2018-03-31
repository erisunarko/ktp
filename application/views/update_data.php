<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
	<?php
		if (isset($data))
		{
			foreach ($data->result_array() as $row)
			{
				$nik = $row['nik'];
				$nama = $row['nama'];
				$tempat_lahir = $row['tempat_lahir'];
				$tanggal_lahir = $row['tanggal_lahir'];
				$jenis_kelamin = $row['jenis_kelamin'];
				$alamat = $row['alamat'];
				$agama = $row['agama'];
				$status_kawin = $row['status_kawin'];
				$pekerjaan = $row['pekerjaan'];
				$kewarganegaraan = $row['kewarganegaraan'];
				$masa_berlaku = $row['masa_berlaku'];
			}
		}
	?>
	<?php echo form_open('ktp/proses_update_data'); ?>
		<hr>
		<h2>Tambah data KTP</h2>		
		<a href = "login_process">Back</a>
		<hr>
		
		<p>NIK :</p>
		<input type="text" name="nik" value="<?php echo $nik; ?>" disabled/>
		
		<p>Nama :</p>
		<input type="text" name="nama" value="<?php echo $nama; ?>" required />

		<p>Tempat Lahir :</p>
		<input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" required />

		<p>Tanggal Lahir :</p>
		<input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" required />
		
		<p>Jenis Kelamin :</p>
		<?php
			if ($jenis_kelamin == "Laki-laki")
			{
				echo '<input type="radio" name="jenis_kelamin" value = "Laki-laki" checked>Laki - laki</input>';
				echo '<input type="radio" name="jenis_kelamin" value = "Perempuan">Perempuan</input>';
			}
			else
			{
				echo '<input type="radio" name="jenis_kelamin" value = "Laki-laki">Laki - laki</input>';
				echo '<input type="radio" name="jenis_kelamin" value = "Perempuan" checked>Perempuan</input>';
			}
		?>
		
		<p>Alamat :</p>
		<textarea name="alamat" rows="4" cols="50"required><?php echo $alamat; ?></textarea>
		
		<p>Agama :</p>
		<?php
			switch($agama)
			{
				case "Islam":
					echo '<select name="agama">';
					echo '<option value="Islam" selected>Islam</option>';
					echo '<option value="Kristen">Kristen</option>';
					echo '<option value="Hindu">Hindu</option>';
					echo '<option value="Budha">Budha</option>';
					echo '<option value="Katholik">Katholik</option>';
					echo '</select>';
				break;
				case "Kristen":
					echo '<select name="agama">';
					echo '<option value="Islam">Islam</option>';
					echo '<option value="Kristen">Kristen</option>';
					echo '<option value="Hindu">Hindu</option>';
					echo '<option value="Budha">Budha</option>';
					echo '<option value="Katholik">Katholik</option>';
					echo '</select>';
				break;
				case "Hindu":
					echo '<select name="agama">';
					echo '<option value="Islam">Islam</option>';
					echo '<option value="Kristen">Kristen</option>';
					echo '<option value="Hindu" selected>Hindu</option>';
					echo '<option value="Budha">Budha</option>';
					echo '<option value="Katholik">Katholik</option>';
					echo '</select>';
				break;
				case "Budha":
					echo '<select name="agama">';
					echo '<option value="Islam">Islam</option>';
					echo '<option value="Kristen">Kristen</option>';
					echo '<option value="Hindu">Hindu</option>';
					echo '<option value="Budha" selected>Budha</option>';
					echo '<option value="Katholik">Katholik</option>';
					echo '</select>';
				break;
				case "Katholik":
					echo '<select name="agama">';
					echo '<option value="Islam">Islam</option>';
					echo '<option value="Kristen">Kristen</option>';
					echo '<option value="Hindu">Hindu</option>';
					echo '<option value="Budha">Budha</option>';
					echo '<option value="Katholik" selected>Katholik</option>';
					echo '</select>';
				break;
			}
		?>
		
		
		<p>Status Perkawinan :</p>
			<?php
			if ($status_kawin == "Kawin")
			{
				echo '<select name="status_kawin">';
				echo '<option value="Kawin" selected>Kawin</option>';
				echo '<option value="Tidak Kawin">Tidak Kawin</option>';
				echo '</select>';
			}
			else
			{
				echo '<select name="status_kawin">';
				echo '<option value="Kawin">Kawin</option>';
				echo '<option value="Tidak Kawin" selected>Tidak Kawin</option>';
				echo '</select>';
			}
		?>		
		
		<p>Pekerjaan :</p>
		<input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" required />
		
		<p>Kewarganegaraan :</p>
		<input type="text" name="kewarganegaraan" value="<?php echo $kewarganegaraan; ?>" required />
		
		<p>Masa Berlaku :</p>
		<input type="date" name="masa_berlaku" value="<?php echo $masa_berlaku; ?>" required />

		</br></br>
		<input type="submit" value="Update Data"/>

	</form>
</body>
</html>