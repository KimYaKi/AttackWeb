<?php
  //header('Content-Type: text/html; charset=UTF-8');
  $id = $_POST['id'];
  $name = $_POST['name'];
  $pw = $_POST['pw'];
  $age = $_POST['age'];
  $nick = $_POST['nick'];
  $email = $_POST['email'];

  if(strlen($id) < 4 || strlen($id) > 12 || strlen($pw) < 6 || strlen($pw) > 20){
      echo "
        <script>
          alert('아이디 또는 비밀번호가 올바르지 않습니다.');
          history.back();
        </script>
      ";
      exit();
  }
  # Database 접속
  $link = mysqli_connect('192.168.95.50', 'root', '9509', 'webhacktest');

  # SQL 쿼리 동작 확인
  $sql_insert_query = "INSERT INTO member VALUES
                        ('', '${id}', '${name}', '${pw}', '${age}', '${nick}', '${email}', now())";

  $result = mysqli_query($link, $sql_insert_query);
  if($result){
    echo "<script>alert('회원가입 성공'); location.replace('../login.html')</script>";
  }else{
    echo "<script>alert('회원가입 실패'); history.back()</script>";
  }

  # Database 접속 종료
  mysqli_close($link);
?>
