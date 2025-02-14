<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('student.update') }}" method="POST">
        @csrf
        @method('PUT')

    <label for = "nim">NIM:</label>
    <input type="text" id="nim" name="nim" value="{{ $student->nim }}">
    <br><br>

    <label for = "name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $student->name }}">
    <br><br>

    <label for="prodi">Program Studi:</label>
    <input type="text" id="prodi" name="prodi" value="{{ $student->prodi }}">
    <br><br>
    
    <label for="angkatan">Angkatan:</label>
    <input type="number" id="angkatan" name="angkatan" value="{{ $student->angkatan }}">
    <br><br>

    <label for="alamat">Alamat:</label>
    <textarea id="alamat" name="alamat" rows="4">{{ $student->alamat }}</textarea>
    <br><br>
    <button type="submit">submit</button>
    </form>
</body>
</html>