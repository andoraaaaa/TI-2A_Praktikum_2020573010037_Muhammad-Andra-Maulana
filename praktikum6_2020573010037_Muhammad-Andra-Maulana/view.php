<?php
    $conn= mysqli_connect("localhost", "root", "", "db_saya");
    $hasil= mysqli_query($conn, "select * from bukutamu");
    $jumlah = mysqli_num_rows($hasil);
    echo "<center> Daftar Pengunjung </center>";
    echo "Jumlah Pengunjung : $jumlah";
    $a=1;
    while($baris= mysqli_fetch_array($hasil))
    {
        echo "<br>";
        echo $a;
        echo "<br>";
        echo "Nama : ";
        echo "<br>";
        echo $baris[0];
        echo "<br>";
        echo "Email : ";
        echo "<br>";
        echo "Komentar : ";
        echo $baris[2];
        $a++;
    }


?>