<?php
session_start();
if (isset($_SESSION['Login'])) {
    unset($_SESSION);
    session_destroy();
    header("location:tugaslogin.php");
}
echo "<h2>Anda Berhasil Log-out :)</h2>";
?>
<nav>
    <a href="tugaslogin.php">Login Kembali</a>
</nav>