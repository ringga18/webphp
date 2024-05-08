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

$gajiPokok = 3250000;
$tunjangan = 1200000;
$pajak = 0.1;
$gajiKotor = $gajiPokok + $tunjangan; //gaji sebelum kena pajak
$pajakGaji = $gajiKotor * $pajak; //pajak
$gajiBersih = $gajiKotor - $pajakGaji; //gaji setelah kena pajak

echo "Setiap bulan, Gaji pokok yang diterima Obi sebesar $gajiPokok, 
tunjangan jabatan sebesar $tunjangan dan pajaknya penghasilan sebesar $pajak%, 
total gaji Obi sebelum terkena pajak adalah $gajiKotor, 
sedangkan potongan pajak Obi adalah sebesar $pajakGaji, 
jadi gaji bersih yang diterima Obi adalah $gajiBersih.";

?>
</body>

</html>