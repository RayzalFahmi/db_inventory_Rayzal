<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
    <h1>Data Jenis</h1>
    <a href="tambahh.php" class="btn btn-warning">Tambah Jenis</a>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <th>id_jenis</th>
            <th>nama_jenis</th>
            <th>id_barang</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php
            include '../../CONFIG/koneksi.php';
            $query=mysqli_query($conn, "SELECT * FROM jenis");
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                  <tr>
                    <td><?php echo $result ['id_jenis'] ?></td>
                    <td><?php echo $result ['nama_jenis'] ?></td>
                    <td><?php echo $result ['id_barang'] ?></td>
                    <td>
                        <a href="editt.php?id=<?php echo $result['id_jenis'];?>"class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></i>Edit</a>
                        
                    </td>
                    
                  </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>