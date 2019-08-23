<html>
<head>
    <title>Form Pendaftaran</title>
</head>
<body>
    <FORM ACTION = "" METHOD = "POST" NAME = "Input">
        <h2>FORMULIR PENDAFTARAN</h2>
        NO :            <br><input type = "number" name = "no"><br><br>
        NISN :          <br><input type = "number" name = "nisn"><br><br>
        NAMA LENGKAP :  <br><input type = "text"   name = "nama"><br><br>
        ALAMAT :        <br><textarea name="alamat" cols="20" rows="3"></textarea><br><br>
        TEMPAT LAHIR :  <br><input type = "text"   name = "tempat"><br><br>
        TANGGAL LAHIR : <br><input type = "date"   name = "tanggal"><br><br>
        ASAL SEKOLAH :  <br><input type = "text"   name = "asal"><br><br>
        JENIS KELAMIN : 
            <input type="radio" name="jk" value="Laki-Laki" />Laki - Laki
            <input type="radio" name="jk" value="Perempuan" />Perempuan<br><br>
        AGAMA : 
            <select name="agama">
                <option>Agama</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Katolik</option>
            </select><br><br>
        JURUSAN : 
            <select name="jurusan">
                <option>Jurusan</option>
                <option>RPL</option>
                <option>TSM</option>
                <option>TKR</option>
            </select><br><br>
        HOBI : 
            <input type="checkbox" name="hobi1" value="Renang">Renang
            <input type="checkbox" name="hobi2" value="Maen PS">Maen PS
            <input type="checkbox" name="hobi3" value="Futsal">Futsal
            <input type="checkbox" name="hobi4" value="Maen ML">Maen ML
            <input type="checkbox" name="hobi5" value="Running">Running<br><br>
        NAMA AYAH : <br><input type = "text" name = "na"><br><br>
        PEKERJAAN : <br><input type = "text" name = "pa"><br><br>
        NAMA IBU : <br><input type = "text" name = "nb"><br><br>
        PEKERJAAN : <br><input type = "text" name = "pi"><br><br>

        <input type="submit"   name="Proses"  value="Proses">
        <input type="reset"   name="Reset"  value="Reset">
    </FORM>
</body>
</html>