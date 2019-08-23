<?php

    if (isset($_POST['Login'])) {
        $namaa = $_POST['nama'];
        $almt = $_POST['alamat'];
        $jeka = $_POST['jk'];
        $agma = $_POST['agama'];
        $emaill = $_POST['email'];
        $pass= $_POST['password'];
        $a = "Status";

        echo "<h2><b> Form Register </b></h2>";
        echo "Nama : <b>$namaa</b><br>";
        echo "Alamat : <b>$almt</b><br>";
        echo "Jenis Kelamin : <b>$jeka</b><br>";
        echo "Agama : <b>$agma</b><br>";
        echo "E-mail : <b>$emaill</b><br>";
        

    if ($pass == "13" && $emaill == "akunabika3@gmail.com") {
        echo "$a : <b>Aktif</b>";
    } 
    else {
        echo "$a : <b>Tidak Aktif</b>";
        }
    }

?>