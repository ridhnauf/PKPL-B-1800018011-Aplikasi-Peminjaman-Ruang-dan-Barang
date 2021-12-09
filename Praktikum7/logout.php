<?php
// mulai session agar dapat memperoleh informasi data user
session_start();
// hapus session agar informasi data user hilang
session_destroy();
echo "Anda telah sukses keluar sistem <b>LOGOUT</b>";
