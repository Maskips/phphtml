<html>
<head>
    <title>FORM KUITANSI</title>
</head>
<body>
<FORM ACTION = "kwitansiout.php" METHOD = "POST" NAME = "input">
<table align="center">
    <td>
        <h2>Form Kuitansi</h2>
    </td>
    <tr>
        <td><b>Nama</b></td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>  
    </tr><br><br>
    <tr>
        <td><br><b>Alamat</b></td>
    </tr>
    <tr>
        <td>- Jalan</td>
        <td>:</td>
        <td><input type="text" name="jalan"></td>    
    </tr>
    <tr>
        <td>- Kecamatan</td>
        <td>:</td>
        <td><input type="text" name="kecamatan"></td>    
    </tr>
    <tr>
        <td>- Provinsi</td>
        <td>:</td>
        <td><input type="text" name="provinsi"></td>    
    </tr>
    <tr>
        <td>- Kode Pos</td>
        <td>:</td>
        <td><input type="number" name="kopos"></td>    
    </tr>
    <tr>
        <td><br><b>Nama Barang</b></td>
        <td><br>:</td>
        <td><br><input type="text" name="nbarang"></td>
    </tr>
    <tr>
        <td><b>Harga Per Barang</b></td>
        <td>:</td>
        <td><input type="number" name="hbarang"></td>
    </tr>
    <tr>
        <td><b>Jumlah Barang</b></td>
        <td>:</td>
        <td><input type="number" name="jbarang"></td>
    </tr>
    <tr>
        <td><b>Deskripsi</b></td>
        <td>:</td>
        <td><textarea name="desk" cols="21" rows="5"></textarea></td>
    </tr>
    <tr>
        <td><b>Tanggal Beli</b></td>
        <td>:</td>
        <td><input type="date" name="tgl"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
</table>
</body>
</html>

