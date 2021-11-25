<?php
// panggil koneksi.php untuk mengambil data dari mysql
include "../Praktikum3/koneksi.php";
// request GET data berdasarkan id dari tabel users
$sql = "delete from users where id_user= '$_GET[id]'";
// panggil proses query
mysqli_query($con, $sql);
// tutup proses query
mysqli_close($conn);
header('location:tampil_user.php');
