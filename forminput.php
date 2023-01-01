<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampikan buku</title>
</head>
<body>
    <h2>Masukkan Data Buku</h2>
    <form method="post" action="simpan.php">
        
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
            <tr>
            <td><a href='edit.php?ID=$row[ID]'>Edit</a>
                <a href='delete.php?ID=$row[ID]'>Delete</a>
            </td>
            </tr>
        </table>
    </form>

</body>
</html>