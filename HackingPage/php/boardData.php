<?php
  $name = $_POST['userName'];
  $password = $_POST['userPassword'];
  $email = $_POST['userEmail'];
  $title = $_POST['subTitle'];
  $useHtml = $_POST['useHtml'];
  $content = $_POST['content'];
  $file = $_POST['inputFile'];

  echo "Name : ${name}<br/>";
  echo "Password : ${password}<br/>";
  echo "Email : ${email}<br/>";
  echo "Title : ${title}<br/>";
  echo "UseHTML : ${useHtml}<br/>";
  echo "Content : ${content}<br/>";
  echo "File : ${file}<br/>";
?>
