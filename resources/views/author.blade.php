<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Penulis</h1>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penulis</th>
                <th>Negara Asal</th>
                <th>Tahun Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
            <tr>
                <td>{{ $author['id'] }}</td>
                <td>{{ $author['name'] }}</td>
                <td>{{ $author['country'] }}</td>
                <td>{{ $author['birth_year'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
