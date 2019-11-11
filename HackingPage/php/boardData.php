<?php
  $name = $_POST['userName'];
  $password = $_POST['userPassword'];
  $email = $_POST['userEmail'];
  $title = $_POST['subTitle'];
  $useHtml = $_POST['useHtml'];
  $content = nl2br($_POST['content']);;
  $file = $_POST['inputFile'];

  # Database 접속
  $link = mysqli_connect('192.168.95.50', 'root', '9509', 'webhacktest');

  # SQL 쿼리 동작 확인
  $sql_insert_query = "INSERT INTO board VALUES
                        ('', '${name}', '${password}', '${email}', '${title}', '${content}', '${useHtml}', 0, '${file}', 250, now())";
  echo $sql_insert_query;
  exit();

  $result = mysqli_query($link, $sql_insert_query);
  if($result){
    echo "<script>alert('작성 성공'); location.replace('../index.html')</script>";
  }else{
    echo "<script>alert('작성 실패'); history.back()</script>";
  }

  # Database 접속 종료
  mysqli_close($link);
?>
