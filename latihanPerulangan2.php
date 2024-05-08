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
    $angka = array(12, 13, 15, 16,67,189,346,876,54232,3256);

    for ($i = 0; $i < count($angka); $i++) {
      $bilangan = $angka[$i];
      if ($bilangan % 2 == 0) {
        echo "Nomor: $bilangan Genap <br>";
      } else {
        echo "Nomor: $bilangan Ganjil <br>";
      }
    }
    ?>
</body>
</html>