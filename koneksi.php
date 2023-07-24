<?php

$server = "localhost";
$user = "root";
$password = "";
$dbName = "my_perpus_db";

$db = mysqli_connect($server, $user, $password, $dbName);
if(!$db) {
  die("Gagal terhubung dengan db" . mysqli_connect_error());
}

?>