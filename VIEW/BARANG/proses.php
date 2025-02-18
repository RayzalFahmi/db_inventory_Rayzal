<?php
$id = $_GET['id_barang'];
$id_barang =$_GET['id_barang'];
$nama_barang=$_POST['nama_barang'];
$bentuk_barang=$_POST['bentuk_barang'];

include '../../CONFIG/koneksi.php';

$query=mysqli_query($conn, "UPDATE barang SET
id_barang='$id_barang',
nama_barang='$nama_barang',
bentuk_barang='$bentuk_barang'
WHERE id_barang='$id'");

if($query){
    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal diedit')</script>";
   echo "<script>window.location.href='index.php'</script>";

}


