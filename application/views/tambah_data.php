<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<?php echo form_open('ktp/proses_tambah_data'); ?>
		<hr>
		<h2>Tambah data KTP</h2>		
		<a href = "login_process">Back</a>
		<hr>
		
		<p>Nama :</p>
		<input type="text" name="nama" required />

		<p>Tempat Lahir :</p>
		<input type="text" name="tempat_lahir" required />

		<p>Tanggal Lahir :</p>
		<input type="date" name="tanggal_lahir" required />
		
		<p>Jenis Kelamin :</p>
		<input type="radio" name="jenis_kelamin" value = "Laki-laki" checked>Laki - laki</input>
		<input type="radio" name="jenis_kelamin" value = "Perempuan">Perempuan</input>

		<p>Alamat :</p>
		<textarea name="alamat" rows="4" cols="50"required></textarea>
		
		<p>Agama :</p>
		<select name="agama">
		<option value="Islam" selected>Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		<option value="Katholik">Katholik</option>
		</select>
		
		<p>Status Perkawinan :</p>
		<select name="status_kawin">
		<option value="Kawin">Kawin</option>
		<option value="Tidak Kawin">Tidak Kawin</option>
		</select>
		
		<p>Pekerjaan :</p>
		<input type="text" name="pekerjaan" required />
		
		<p>Kewarganegaraan :</p>
		<input type="text" name="kewarganegaraan" required />
		
		<p>Masa Berlaku :</p>
		<input type="date" name="masa_berlaku" required />

		</br></br>
		<input type="submit" value="Submit"/>

	</form>
</body>
</html>