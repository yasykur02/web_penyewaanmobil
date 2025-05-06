<?php
include "koneksi.php";

$sql = "SELECT * FROM mobil"; 
$query = mysqli_query($koneksi,$sql);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1> History Penyewaan</h1>
    <div class="table-container">
<table class="table"> 
    <tr> 
    <th>No</th> 
    <th>id_pelanggan</th> 
    <th>id_mobil</th> 
    <th>tanggal_sewa</th> 
    <th>tanggal_kembali</th>
    <th>total_harga</th> 
    <th>Aksi</th>
    </tr> 

<?php while($penyewaan = mysqli_fetch_assoc($query)) {?>
    <td><?= $penyewaan['id_penyewaan'] ?></td> 
    <td><?= $penyewaan['id_pelanggan'] ?></td> 
    <td><?= $penyewaan['id_mobil'] ?></td> 
    <td><?= $penyewaan['tanggal_sewa'] ?></td>
    <td><?= $penyewaan['tanggal_kembali'] ?></td>
    <td><?= $penyewaan['total_harga'] ?></td>   
    <td> 
        <a href="edit.php?id_penyewaan=<?= $penyewaan['id_penyewaan'] ?>">Edit</a> 
        <a href="hapus.php?id_penyewaan=<?= $penyewaan['id_penyewaan'] ?>">Hapus</a> 
    </td>  
<?php } ?>
</table>
</div> <br> <br>

<table border="1">
<tr> 
    <th>No</th> 
    <th>id_pelanggan</th> 
    <th>id_mobil</th> 
    <th>tanggal_sewa</th> 
    <th>tanggal_kembali</th>
    <th>total_harga</th> 
    <th>Aksi</th>
    </tr> 
</table>
</body>
</html>