<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>
        @foreach ($genres as $genre)
        <tr>
            <td>{{ $genre['id'] }}</td>
            <td>{{ $genre['name'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
