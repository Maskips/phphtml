<?php

session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    
    if ($a == "kipli" && $b == "123") {
        
        $_SESSION['login'] = $a;
        
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='tugas_array.php'>Disini</a>
              untuk menuju ke Form Array";
    } else {
        die("Username Atau Password Anda Salah 
        Silahkan <a href=tugaslogin.php> Login </a> Kembali");
    }
} else {
    ?>

    <html>
    <head>
        <title>Halaman Log-in</title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Login Dulu Oke :/</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
        </form>
    </body>
    </html>
<?php
}
?>