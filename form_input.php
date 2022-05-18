<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
 <label>Nama: </label>
 <input type="text" name="nama">
 <label>Tanggal Lahir: </label>
 <input type="date" name="tgllahir">
 <label>Pekerjaan: </label>
 <select name=pekerjaan>
 <?php
 $daftar_pekerjaan = [
     "Guru"=>2500000, "Karyawan"=>4000000, "Dokter"=>7000000
 ];
foreach($daftar_pekerjaan as $pekerjaan => $gaji){
    echo "<option>".$pekerjaan. "</option>";
} 
 ?>
 </select>    
 <input type="submit" value="Simpan" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    echo 'Selamat Datang ' . $_POST['nama']."<br>";
    $umur = floor((time() - strtotime($_POST['tgllahir']))/31556926)."<br>";
    echo "Umur : ". $umur;
    echo "Tanggal Lahir : ". $_POST['tgllahir']."<br>";
    echo "Pekerjaan : ". $_POST['pekerjaan']."<br>";
    echo "Gaji : Rp. ".$daftar_pekerjaan[$_POST['pekerjaan']];

    }
?>
</body>
</html>