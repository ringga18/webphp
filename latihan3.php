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
    $x = 5;
    $y = 10;

    //Arithmetic Operators
    
    echo("<br");
    echo "Penambahan ".$x + $y."<br>";
    echo "pengurangan ".$x - $y."<br>";
    echo "perkalian ".$x * $y."<br>";
    echo "pembagian ".$x / $y."<br>";
    echo "Modulus ".$x % $y."<br>";
    echo "Exponensial ".$x ** $y."<br>";
    echo("<br");

    //Assignment Operators
    $x += 2; // $x = $x + 2
    $y *= 2; // $y = $y *2
    echo "Penambahan x ".$x."<br>";
    echo "Perkalian y ".$y."<br>";
    echo ("<br");

    //Increment/Decrement Operators
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo("<br>");
    echo "Isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";
    echo("<br>");

    //Conditional assignment Operators
    $user = "Andi Darmawan";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status."<br>";
    //Variable $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
    
    ?>