<?php
  if(isset($_GET['addoff'])){
    setcookie("addoff", $_GET['addoff'], time()+(60*60*24));
    echo "<script>location.replace('../index.html')</script>";
  }
?>
