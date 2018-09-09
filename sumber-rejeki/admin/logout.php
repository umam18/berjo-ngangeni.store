<?php
session_start();
if(empty($_SESSION['username'])){
  header('location:../admin/');
}
session_destroy();
echo "<script type='text/javascript'>alert('Anda Telah Logout!');window.location = '../';</script>";
 ?>
