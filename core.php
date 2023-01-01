<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">Home</a>
        <a href="buku.html">Daftar buku</a>
        <a href="core.php">Spesifikasi</a>
    </div>
    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
      </div>
      <div id="artikel">
      <article class="kotakkiri">
    <h1>Menampilkan List Daftar buku</h1>
    <a href="forminput.php">Input Data Baru</a><br>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Buku</th>
            <th>Pengarang</th>
            <th>Tahun_Terbit</th>
            <th>Opsi</th>
           
        </tr>

        <?php

        $core = "SELECT * FROM perpususah";
        $hasil = mysqli_query($koneksi, $core);

        while($data = mysqli_fetch_array($hasil)){
            ?>
            <tr>
            <td><?php echo $data['ID']; ?></td>
            <td><?php echo $data['Buku']; ?></td>
            <td><?php echo $data['Pengarang']; ?></td>
            <td><?php echo $data['Tahun_Terbit']; ?></td>
            <td>
			<a class="edit" href="edit.php?ID=<?php echo $data['ID']; ?>">[Edit]</a> |
			<a class="hapus" href="delete.php?ID=<?php echo $data['ID']; ?>">[Hapus]</a>				
		</td>
            </tr>
            <?php
        }
        
    ?>
    </div>
    </table>
    <script src="slidenav.js"></script>
    </article>
    
      
      
</body>
</html>