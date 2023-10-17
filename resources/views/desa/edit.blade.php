<!-- resources/views/desa/edit.blade.php -->

<html>
<head>
    <title>Edit Desa</title>
</head>
<body>
    <h1>Edit Desa</h1>
    <form action="{{ url('/desa/'.$desa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama Desa:</label>
        <input type="text" id="nama" name="nama" value="{{ $desa->nama }}">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
