<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP PRAKTIKUM 1</h1>

    <form action="" method="post">
        <label for="">Nama Lengkap</label> <br>
        <input type="text" name="namaLengkap" placeholder="Masukan Nama Anda"> <br>

        <label for="">Tempat Lahir</label> <br>
        <input type="text" name="tempatLahir" placeholder="Masukan Tempat Lahir Anda"> <br>

        <label for="">Tanggal Lahir</label> <br>
        <input type="text" name="tanggalLahir" placeholder="Masukan Tanggal Lahir Anda"> <br>

        <label for="">Alamat Tinggal</label> <br>
        <input type="text" name="alamatTinggal" placeholder="Masukan Alamat Tinggal Anda"> <br>

        <button type="submit">Kirim</button>
    </form>

    <br>
    <br>
    <br>
    <br>

    <?php
        // @ berfungsi menyembunyikan error karna variabel belum di set/diberi nilai
        if (@$_POST['namaLengkap']) {
            $nama = @$_POST['namaLengkap']; // untuk mengambil nilai dari method POST
            echo "Nama : $nama <br>"; // ini untuk menampilkan nilai variable (string)
        }
        
        if (@$_POST['tempatLahir']) {
            $tempatLahir  = @$_POST['tempatLahir']; 
            $tanggalLahir = @$_POST['tanggalLahir']; 
            echo "TTL : $tempatLahir, $tanggalLahir <br>"; 
        }
        
        if (@$_POST['alamatTinggal']) {
            $alamat = @$_POST['alamatTinggal']; 
            echo "Alamat : $alamat <br>";
        }
    ?>
    

</body>
</html>
