<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211126") or die("MySQL 접속 실패 !!");

    $sql ="SELECT * FROM aidtbl WHERE pcID ='".$_GET['pcID']."'";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   //echo mysqli_num_rows($ret), "건이 조회됨..<br><br>";
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "wardtbl 데이터 조회 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> 정책별 검색  </h1>";
   echo mysqli_num_rows($ret), "건이 조회되었습니다. <br><br>";
  echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>aid_SSN</TH><TH>pcID</TH><TH>budget</TH><TH>application_date</TH><TH>processing_status</TH>";
   //echo "<TH>전화번호</TH><TH>키</TH><TH>가입일</TH><TH>수정</TH><TH>삭제</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	   
	  echo "<TR>";
	  echo "<TD>", $row['aid_SSN'], "</TD>";
	  echo "<TD>", $row['pcID'], "</TD>";
	  echo "<TD>", $row['budget'], "</TD>";
	  echo "<TD>", $row["application_date"], "</TD>";
	  echo "<TD>", $row['processing_status'], "</TD>";

	
	
	  echo "<TD>", "<a href='update.php?SSN=", $row['SSN'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='deletee.php?SSN=", $row['SSN'], "'>삭제</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<br> <a href='main.html'> <--초기 화면</a> ";

?>
<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211126") or die("MySQL 접속 실패 !!");

   $sql ="SELECT * FROM aidtbl  ";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   //echo mysqli_num_rows($ret), "건이 조회됨..<br><br>";
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "wardtbl 데이터 조회 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> 지원 정책 조회  </h1>";
     echo mysqli_num_rows($ret), "건이 조회되었습니다. <br><br>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>aid_SSN</TH><TH>pcID</TH><TH>budget</TH><TH>application_date</TH><TH>processing_status</TH>";
   //echo "<TH>전화번호</TH><TH>키</TH><TH>가입일</TH><TH>수정</TH><TH>삭제</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	   
	  echo "<TR>";
	  echo "<TD>", $row['aid_SSN'], "</TD>";
	  echo "<TD>", $row['pcID'], "</TD>";
	  echo "<TD>", $row['budget'], "</TD>";
	  echo "<TD>", $row["application_date"], "</TD>";
	  echo "<TD>", $row['processing_status'], "</TD>";

	
	
	  echo "<TD>", "<a href='update.php?SSN=", $row['SSN'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='deletee.php?SSN=", $row['SSN'], "'>삭제</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>

<FORM METHOD="get"  ACTION="aidtbl_select.php">
	 정책별 조회 : <INPUT TYPE ="text" NAME="pcID"> 
	<INPUT TYPE="submit"  VALUE="조회">
</FORM>
