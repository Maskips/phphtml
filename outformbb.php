<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $bb   = $_POST['bb'];
        $tb   = $_POST['tb'];

        function tni ($bb , $tb) {
            if ($bb > 60 && $tb >165 || $bb > 50) {

            }
            return $nm;
        }

        $nama = nama_tni($nm);
        echo "Nama : $nama <br>";
        $br = berat_tni($bn);
        echo "Berat Badan : $bb <br>";
        $ti = tinggi_tni($tn);
        echo "Tinggi Badan : $tb <br>";

        if (($ti > 165) && ($br > 60)) {
            $status = "<b>Diterima</b>";
        } else {
            $status = "<b>Tidak Diterima</b>";
        } 
        echo "$status";
    }
?>

