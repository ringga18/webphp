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
    // Fungsi untuk konversi angka menjadi huruf
    function terbilang($angka) {
        $angka = intval($angka); // Pastikan angka dalam format integer

        $satuan = array(
            "", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan"
        );

        if ($angka < 1 || $angka > 9) {
            return "Angka tidak valid";
        } else {
            return $satuan[$angka];
        }
    }

    // Contoh penggunaan
    $angka = 5; // Ubah angka yang ingin dikonversi di sini
    $terbilang = terbilang($angka);

    echo "Angka $angka terbilang: " . $terbilang;
    ?>
</body>
</html>