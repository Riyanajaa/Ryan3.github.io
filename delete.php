<?php
include 'koneksi.php';

$ID   = $_GET['ID'];

$core="DELETE FROM perpususah WHERE ID='$ID'";
mysqli_query($koneksi, $core);

header("location:core.php");
?>