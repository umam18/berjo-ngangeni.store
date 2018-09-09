<?php
session_start();
  if(empty($_SESSION['username']))
  {
    echo "<script>alert('Anda harus login sebagai Admin!'); window.location = 'index.php'</script>"; 
  };
 ?>