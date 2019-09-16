<?php
if(isset($_POST['submit']))
{
 $nama = $_POST['name'];
 $alamat = $_POST['alamat'];
 $email = $_POST['email'];
 echo "Halo : ". $_POST['name']. "<br />";
 echo "Alamat Saya : ". $_POST["alamat"]. "<br />";
 echo "Email : ". $_POST['email']. "<br />";
}
?>