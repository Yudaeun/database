<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MySQL 접속 실패!!");
	
	$sql="
	
	SELECT * FROM nationTbl";
	
	$ret=mysqli_query($con,$sql);
	
	if($ret){
		echo mysqli_num_rows($ret)," 건이 조회됨"."<br><br>";
	}
	else{
		echo "값 생성 실패"."<br>";
		echo "실패 원인:".mysqli_error($con);
		exit();
	}
	while($row=mysqli_fetch_array($ret)){
		echo "주민등록번호: ", $row['ssn']," 이름: ",$row['name'], " 확진 여부: ", $row['confirmed'], " ","<br>";
	}
	
	mysqli_close($con);
	?>