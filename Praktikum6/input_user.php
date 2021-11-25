<?php
// Panggil koneksi.php untuk proses penyimpanan data ke database
include "../Praktikum3/koneksi.php";
// ambil data yg diketikkan oleh user berupa id, password, nama, email
$id_user = $_POST['id_user'];
$pass = md5($_POST['password']);
$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
// masukkan data tersebut ke tabel users
$sql = "INSERT INTO users(id_user,password, nama_lengkap, email) VALUES ('$id_user', '$pass','$nama','$email')";
// simpan sebagai query msyqli
$query = mysqli_query($con, $sql);
// tutup proses query
mysqli_close($con);
// tampilkan tampil_user.php saat proses tambah data selesai.
header('location:tampil_user.php');
