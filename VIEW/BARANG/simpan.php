<?php 
include '../../config/koneksi.php';
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$bentuk_barang = $_POST['bentuk_barang'];

$query = mysqli_query($conn,"INSERT INTO barang VALUES('$id_barang','$nama_barang','$bentuk_barang')
");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>