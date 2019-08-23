<html>
<head>
    <title>Form Pendaftaran</title>
</head>
<body>
    <table border="0" style="center">
        <FORM ACTION = "ptugas02.php" METHOD = "POST" NAME = "Input">
            <h2>FORMULIR PENDAFTARAN</h2>
            <tr>
                <td>NO</td>
                <td>:</td>
                <td><input type = "number" name = "no"></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><input type = "number" name = "nisn"></td>
            </tr>
            <tr>
                <td>NAMA LENGKAP</td>
                <td>:</td>
                <td><input type = "text"   name = "nama"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type = "text"   name = "alamat"></td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td><input type = "text"   name = "tempat"></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td><input type = "date"   name = "tanggal"></td>
            </tr>
            <tr>
                <td>ASAL SEKOLAH</td>
                <td>:</td>
                <td><input type = "text"   name = "asal"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-Laki" />Laki - Laki</td>
                <td><input type="radio" name="jk" value="Perempuan" />Perempuan</td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td><select name="agama">
                    <option>Agama</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Katolik</option>
                </select></td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>:</td>
                <td><select name="jurusan">
                    <option>Jurusan</option>
                    <option>RPL</option>
                    <option>TSM</option>
                    <option>TKR</option>
                    </select></td>
            </tr>
            <tr>
                <td>HOBI</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi1" value="Renang">Renang
                    <input type="checkbox" name="hobi2" value="Maen PS">Maen PS
                    <input type="checkbox" name="hobi3" value="Futsal">Futsal
                    <input type="checkbox" name="hobi4" value="Maen ML">Maen ML
                    <input type="checkbox" name="hobi5" value="Running">Running
                </td>
            </tr>
            <tr>
                <td>NAMA AYAH</td>
                <td>:</td>
                <td><input type = "text"   name = "na"></td>
            </tr>
            <tr>
                <td>PEKERJAAN</td>
                <td>:</td>
                <td><input type = "text"   name = "pa"></td>
            </tr>
            <tr>
                <td>NAMA IBU</td>
                <td>:</td>
                <td><input type = "text"   name = "ni"></td>
            </tr>
            <tr>
                <td>PEKERJAAN</td>
                <td>:</td>
                <td><input type = "text"   name = "pi"></td>
            </tr>
            <tr>
                <td><input type="submit"   name="Proses"  value="Proses"></td>
                <td><input type="reset"   name="Reset"  value="Reset"></td>
            </tr>
        </FORM>
    </table>
</body>
</html>