<?php
// Memulai session
session_start();
// Ambil huruf alfa secara random dengan fungsi rand di dalam md5 agar proses captcha dapat terbaca
$random_alpha = md5(rand());
// ambil nilai alpha secara random dari 0 sampai 6 karakter
$captcha_code = substr($random_alpha, 0, 6);
// buat session agar web dapat mengenali user
$_SESSION["captcha_code"] = $captcha_code;
// buat gambar PNG pada captcha dengan ukuran 70x30 pixel
$target_layer = imagecreatetruecolor(70, 30);
// buat warna pada gambar png imagecreatetruecolor sesuai komposisi warna kode dibawah
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
// imagefill => berfungsi untuk mengisi background pada proses captcha
imagefill($target_layer, 0, 0, $captcha_background);
// buat warna tulisan pada captcha sesuai dengan komposisi warna pada kode dibawah
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
// gabungkan captcha kode dengan captcha text color untuk membuat gambar captcha
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");
// imagejpeg untuk mengubah kualitas gambar sesuai dengan target yaitu $target_layer
imagejpeg($target_layer);
