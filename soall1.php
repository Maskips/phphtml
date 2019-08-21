<html>
    <head>
        <title>SOAL PERTAMA</title>
    </head>
    <body>
        <FORM ACTION = "" METHOD = "POST" NAME = "input">
            Nama Anda : <input type = "text" name = "nama"><br>
            Nilai ke-1 : <input type = "text" name = "nilai1"><br>
            Nilai ke-2 : <input type = "text" name = "nilai2"><br>
            <input type = "submit" name = "Input" value = "Input">
        </FORM>
    </body>
</html>


<?php

if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $rataa = $nilai1 + $nilai2 / 2;

    echo "Nama Anda : <b>$nama</b><br>";
    echo "Nilai ke-1 : <b>$nilai1</b><br>";
    echo "Nilai ke-2 : <b>$nilai2</b><br>";
    echo "Nilai rata-rata : <b>$rataa</b>";
}

?>