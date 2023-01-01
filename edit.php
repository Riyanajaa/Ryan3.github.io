<!DOCTYPE html>
<html>
<head>
	<title>UAS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<div class="judul">		
		<h3>Update Data Buku</h3>
	</div>
	
	<br/>
	
	<a href="core.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	?>
	<form action="update.php" method="post">		
    <table border="2" class="table" align="center">
            <tr>
                <td>ID : </td>
                <td><input type="text" name="ID"></td>
            </tr>

            <tr>
                <td>Buku : </td>
                <td><input type="text" name="Buku"></td>
                </td>
            </tr>

            <tr>
                <td>Pengarang : </td>
                
                <td><input type="text" name="Pengarang"></td>
                
            </tr>

            <tr>
                <td>Tahun_Terbit : </td>
                <td><input type="text" name="Tahun_Terbit"></td>
            </tr>

            <tr>
                <td align="center" colspan="2">
                    <button type="submit" value="simpan">Submit</button>
                </td>
            </tr>
        </table>
	</form>
	<?php  ?>
</body>
</html>



