<?php
  include_once('DBCon.php');

  session_start();
  $id = $_POST['userID'];
  $pw = $_POST['userPassword'];

  # Database 접속
  //$link = mysqli_connect('192.168.95.50', 'root', '9509', 'webhacktest');
  $link = db_connect();

  # SQL 쿼리 동작 확인
  $sql_select_query = "SELECT * FROM member WHERE id = '${id}' AND pw = '${pw}'";


  $result = mysqli_query($link, $sql_select_query);
  if(!$result){
    die('SQL Query Failed: '.mysqli_error());
  }

  $row = mysqli_fetch_assoc($result);
//echo "<script>location.replace('/HackingPage/index.html')</script>";
  if($row){
    $_SESSION['logon'] = True;
    $_SESSION['logon_id'] = $row['id'];
    $_SESSION['logon_nick'] = $row['nickname'];
    echo "<script>alert('로그인 성공!'); location.href='/HackingPage/index.html'</script>";
  }else{
    echo "<script>alert('아이디 또는 패스워드가 일치하지 않습니다.'); location.replace('../login.html')</script>";
  }

  # Database 접속 종료
  mysqli_close($link);
?>
