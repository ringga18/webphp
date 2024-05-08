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

// Tentukan nilai denominasi yang tersedia
$pecahanuang = [100000, 50000, 20000, 10000, 5000, 2000, 500];

// Jumlah uang yang akan ditarik
$jumlahTarik = 1387500;

// Inisialisasi array kosong untuk menyimpan jumlah uang dari setiap denominasi
$jumlahUang = [];

// Hitung jumlah uang dari setiap denominasi
foreach ($pecahanuang as $nilai) {
    $jumlahLembar = floor($jumlahTarik / $nilai);
    $jumlahUang[$nilai] = $jumlahLembar;

    // Perbarui jumlah yang akan ditarik untuk mencerminkan penggunaan uang
    $jumlahTarik -= $jumlahLembar * $nilai;
}

// Tampilkan hasilnya
echo "Ani akan mendapatkan uang dengan pecahan berikut:\n";
foreach ($jumlahUang as $nilai => $jumlah) {
    if ($jumlah > 0) {
        echo "Rp." . number_format($nilai, 0, ',', '.') . ": " . $jumlah . " lembar\n";
    }
}

?>

</body>
</html>