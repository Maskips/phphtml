<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM KELILING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
    <legend>
        Luas Keliling
    </legend>
        <FORM ACTION="" METHOD="GET">
            <label for="">KELILING</label>
            <input type="number" min="1" name="jari" required>
            <br>
            <input type="submit" name="simpan" value="SIMPAN">
        </FORM>
</fieldset>

<?php
    if (isset($_GET['simpan'])) {
        $keliling = $_GET['jari'];

        function luas_keliling($jari) {
            $luas = 2 * 3.14 * $jari;
            return $luas;
        }
        $keliling = luas_keliling($keliling);
        echo "Luas Keliling : $keliling";
    }
?>

</body>
</html>