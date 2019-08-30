<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM LINGKARAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
    <legend>
        Luas Lingkaran
    </legend>
        <FORM ACTION="" METHOD="GET">
            <label for="">JARI-JARI</label>
            <input type="number" min="1" name="bulat" required>
            <br>
            <input type="submit" name="simpan" value="SIMPAN">
        </FORM>
</fieldset>

<?php
    if (isset($_GET['simpan'])) {
        $lingkaran = $_GET['bulat'];

        function luas_lingkaran($bulat) {
            $luas = 3.14 * $bulat * $bulat;
            return $luas;
        }
        $lingkaran = luas_lingkaran($lingkaran);
        echo "Luas Lingkaran : $lingkaran";
    }
?>

</body>
</html>