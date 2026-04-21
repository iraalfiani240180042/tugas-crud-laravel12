<h1>Tambah Buku</h1>

<form action="/buku" method="POST">

@csrf

Judul:<br>
<input type="text" name="judul"><br><br>

Penulis:<br>
<input type="text" name="penulis"><br><br>

Tahun:<br>
<input type="number" name="tahun"><br><br>

<button type="submit">Simpan</button>

</form>