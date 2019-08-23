<html>
<head>
    <title>Bintang Piramid</title>
</head>
<body>
    <table border="0" style="center">
        <FORM ACTION="" METHOD="POST" NAME="Input"><br>
            <tr>
                <td>MASUKKAN INPUTAN</td>
                <td>:</td>
                <td><input type = "number" name = "bin"></td>
            </tr>
            <tr>
                <td><input type="submit"   name="Proses"  value="Proses"></td>
            </tr>
        </FORM>
    </table>
</body>
</html>

<?php

    if (isset($_POST['Proses'])) {
        $bin = $_POST['bin'];

    for ($a = 1; $a <= $bin; $a++) { 
        for ($b = 1; $b <= $a; $b++) { 
            echo "*";      
        }
        echo "<br>";
    }
}
?>