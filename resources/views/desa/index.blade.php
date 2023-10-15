<!-- resources/views/desa/index.blade.php -->

<html>
<head>
    <title>Data Desa</title>
</head>
<body>
    <h1>Data Desa</h1>
    <a href="{{ url('/desa/create') }}">Tambah Desa</a>
    <ul>
        @foreach ($desas as $desa)
            <li>
                {{ $desa->nama }}
                <a href="{{ url('/desa/'.$desa->id) }}">Detail</a>
                <a href="{{ url('/desa/'.$desa->id.'/edit') }}">Edit</a>
                <form action="{{ url('/desa/'.$desa->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
