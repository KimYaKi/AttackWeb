<?php
  function db_connect(){
    $link = mysqli_connect('192.168.95.50', 'root', '9509', 'webhacktest');
    if(!$link){
      die("<script>DB 접근 실패</script>");
    }
    return $link;
  }
?>
