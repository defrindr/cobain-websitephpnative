<?php

$server = "localhost";
$user = "root";
$password = "defrindr";
$nama_database = "rpla";

$db = mysqli_connect($server, $user, $password, $nama_database);
$pdo =new PDO('mysql:host='.$server.';dbname='.$nama_database,$user,$password);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
