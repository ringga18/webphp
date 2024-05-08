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

    //data kelas dengan array 2 dimensi
    $array = array(
        "1C" =>array("Budi", "Rudi", "Dedi"),
        "1D" =>array("Lina", "Sari", "Dewi")
    );
    //menampilkan data array
    print_r($array);
    //menampilkan kelas 1C
    print_r($array['1C']);
    //menampilkan kelas 1D dengan index 0
    echo $array['1D'][0];
    //tampilkan Sari
    echo $array['1D'][1];
    //tampilkan Dedi
    echo $array['1C'][2];
    
    //data kelas bisa ditulis juga dengan
    $array_simple = [
        "1C" =>["Budi", "Rudi", "Dedi"],
        "1D" =>["Lina", "Sari", "Dewi"]
    ];

    ?>
</body>
</html>
