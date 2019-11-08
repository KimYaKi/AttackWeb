<?php
  $id = $_POST['id'];
  $pw = $_POST['pw'];

  // 패스워드 길이 검증
  if(strlen($pw) < 8 || strlen($pw)> 16){
    echo "<script>
            alert('패스워드는 8 ~ 16으로 구성해야 합니다.');
            history.back();
          </script>";
          exit;
  }

  // ID, PW확인
  if($id == "test" && $pw == '123456789'){
    echo "<script>
            alert('Successed');
            location.replace('/');
          </script>";
  }else{
    echo "<script>
            alert('Failed');
            location.replace('Login.html');
          </script>";
  }
?>
