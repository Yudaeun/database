<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MySQL 접속 실패 !!");
	
	$sql="SELECT * FROM nationTbl"; <!-- 피해지원금 테이블에서 피해지원금 전체 예산 나타내기-->
	
	$ret=mysqli_query($con,$sql);
	if($ret){
		$count=mysqli_num_rows($ret);
	}
	else{
		echo "nationTbl 데이터 조회 실패!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		exit();
	}
	echo "<hr class="my-4">";
	echo <p class="lead">";
	echo "<h1> 피해지원금 대상 조회 </h1>";
	echo "<TABLE border=1>";
	echo "<TR>";
	echo "<TH>ssn</TH><TH>이름</TH><TH>성별</TH><TH>주소</TH><TH>건강보험증코드</TH><TH>연락처</TH><TH>사망일</TH><TH>확진여부</TH><TH>자가격리여부</TH><TH>백신접종여부</TH>";
	echo "</TR>";
	while($row=mysqli_fetch_array($ret)){
		echo "<TR>";
		echo "<TD>", $row['ssn'],"</TD>";
		echo "<TD>", $row['name'],"</TD>";
		echo "<TD>", $row['gender'],"</TD>";
		echo "<TD>", $row['address'],"</TD>";
		echo "<TD>", $row['hic'],"</TD>";
		echo "<TD>", $row['phone'],"</TD>";
		echo "<TD>", $row['dod'],"</TD>";
		echo "<TD>", $row['confirmed'],"</TD>";
		echo "<TD>", $row['selfquaran'],"</TD>";
		echo "<TD>", $row['vaccin'],"</TD>";
		echo "<TD>", "<a href='update.php?ssn=", $row['ssn'],"'>수정</a></TD>";
		echo "<TD>", "<a href='delete.php?ssn=", $row['ssn'],"'>삭제</a></TD>";
		echo "</TR>";
	}
	mysqli_close($con);
	echo "</TABLE>";
	echo "<br> 	<button type="button" class="btn btn-primary active" id="btn"
	onclick="document.location.href='main.html'"> <--초기 화면으로 돌아가기</button> ";
	
	?>