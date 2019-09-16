<?php 
/****************************************************************************************
Nama File : session01.php                                                               *
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama tanpa spasi di depan nya.
Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session.
***************************************************************************************/

session_start();

if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    //PERIKSA LOGIN
    if ($user == "rafli" && $pass = "123") {
        
        //MENCIPTAKAN SESSION
        $_SESSION['Login'] = $user;

        //MENUJU KE HALAMAN PEMERIKSAAN SESSION
        echo "<h1>ANDA BERHASIL LOGIN</h1>";
        echo "<h2>KLIK <a href='session02.php'> DI SINI (session02.php)</a>
        untuk menuju ke halaman pemeriksaan session";
    }else {
    //SESSION BELUM ADA ARTINYA BELUM LOGIN
    die ("Anda Belum Login !. Anda Tidak Bisa Masuk Halaman Ini. Silakan Login Dahulu <a href='session01.php'>Disini</a>");
}
} 
else {
?>
<html>
    <head>
        <title>LOGIN HERE :/</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>LOGIN HERE :/</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log-in">
        </form>
    </body>
</html>
<?php
}
?>