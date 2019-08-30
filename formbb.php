<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM DAFTAR </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
    <legend>
        DAFTAR
    </legend>
        <FORM ACTION="outformbb.php" METHOD="POST">
            <label for=""><b>Nama :</b></label>
                <input type="text" name="nama" required><br>
            <label for=""><b>Berat Badan :</b></label>
                <input type="number" name="bb" required><br>
            <label for=""><b>Tinggi Badan :</b></label>
                <input type="number" name="tb" required>
            <br>
            <input type="submit" name="simpan" value="SIMPAN">
        </FORM>
</fieldset>
</body>
</html>