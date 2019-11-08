<?php
  $id = $_POST['id'];
  $name = $_POST['name'];
  $pw = $_POST['pw'];
  $pw_re = $_POST['pw_re'];
  $age = $_POST['age'];
  $nick = $_POST['nick'];
  $email = $_POST['email'];

  echo "ID : ${id}<br/>";
  echo "Name : ${name}<br/>";
  echo "PW : ${pw}<br/>";
  echo "PW_RE : ${pw_re}<br/>";
  echo "Age : ${age}<br/>";
  echo "NickName : ${nick}<br/>";
  echo "E-mail : ${email}<br/>";
?>
