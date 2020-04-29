<?php

if (isset($_SESSION["Username"])) {
  
}else{
  header("locatiom:login.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Masjid Al-Ikhlas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"
    </head>
    <body>
        <div class="container">
        
        <h1 class="text-center">DATA PENCERAMAH RAMADHAN 2020 MASJID AL-IKHLAS</h1>
        <!-- Awal Card Form -->
        <div class="card">
  <div class="card-header mt-3">
      <div class="card-header bg-primary text-white">
    DATA PENCERAMAH RAMADHAN 2020 MASJID AL-IKHLAS
  </div>
  <div class="card-body">
    <form method="post" action="insert.php"> 
    <div class="form-group">
    Nama Penceramah <input type="text" name="nama" class="form-control" placeholder="Ketik Nama Anda" required /><br/>
    Tanggal  <input type="date" name="hari" class="form-control" placeholder="Ketik Hari Ke Berapa " required /><br/>
    Tema   <textarea name="alamat" class="form-control" placeholder="Ketik Tema Anda" required ></textarea><br/>
    <button type="submit" class="btn-success">Simpan</button>
  <button type="reset" class="btn-danger" name="breset">Ulangi</button>
    </div>
</form>

<hr/>
  </div>
</div>
</div>
                        <!-- Akhir Card Form -->

                                        <!-- Awal Card Tabel -->
<div class="card mt-3">
  <div class="card-header bg-success text-white">
    Daftar Penceramah
  </div>
  <div class="card-body">
      <table class="table table-bordered table-striped">

    
<thead>
    <tr>
        <th>No</th>
        <th>Nama Penceramah</th>
        <th>Tanggal</th>
        <th>Tema</th>
        <th>Aksi</th>
        
    </tr>
</thead>

<tbody>
    <?php
    include "database.php";
    $query ="SELECT * FROM person";
    $data = $db->prepare($query);
    $data->execute();
    
    $no = 1;
    while($person = $data->fetch(PDO::FETCH_OBJ)){
    ?>
    
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $person->nama ?></td>
        <td><?php echo $person->hari ?></td>
        <td><?php echo $person->alamat ?></td>
        <td><a href="form-edit.php?id=<?php echo $person->id ?>" class="btn btn-warning">Edit</a>
        <a href="delete.php?id=<?php echo $person->id ?>" class="btn btn-danger">Hapus</a></td>

        
    </tr>
    <?php
         $no++;
    } ?>
</tbody>
</table>
</div>
</div>
</div> </br>
<center>
  
<a href='https://github.com/muhammadridhoamrullah'>

<img src='https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg' width='234' height='138' title='Link Menuju Github' alt='INi github' border='none' /></center>

</a>
<script type="text/javascript" src="js/bootstrap.min.jss"></script>
</body>
</html>