<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemakaian fungsi UDF : Tanpa Nilai Balik</title>
</head>

<body>
    <?php
    function psgpjg($pjg, $lbr)
    {
        $luas = $pjg * $lbr;
        echo "$luas <br>";
    }
    $bil1 = 5;
    $bil2 = 3;
    echo "Luas persegi panjang dengan pjg 5 dan lebar 3 = ";
    psgpjg($bil1, $bil2);

    ?>
</body>

</html>