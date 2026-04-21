<h1>Edit Buku</h1>

<form action="/buku/{{ $buku->id }}" method="POST">

@csrf
@method('PUT')

<label>Judul</label><br>
<input type="text" name="judul" value="{{ $buku->judul }}"><br><br>

<label>Penulis</label><br>
<input type="text" name="penulis" value="{{ $buku->penulis }}"><br><br>

<label>Tahun</label><br>
<input type="number" name="tahun" value="{{ $buku->tahun }}"><br><br>

<button type="submit">Update</button>

</form>