<?php

//include koneksi database
require "../koneksi.php";

//get data dari form
$icon           = $_POST['icon'];
$path1          = $_POST['path1'];
$path2          = $_POST['path2'];
$path3          = $_POST['path3'];
$icon_name      = $_POST['icon_name'];
$icon_url       = $_POST['icon_url'];
$icon_file       = $_POST['icon_file'];
$icon_level     = $_POST['icon_level'];
$is_active      = $_POST['is_active'];

//query insert data ke dalam database
$query = "INSERT INTO `sidebar` (`id`, `icon`, `path1`, `path2`, `path3`, `icon_name`, `icon_url`, `icon_file`, `icon_level`, `is_active`) VALUES (NULL, '$icon', '$path1', '$path2', '$path3', '$icon_name', '$icon_url', '$icon_file', '$icon_level', '$is_active')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../../panel.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>