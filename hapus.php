<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama file foto dulu
    $sql_foto = mysqli_query($conn, "SELECT foto FROM mahasiswa WHERE id='$id'");
    $data = mysqli_fetch_array($sql_foto);
    
    if(!empty($data['foto']) && file_exists("uploads/".$data['foto'])) {
        unlink("uploads/".$data['foto']);
    }

    // Hapus data dari database
    $query_hapus = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");

    if($query_hapus) {
        header("location:index.php?pesan=hapus_berhasil");
    } else {
        echo "Gagal menghapus: " . mysqli_error($conn);
    }
}
?>