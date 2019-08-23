<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <FORM ACTION = "ptugas01.php" METHOD = "POST" NAME = "input">
        <h2>Register Disini..</h2>
        Nama : <input type = "text" name = "nama"><br>
        Alamat : <input type = "text" name = "alamat"><br>        
        Jenis Kelamin : 
            <input type="radio" name="jk" value="Laki-Laki" /> 
            Laki - Laki
            <input type="radio" name="jk" value="Perempuan" /> 
            Perempuan<br/> 
        Agama : <input type = "text" name = "agama"><br>
        E-mail : <input type = "text" name = "email"><br>
        Password : <input type = "password" name = "password"><br><br>
        <input type = "submit" name = "Login" value = "Login">
        <input type = "reset" name = "Reset" value = "Reset">
    </FORM>
</body>
</html>