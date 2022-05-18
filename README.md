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
