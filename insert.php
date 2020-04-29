<?php
include "database.php";
$query ="INSERT INTO person VALUES('','$_POST[nama]','$_POST[hari]','$_POST[alamat]')";
$data = $db->prepare($query); //menyiapkan query sql
$data->execute(); //menjalankan perintah query sql

header("location: form.php");