<?php
include 'koneksi.php';

$id           = $_POST['id'];
$nim          = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap']; // Ambil dari name="nama_lengkap"
$jurusan      = $_POST['jurusan'];
$foto_name    = $_FILES['foto']['name'];

if($foto_name != "") {
    $ext = pathinfo($foto_name, PATHINFO_EXTENSION);
    $baru = uniqid() . "." . $ext;
    move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $baru);
    
    if($id != "") {
        $old = mysqli_query($conn, "SELECT foto FROM mahasiswa WHERE id='$id'");
        $d = mysqli_fetch_array($old);
        if(file_exists("uploads/".$d['foto'])) unlink("uploads/".$d['foto']);
    }
}

if($id == "") { 
    // Query Tambah
    mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama_lengkap, jurusan, foto) VALUES ('$nim', '$nama_lengkap', '$jurusan', '$baru')");
} else { 
    // Query Update
    if($foto_name != "") {
        mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama_lengkap='$nama_lengkap', jurusan='$jurusan', foto='$baru' WHERE id='$id'");
    } else {
        mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama_lengkap='$nama_lengkap', jurusan='$jurusan' WHERE id='$id'");
    }
}
header("location:index.php");
?>