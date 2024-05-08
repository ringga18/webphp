<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307057">
    <meta name="author" content="Ringga Dwi Kusuma">
</head>
<body>
        <h1>Halaman PHP Saya </h1>

        <?php

    //contoh fungsi
    function writeMsg($nama) {
        echo "selamat datang ". $nama." <br>";
    }
    writeMsg("Ringga"); //pemanggilan fungsi

    //fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2) {
        $a= $angka1+$angka2;
        return $a; //mengirim nilai $a ke pemanggil
    }
    $hasil=tambah(5, 5);
    echo ($hasil);

    ?>
</body>
</html>