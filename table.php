<?php
include 'core.php'
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>UAS</title>
</head>
<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">Home</a>
        <a href="buku.html">Daftar buku</a>
        <a href="table.php">Spesifikasi</a>
    </div>
    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu </span>
      </div>

    <div id="artikel">
        <article class="kotak">
            <h1>Menampilkan List Daftar Buku</h1>
            <a href="forminput.php">Input Data Baru</a><br>
        
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Opsi</th>   
                </tr>
                <?php
        
                $query = "SELECT * FROM perpususah";
                $hasil = mysqli_query($koneksi, $query);
        
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
            </table>
            <script src="slidenav.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <footer>
                Riyan Taufiq Hidayat
            </footer>
        
    </div>
      <script src="slidenav.js"></script>
</body>
</html>
