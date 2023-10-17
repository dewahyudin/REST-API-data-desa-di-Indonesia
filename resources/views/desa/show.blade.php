<!-- resources/views/desa/show.blade.php -->

<html>
<head>
    <title>Detail Desa</title>
</head>
<body>
    <h1>Detail Desa</h1>
    <p>Nama Desa: {{ $desa->nama }}</p>
    <a href="{{ url('/desa/'.$desa->id.'/edit') }}">Edit</a>
    <form action="{{ url('/desa/'.$desa->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
    <a href="{{ url('/desa') }}">Kembali ke Daftar Desa</a>
</body>
</html>
