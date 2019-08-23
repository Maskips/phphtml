<?php

    if (isset($_POST['Proses'])) {
        $saran = nl2br($_POST['saran']);
        echo "Kritik / Saran : <br>";
        echo "<b><font color='blue'>$saran</font></b>";
    }

?>