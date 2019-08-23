<?php

    if (isset($_POST['Pilih'])) {
        $kartun = $_POST['kartun'];
        echo "Film Kartun Favorit : 
             <b><font color='blue'>$kartun</font></b>";
    }

?>