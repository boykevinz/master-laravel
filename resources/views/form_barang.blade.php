<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/home/simpan" method="POST">
        {{ csrf_field() }}
        id<br> <input type="text" name="id"><br />
        nama barang<br> <input type="text" name="nama_brg"><br>
        deskripsi<br> <input type="text" name="deskripsi"><br>
        harga<br> <input type="text" name="harga"><br>
        jumlah<br> <input type="text" name="jumlah"><br>
        <input type="submit" value="simpan data">
    </form>
</body>
</html>