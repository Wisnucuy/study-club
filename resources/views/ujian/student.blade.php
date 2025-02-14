<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    @foreach ($students as $student )
        <p>ID : {{$student -> id}}</p>
        <p>NIM : {{ $student -> nim}}</p>
        <p>Nama : {{ $student -> name}}</p>
        <p>Prodi : {{ $student -> prodi}}</p>
        <p>Angkatan : {{ $student -> angkatan}}</p>
        <p>Alamat : {{ $student -> alamat}}</p>
    @endforeach

</body>
</html>