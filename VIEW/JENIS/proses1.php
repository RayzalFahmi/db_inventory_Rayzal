<?php
$id = $_GET['id_jenis'];
$id_jenis =$_GET['id_jenis'];
$nama_jenis=$_POST['nama_jenis'];
$id_barang=$_POST['id_barang'];

include '../../CONFIG/koneksi.php';

$query=mysqli_query($conn, "UPDATE jenis SET
id_jenis='$id_jenis',
nama_jenis='$nama_jenis',
id_barang='$id_barang'
WHERE id_jenis='$id'");

if($query){
    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal diedit')</script>";
   echo "<script>window.location.href='index.php'</script>";

}


