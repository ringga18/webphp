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
    // variabel dalam PHP
    $txt = "Selamat Datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi Variable txt adalah: $txt</p>" ;
    echo "<p>isi variable x adalah: $x</p>" ;
    echo "<p>isi variable y adalah: $y</p>" ;
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo "<br>";
    echo  $x + $y;
    echo "<br>";

    //PHP Konstanta
    define("nama_konstanta", "{Ringskuy}");
    echo "<br>" . nama_konstanta;

    ?>
</body>
</html>