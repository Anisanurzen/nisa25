<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dandikirim melalui link (get) -->
<?php
$nip=$_GET['nip'];
//membuat sql tampil data
$sqldata="SELECT * FROM tbldosen WHERE nip='$nip'";
//ambil koneksi data
require_once "KoneksiDB.php";
//proses sql
$query=mysqli_query($koneksi,$sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
$data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Dosen</h2>
<!-- tag form -->
<form action="Update.php" method="POST">
<label>Nomor Induk Dosen :</label>
<input type="text" name="nip" id="nip" value="<?=$data['nip']?>" 
placeholder="Nama Lengkap" required>
<br>
<label>Nama Dosen :</label>
<input type="text" name="nama" id="nama" value="<?=$data['nama']?>" 
placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>" 
placeholder="Alamat Lengkap" required>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email" value="<?=$data['email']?>" 
placeholder="Email Lengkap" required>
<br>
<label for="">nohp :</label>
<input type="number" name="nohp" id="nohp" value="<?=$data['nohp']?>" 
placeholder="nohp" required>
<br>
<button type="submit" name="kirim" value="kirim">Update Data</button>
</form>