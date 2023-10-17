<!-- resources/views/desa/create.blade.php -->

<html>
<head>
    <title>Tambah Desa</title>
</head>
<body>
    <h1>Tambah Desa</h1>
    <form action="{{ url('/desa') }}" method="POST">
        @csrf
        <label for="nama">Nama Desa:</label>
        <input type="text" id="nama" name="nama">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
