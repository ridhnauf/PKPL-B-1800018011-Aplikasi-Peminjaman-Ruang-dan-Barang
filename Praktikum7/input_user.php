<?php
// Panggil koneksi.php untuk proses penyimpanan data ke database
include "../Praktikum3/koneksi.php";
// ambil data yg diketikkan oleh user berupa id, password, nama, email
$id_user = $_POST['id_user'];
$pass = md5($_POST['password']);
$nim = $_POST['nim'];
$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
// masukkan data tersebut ke tabel users
$sql = "INSERT INTO users(id_user,password,nim,nama_lengkap,email) VALUES ('$id_user','$pass','$nim','$nama','$email')";
// simpan sebagai query msyqli
$query = mysqli_query($con, $sql);
// var_dump($query);
// tutup proses query
mysqli_close($con);
// tampilkan tampil_user.php saat proses tambah data selesai.
header('location:tampil_user.php');
