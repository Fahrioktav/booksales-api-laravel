<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>

<body>
    <h1>Daftar Buku di Toko Book Sales</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Cover</th>
            <th>Genre ID</th>
            <th>Author ID</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->stock }}</td>
            <td>{{ $book->cover_photo }}</td>
            <td>{{ $book->genre_id }}</td>
            <td>{{ $book->author_id }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>