<?php

    if (isset($_POST['Proses'])) {
        $no      = $_POST['no'];
        $nisn    = $_POST['nisn'];
        $nama    = $_POST['nama'];
        $alamat  = $_POST['alamat'];
        $tempat  = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $asal    = $_POST['asal'];
        $jk      = $_POST['jk'];
        $agama   = $_POST['agama'];
        $jurusan = $_POST['jurusan'];
        $ayah    = $_POST['na'];
        $pa      = $_POST['pa'];
        $ibu     = $_POST['ni'];
        $pi      = $_POST['pi'];
        $a       = "Status";


        echo "<h2><b> Formulir Pendaftaran</b></h2>";
        echo "NO            : <b>$no</b><br>";
        echo "NISN          : <b>$nisn</b><br>";
        echo "NAMA          : <b>$nama</b><br>";
        echo "ALAMAT        : <b>$alamat</b><br>";
        echo "TEMPAT LAHIR  : <b>$tempat</b><br>";
        echo "TANGGAL LAHIR : <b>$tanggal</b><br>";
        echo "ASAL SEKOLAH  : <b>$asal</b><br>";
        echo "JENIS KELAMIN : <b>$jk</b><br>";
        echo "AGAMA         : <b>$agama</b><br>";
        echo "JURUSAN       : <b>$jurusan</b><br>";
        echo "HOBI          : ";
        if (isset($_POST['hobi1'])) {
            echo "<b>" .$_POST['hobi1']."</b><br>";
            }
        if (isset($_POST['hobi2'])) {
            echo "<b>" .$_POST['hobi2']."</b><br>";
            }
        if (isset($_POST['hobi3'])) {
            echo "<b>" .$_POST['hobi3']."</b><br>";
            }
        if (isset($_POST['hobi4'])) {
            echo "<b>" .$_POST['hobi4']."</b><br>";
            }
        if (isset($_POST['hobi5'])) {
            echo "<b>" .$_POST['hobi5']."</b><br>";
            }
        echo "NAMA AYAH     : <b>$ayah</b><br>";
        echo "PEKERJAAN     : <b>$pa</b><br>";
        echo "NAMA IBU      : <b>$ibu</b><br>";
        echo "PEKERJAAN     : <b>$pi</b><br>";

    if ($agama == "Islam" && $jk == "Laki-Laki") {
        echo "$a : <b>Berhasil Daftar</b>";
    } 
    else {
        echo "$a : <b>Gagal Daftar</b>";
        }
    }

?>