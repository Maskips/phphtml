<html>
    <head>
        <title>PENGOLAHAN FORM</title>
    </head>
    <body>
        <FORM ACTION = "" METHOD = "POST" NAME = "input">
            Nama Anda : <input type = "text" name = "nama"><br>
            <input type = "submit" name = "Simpan" value = "Simpan">
            <input type = "reset" name = "Reset" value = "Reset">
        </FORM>
    </body>
</html>

<?php

    if (isset($_POST['Simpan'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
    }
    
?>