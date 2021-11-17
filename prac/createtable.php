<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MySQL 접속 실패!!");
	
	$sql="
	CREATE TABLE nationTbl
	(ssn char(13) NOT NULL PRIMARY KEY,
	name VARCHAR(10) NOT NULL,
	gender char(2) NOT NULL,
	address VARCHAR(30) NOT NULL,
	hic char(20) NOT NULL,
	phone CHAR(11) NOT NULL,
	dod DATE,
	confirmed CHAR(2),
	selfquaran CHAR(2) ,
	vaccin CHAR(10))
	
	";
	$ret=mysqli_query($con,$sql);
	
	if($ret){
		echo "nationTbl이 성공적으로 생성됨";
	}
	else{
		echo "sqlDB 생성 실패"."<br>";
		echo "실패 원인:".mysqli_error($con);
	}
	mysqli_close($con);
	?>