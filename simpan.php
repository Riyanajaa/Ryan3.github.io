<?php
include 'koneksi.php';

$ID = $_POST['ID'];
$Buku = $_POST['Buku'];
$Pengarang = $_POST['Pengarang'];
$Tahun_Terbit = $_POST['Tahun_Terbit'];

if($ID==""){
    echo "<script> alert('ID belum diisi'); history.go(-1);</script>";
}


else{
    $core = "INSERT INTO perpususah SET ID='$ID', Buku='$Buku', Pengarang='$Pengarang', Tahun_Terbit='$Tahun_Terbit'";
    mysqli_query($koneksi, $core);

    echo "<script>alert ('Data yang anda input sukses'); window.location='core.php'</script>";
}
?>