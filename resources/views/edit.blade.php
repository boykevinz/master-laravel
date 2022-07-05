<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($barang as $brg)
    <form action="/home/update" method="post">
        {{ csrf_field() }}
        nama barang<br> <input type="text" name="nama_brg" value="{{ $brg->id }}"><br>
        deskripsi<br> <input type="text" name="deskripsi" value="{{ $brg->nama_brg }}"><br>
        harga<br> <input type="text" name="harga" value="{{ $brg->deskripsi }}"><br>
        jumlah<br> <input type="text" name="harga" value="{{ $brg->harga }}"><br>
        jumlah<br> <input type="text" name="jumlah" value="{{ $brg->jumlah }}"><br>
        <input type="submit" value="simpan data">
    </form> 
    @endforeach
</body>
</html>