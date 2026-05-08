<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <a href="form.php" class="btn btn-add">+ Tambah Mahasiswa</a>
        <table>
            <tr>
                <th>ID</th>
                <th>FOTO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
            </tr>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
            while($row = mysqli_fetch_array($query)){
                echo "<tr>
                    <td>".$row['id']."</td>
                    <td><img src='uploads/".$row['foto']."' width='50' height='50' style='object-fit:cover;'></td>
                    <td>".$row['nim']."</td>
                    <td>".$row['nama_lengkap']."</td> 
                    <td>".$row['jurusan']."</td>
                    <td>
                        <a href='form.php?id=".$row['id']."' class='btn btn-edit'>Edit</a>
                        <a href='hapus.php?id=".$row['id']."' class='btn btn-delete' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>