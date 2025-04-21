<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2>Tambah Kontak</h2>

    @if (session('success'))
    <p style= "color: green;">{{ session('success') }}</p>
    @endif

    @if ( $errors-> any())
    <ul style ="color : red;">
        @foreach ($errors ->all() as $error)<li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

<form method ="POST" action = "{{ route('user.store') }}">
        @csrf 
        <input type = "text" name = "name" placeholder = "nama" value = "{{ old('name') }}"> <br>
        <input type = "email" name = "email" placeholder = "email" value = "{{ old('email') }}"> <br>
        <input type = "number" name = "hp"  placeholder = "nohp" > <br>
        <input type = "text" name = "message"  placeholder = "pesan" > <br>
        <button type = "submit">Simpan</button>

    </form>
</body>
</html>
