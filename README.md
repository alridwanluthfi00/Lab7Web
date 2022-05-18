# Lab7Web
## Nama     : Luthfi Al Ridwan
## NIM      : 312010112
## Kelas    : TI.20.A.1
## Matkul   : Pemrograman Web

# Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)
----------
![1 - Mulai PHP](https://user-images.githubusercontent.com/73066008/169034314-76527a76-0aa3-4771-8c2a-5f0b049c72f3.png)
----------
# PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut.

    <!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8">
     <title>PHP Dasar</title>
    </head>
    <body>
     <h1>Belajar PHP Dasar</h1>
     <?php
     echo "Hello World";
     ?>
    </body>
    </html>

# Variable PHP
Menambahkan variable pada program.

     <h1>Menggunakan Variable</h1>
     <?php
    $nim = "312010112";
    $nama = 'Luthfi Al Ridwan';
    $kelas = 'TI.20.A.1';
    $matkul = 'Pemrograman Web';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama. "<br>";
    echo "Kelas : " . $kelas. "<br>";
    echo "Matkul : $matkul";
    ?>

![2 - Belajar PHP Dasar](https://user-images.githubusercontent.com/73066008/169035921-460c2c37-9fd8-4470-a49e-cfffc182cd67.png)

# Membuat Form Input

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

![3 - Contoh Form Input 1](https://user-images.githubusercontent.com/73066008/169037742-850a5629-aa7d-4c7f-a4ac-1b650da7d281.png)
----------
![4 - Contoh Form Input 2](https://user-images.githubusercontent.com/73066008/169037764-2b58c3b5-6b80-4aa4-99de-758e448a7a39.png)
