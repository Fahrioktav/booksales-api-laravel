<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku di Toko Book Sales</h1>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Genre ID</th>
                <th>Author ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $item)
            <tr>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['description'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item['stock'] }}</td>
                <td>{{ $item['genre_id'] }}</td>
                <td>{{ $item['author_id'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
