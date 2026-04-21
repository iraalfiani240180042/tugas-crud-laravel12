<h1>Data Buku</h1>

<a href="/buku/create">+ Tambah Buku</a>

<table border="1" style="width:100%; margin-top:15px;">

<thead>
    <tr>
        <th style="padding:10px;">Judul</th>
        <th style="padding:10px;">Penulis</th>
        <th style="padding:10px;">Tahun</th>
        <th style="padding:10px;">Aksi</th>
    </tr>
</thead>

<tbody>
    @foreach ($bukus as $buku)
    <tr>
        <td style="padding:10px;">{{ $buku->judul }}</td>
        <td style="padding:10px;">{{ $buku->penulis }}</td>
        <td style="padding:10px;">{{ $buku->tahun }}</td>

        <td style="padding:10px;">
            <a href="/buku/{{ $buku->id }}/edit">Edit</a>

            <form action="/buku/{{ $buku->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

</table>