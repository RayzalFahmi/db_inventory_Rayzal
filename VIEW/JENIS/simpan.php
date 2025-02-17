<?php 
include '../../config/koneksi.php';
$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];
$id_barang = $_POST['id_barang'];

$query = mysqli_query($conn,"INSERT INTO jenis VALUES('$id_jenis','$nama_jenis','$id_barang')
");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>