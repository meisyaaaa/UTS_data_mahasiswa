<?php 
include 'koneksi.php';
$id = ""; $nim = ""; $nama_lengkap = ""; $jurusan = ""; $foto = "";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
    $data = mysqli_fetch_array($sql);
    $nim = $data['nim'];
    $nama_lengkap = $data['nama_lengkap'];
    $jurusan = $data['jurusan'];
    $foto = $data['foto'];
}
?>
<form action="simpan.php" method="POST" enctype="multipart/form-data" id="mhsForm">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <p>NIM:<br><input type="text" name="nim" value="<?php echo $nim; ?>" required></p>
    
    <p>Nama Lengkap:<br><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" required></p>
    
    <p>Jurusan:<br><input type="text" name="jurusan" value="<?php echo $jurusan; ?>" required></p>
    <p>Foto:<br><input type="file" name="foto" id="foto"></p>
    <button type="submit" class="btn btn-add">Simpan Data</button>
</form>