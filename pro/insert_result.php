<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MYSQL 접속 실패 !!");
	
	$ssn=$_POST["ssn"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	$hic=$_POST["hic"];
	$phone=$_POST["phone"];
	$dod=$_POST["dod"];
	$confirmed=$_POST["confirmed"];
	$selfquaran=$_POST["selquaran"];
	$vaccin=$_POST["vaccin"];
	
	$sql="INSERT INTO nationTbl VALUES('".$ssn."','".$name."','".$gender."','".$address."','".$hic."','".$phone."',".dod.",'".confirmed."','".selfquaran."','".vaccin."')";
	
	$ret=mysqli_query($con,$sql);
	
	echo "<h1> 새 국민 정보 입력 결과 </h1>";
	if($ret){
		echo "데이터가 성공적으로 입력됨";
	}
	else{
		echo "데이터 입력 실패!!"."<br>";
		echo "실패 원인:".mysqli_error($con);
	}
	mysqli_close($con);
	
	echo "<br> <a href='main.html'> <--초기 화면으로 돌아가기</a> ";
	?>