<?php
  $id = $_POST['userID'];
  $pw = $_POST['userPassword'];

  # Database 접속
  $link = mysqli_connect('192.168.95.50', 'root', '9509', 'webhacktest');

  # SQL 쿼리 동작 확인
  $sql_select_query = "SELECT * FROM member WHERE id = '${id}' AND pw = '${pw}'";

  $result = mysqli_query($link, $sql_select_query);
  if(!$result){
    die('SQL Query Failed: '.mysqli_error());
  }

  $row = mysqli_fetch_assoc($result);

  if($row){
    echo "<script>alert('로그인 성공!'); location.replace('../home.html')</script>";
  }else{
    echo "<script>alert('아이디 또는 패스워드가 일치하지 않습니다.'); location.replace('../home.html')</script>";
  }

  # Database 접속 종료
  mysqli_close($link);
?>
