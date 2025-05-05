<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah admin</title>
</head>
<body>
    <h2>Tambah admin</h2>

    @if (session('success'))
    <p style= "color: green;">{{ session('success') }}</p>
    @endif

    @if ( $errors-> any())
    <ul style ="color : red;">
        @foreach ($errors ->all() as $error)<li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method ="POST" action ="{{route('admin.store')}}">
        @csrf 
        <input type = "text" name = "name" placeholder = "nama" value = "{{ old('name') }}"> <br>
        <input type = "text" name = "alamat" placeholder = "alamat" value = "{{ old('alamat') }}"> <br>
        <input type = "email" name = "email" placeholder = "email" value = "{{ old('email') }}"> <br>
        <input type = "number" name = "hp"  placeholder = "Masukan Nomor hp"><br> 
       <select><option>Super Admin</option><option>
            kasir</option></select></button>
        <button type = "submit">Simpan</button>
        
        <a href="{{ url('/user/create') }}"><button type="button">Ke halaman awal</button></a>
    </form>
</body>
</html>
