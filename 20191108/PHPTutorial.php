<?php
  $record = array(1, "사람1", 26, "Good", "학생");

  // for 문
  for($i = 0 ; $i < count($record); $i++){
    echo $record[$i]."<br/>";
  }

  $record = array(2, "사람2", 24, "Normal", "개발자");

  // while 문
  $cnt = 0;
  while($cnt < count($record)){
    echo $record[$cnt]."<br>";
    $cnt++;
  }
?>
