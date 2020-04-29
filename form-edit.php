<?php

include "database.php";

$query ="SELECT * FROM person WHERE id='$_GET[id]' ";
$data = $db->prepare($query);
$data->execute();
$person = $data->fetch(PDO::FETCH_OBJ);
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
    <form method="post" action="update.php"> 
    <div class="form-group">
    <input type="hidden" name="id" class="form-control" value="<?php echo $person->id ?>"/> 
    Nama Penceramah : <input type="text" name="nama" class="form-control" value="<?php echo $person->nama ?>"/><br/>
    Tanggal  <input type="date" name="hari" class="form-control" value="<?php echo $person->hari ?>"/><br/>
    Tema : <textarea name="alamat" class="form-control"><?php echo $person->alamat ?></textarea><br/>
     <button type="submit" class="btn-success">Simpan</button>
    </div>
</form>

<hr/>
  </div>
</div>
</div>
                        <!-- Akhir Card Form -->
