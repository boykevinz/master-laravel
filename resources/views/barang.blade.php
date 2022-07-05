<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1"> 
        <tr>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Deskirpsi</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Action</th>
        </tr>
        @foreach($barang as $brg)
        <tr>
            <td>{{ $brg ->id }}</td>
            <td>{{ $brg ->nama_brg }}</td>
            <td>{{ $brg ->deskripsi }}</td>
            <td>{{ $brg ->harga }}</td>
            <td>{{ $brg ->jumlah }}</td>
            <td>
                <a href="/home/edit/{{ $brg->id }}">edit</a>
                |
                <a href="/home/hapus/{{ $brg->id }}">delete</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>






