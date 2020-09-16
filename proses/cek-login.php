<?php
  include('../config/koneksi.php');
  $username = addslashes($_POST['username']);
  $password = md5(addslashes($_POST['password']));
  $sql = "SELECT * from user where username='$username' and password='$password'";
  $query = mysqli_query($db,$sql);
  while($row = mysqli_fetch_array($query))
  {
    switch ($username == $row['username'] && $password == $row['password'])
    {
       case true :
       session_start();
       $_SESSION['username'] = $username;
       header('location:../index.php');
       break;
       default :
         header('location:../login.php');
         break;
    }
  }
 ?>
