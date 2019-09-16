<?php
/*********************************************************************************
Halaman ini merupakan contoh pemeriksaan session.
Pemeriksaan session biasanya dilakukan jika suatu halaman memiliki akses terbatas.
Misalnya harus login terlebih dahulu.
*********************************************************************************/

session_start();

//PEMERIKSAAN SESSION
if (isset ($_SESSION['Login'])) {
    //JIKA SUDAH LOGIN
    //MENAMPILKAN ISI SESSION
    echo "<h1>Selamat Datang ". $_SESSION['Login'] ."</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika anda sudah Login</h2>";
    echo "<h2>Klik <a href='session03.php'>Disini (session03.php)</a>UNTUK LOG-OUT</h2>";
} else {
    //SESSION BELUM ADA ARTINYA BELUM LOGIN
    die ("Anda Belum Login !. Anda Tidak Bisa Masuk Halaman Ini. Silakan Login Dahulu <a href='session01.php'>Disini</a>");
}
?>