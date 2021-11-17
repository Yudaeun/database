<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MySQL 접속 실패!!");
	
	$sql="
	
	INSERT INTO nationTbl VALUES
	('1234567898765','김에이','F','서울시 동작구 구암동','28712371','01098238183',NULL,NULL,NULL,'mo2'),
	('9183782837652','박비비','M','부산시 해운대구 비비동','82736281','01082638291',NULL,NULL,'20211113','hwa1')
	";
	$ret=mysqli_query($con,$sql);
	
	if($ret){
		echo "값이 성공적으로 생성됨";
	}
	else{
		echo "값 생성 실패"."<br>";
		echo "실패 원인:".mysqli_error($con);
	}
	mysqli_close($con);
	?>