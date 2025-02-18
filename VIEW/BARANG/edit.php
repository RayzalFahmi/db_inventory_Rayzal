<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../BARANG/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../JENIS/index.php">Jenis</a>
        </li>
        
</nav>
<div class="container">
    <h1>Edit Barang</h1>
    <?php
    $id_barang = $_GET['id'];
    include '../../CONFIG/koneksi.php';

    $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array($query);
    ?>
    
    <form action="proses.php?id_barang=<?php echo $result['id_barang']?>" method="POST">
  
  <div class="mb-3">
    <label for="" class="form-label">NAMA BARANG</label>
    <input type="text" name="nama_barang" class="form-control" id=""  aria-describedby="helpid " value="<?php echo $result['nama_barang']?>" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Bentuk barang</label>
    <input type="text" name="bentuk_barang" class="form-control" id="" aria-describedby="helpid " value="<?php echo $result['bentuk_barang']?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="index.php"  class="btn btn-warning">KEMBALI</a>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>