<?php
echo
// Buat Tabel form untuk menambahkan data user yang masuk ke database.
"<h2>User</h2>
    <form method=POST action=form_user.php>
        <input type=submit value='Tambah User'>
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>NamaLengkap</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>";
// panggil koneksi.php untuk mengambil data dari mysql
include "../Praktikum3/koneksi.php";
// ambil semua data dari tabel user berdasarkan id
$sql = "select * from users order by id_user";
// panggil proses query
$tampil = mysqli_query($con, $sql);
// tampilkan data berdasarkan baris jika lebih dari 0 maka tampilkan data
if (mysqli_num_rows($tampil) > 0) {
    $no = 1;
    // panggil fungsi perulangan while dan ubah data menjadi array
    while ($r = mysqli_fetch_array($tampil)) {
        echo
        // buat tabel untuk menampilkan data dari tabel users
        "<tr>
                <td>$no</td>
                <td>$r[id_user]</td>
                <td>$r[nama_lengkap]</td>
                <td>$r[email]</td>
                <td>
                    <a href='hapus_user.php?id=$r[id_user]'>Hapus</a>
                </td>
            </tr>";
        $no++;
    }
    echo "</table>";
} else {
    echo "0 results";
}
// tutup proses msyqli
mysqli_close($con);
