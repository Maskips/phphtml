<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
    
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <nav>
            <a href="sessionform01.php">Halaman 1</a> |
            <a href="sessionform02.php">Halaman 2</a> |
            <a href="sessionform03.php">Halaman 3</a> |
            <a href="sessionformlogout.php" onclick="myFunction()">Logout</a> |
        </nav>
        <center>Halaman 3</center>
        <fieldset>
            <legend>Latihan 1</legend>
            <pre>
                <form action="" method="post">
                    <label for="">Nama</label>    
                    <input type="text" name="nama">
                    <br>
                    <input type="submit" name="sbm" value="Simpan">
                </form>
            </pre>
            <?php if (isset($_POST['sbm'])) {
                    $a = $_POST['nama'];
                    echo "Nama Saya: $a";
                } ?>
        </fieldset>
    </body>
</html>

<?php } else {
    header("location: sessionformlogin.php");
    // die("Silahkan Login Terlebih dahuli");
}
?>