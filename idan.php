<html><body>
<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nama: <input type="text" name="nama"><br>
NIM: <input type="text" name="NIM"><br>
<input type="submit">
</form>
<?php
if(empty($nama) && empty($NIM) ){
echo "Nama dan Nim tidak boleh kosong!!";
}
else if (!is_numeric($_POST["NIM"])){
	echo "NIM HARUS ANGKA";
}
else if(strlen($_POST["NIM"])!=10){
	echo "NIM HARUS berjumlah 10 angka";
}
else if(!empty($nama) && !empty($NIM) ){
echo "<h2>Selamat Datang</h2>";
echo $nama . "<br>" . $NIM;
}

?>
</body></html>