<!DOCTYPE html>
<html>

<head>
    <title>Daftar Genre</title>
</head>

<body>
    <h1>Halaman bertugas untuk menampilkan data dari genre table</h1>

    @foreach
    <ul>
        <li>{{ $item['name'] }}</li>
        <li>{{ $item['description'] }}</li>
    </ul>
    @endforeach
</body>

</html>