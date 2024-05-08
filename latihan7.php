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

    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "Saya suka ", $namaBuah[0] . ", ". $namaBuah[1] . " dan " . $namaBuah[2] . " . ";

    //tampilkan mangga
    echo "Saya suka " . $namaBuah[1];
    //tampilkan jeruk
    echo "Saya suka " . $namaBuah[2];
    //tampilkan apel
    echo "Saya suka " . $namaBuah[3];
    //tampilkan melon
    echo "Saya suka " . $namaBuah[4];
    echo "<br>";

    //array dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"39 Tahun");
    $umur['ahmad']="50 Tahun";
    echo "Umur Andi adalah " . $umur['Andi'];
    //tampilkan semua umur
    echo "Umur Ben adalah " . $umur['Ben'];
    echo "Umur Joe adalah " . $umur['Joe'];
    echo "Umur Ahmad adalah " . $umur['ahmad'];

    ?>
</body>
</html>