<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List - Black Pink Theme</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Tema Hijau dan Biru */
body {
    background-color: #00274D; /* Biru tua */
    color: #A7FFEB; /* Hijau muda */
    font-family: 'Arial', sans-serif;
}

h1 {
    text-align: center;
    color: #00E676; /* Hijau cerah */
    text-shadow: 2px 2px 10px rgba(0, 230, 118, 0.7);
    margin-top: 30px;
}

table {
    margin: 20px auto;
    width: 85%;
    border-collapse: collapse;
}

th {
    background-color: #004D40; /* Hijau tua */
    color: #A7FFEB;
    text-align: center;
    padding: 12px;
}

td {
    background-color: #005B96; /* Biru */
    color: #A7FFEB;
    text-align: center;
    padding: 10px;
    border: 1px solid #A7FFEB;
}

tr:nth-child(even) td {
    background-color: #003B6F;
}

tr:hover {
    background-color: #00E676;
    color: #00274D;
}

.btn-danger {
    background-color: #00C853;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 4px;
}

.btn-danger:hover {
    background-color: #009624;
}

.container {
    padding: 30px;
}

    </style>
</head>
<body>
    <h1>Student List</h1>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->prodi }}</td>
                    <td>{{ $student->angkatan }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Link ke Bootstrap JS dan dependensinya -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
