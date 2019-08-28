<?php 

    if (isset($_POST['submit'])) {
        $nama      = $_POST['nama'];
        $jalan     = $_POST['jalan'];
        $kecamatan = $_POST['kecamatan'];
        $provinsi  = $_POST['provinsi'];
        $kopos     = $_POST['kopos'];
        $nbarang   = $_POST['nbarang'];
        $hbarang   = $_POST['hbarang'];
        $jbarang   = $_POST['jbarang'];
        $bayar     = $hbarang*$jbarang;
        echo "* Total Harga Barang : $bayar <br>";

        if ($jbarang > 10) {
            $diskon = $bayar*0.2;
            echo "* Total Bayar + Diskon : Rp. $diskon <br><br>";
        }
        else if ($jbarang > 5) {
            $diskon = $bayar*0.1;
            echo "* Total Bayar + Diskon : Rp. $diskon <br><br>";
        } 
        else if ($jbarang < 0) {
            echo "* Pesanan Tidak Dapat Diproses";
        }
        
        $desk      = $_POST['desk'];
        $tgl       = $_POST['tgl'];
        $tgl       = date('d-m-Y', strtotime($tgl));

        echo "<b>Nama :</b> $nama <br>";
        echo "<b>Alamat </b><br>";
        echo "- Jalan : $jalan <br>";
        echo "- Kecamatan : $kecamatan <br>";
        echo "- Provinsi : $provinsi <br>";
        echo "- Kode Pos : $kopos <br>";
        echo "<b>Nama Barang :</b> $nbarang <br>";
        echo "<b>Harga Per Barang :</b> $hbarang <br>";
        echo "<b>Jumlah Barang :</b> $jbarang <br>";
        echo "<b>Deskripsi :</b> $desk <br>";
        echo "<b>Tanggal Beli :</b> $tgl <br>";
        echo "<br><br>";

    }
?>