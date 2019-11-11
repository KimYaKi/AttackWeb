<?php
  # Database 접속
  $link = mysqli_connect('192.168.95.50', 'root', '9509', 'webhacktest');

  # SQL 쿼리 동작 확인
  $sql_create_query = "CREATE TABLE test (no INT AUTO_INCREMENT PRIMARY KEY)";
  $sql_insert_query = "INSERT INTO test VALUES (NULL)";

  $result = mysqli_query($link, $sql_insert_query);
  if(!$result){
    die('Invalid query: '.mysqli_error($link));
  }

  # Database 접속 종료
  mysqli_close($link);
?>
