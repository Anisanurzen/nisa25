<h2>Tambah Data Mahasiswa</h2>
 <!-- tag form -->
<form action="Save.php" method="POST">
 <label>Nomor Induk Dosen :</label>
 <input type="text" name="nip" id="nip" placeholder="Nomor Induk Lengkap" required>
 <br>
 <label>Nama Dosen :</label>
 <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
 <br>
 <label for="">Alamat :</label>
 <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
 <br>
 <label for="">Email :</label>
 <input type="text" name="email" id="email" placeholder="Email Lengkap" required>
 <br>
 <label for="">Nohp :</label>
 <input type="number" name="nohp" id="nohp" required>
 <br>
 <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>