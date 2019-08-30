<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM FUNCTION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
    <legend>
        Luas Persegi
    </legend>
        <FORM ACTION="" METHOD="GET">
            <label for="">SISI</label>
            <input type="number" min="1" name="s" required>
            <br>
            <input type="submit" name="simpan" value="SIMPAN">
        </FORM>
</fieldset>

<?php
    if (isset($_GET['simpan'])) {
        $sisi = $_GET['s'];

        function luas_persegi($s) {
            $luas = $s * $s;
            return $luas;
        }
        $luas = luas_persegi($sisi);
        echo "Luas Persegi : $luas";
    }
?>

</body>
</html>