<?php
$id = $_POST[id];
$pw = $_POST[pw];

if ($id == "admin" && $pw == "keroro2424."){
	echo "<script>alert('로그인 성공!')</script>";
}
else{
	echo "
		<script>
			alert('로그인 실패ㅠㅠ');
			history.back();
		</script>";
}
?>
