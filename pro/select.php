
<FORM METHOD="get"  ACTION="updateee.php">
	 이름으로 검색 : <INPUT TYPE ="text" NAME="name"> 
	<INPUT TYPE="submit"  VALUE="조회">
</FORM>

<FORM METHOD="get"  ACTION="updatee.php">
	 주민번호로 조회 -주민번호 : <INPUT TYPE ="text" NAME="SSN"> 
	<INPUT TYPE="submit"  VALUE="조회">
</FORM>




<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211126") or die("MySQL 접속 실패 !!");

   $sql ="SELECT * FROM publictbl  ";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   //echo mysqli_num_rows($ret), "건이 조회됨..<br><br>";
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "publictbl 데이터 조회 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> 회원 조회 결과 </h1>";
        echo mysqli_num_rows($ret), "건이 조회되었습니다. <br><br>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>name</TH><TH>SSN</TH><TH>gender</TH><TH>address</TH><TH>phone_number</TH><TH>license_number</TH><TH>vaccination</TH><TH>confirmed</TH><TH>physicianSSN</TH><TH>exam_date</TH>";
   //echo "<TH>전화번호</TH><TH>키</TH><TH>가입일</TH><TH>수정</TH><TH>삭제</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	   
	  echo "<TR>";
	  echo "<TD>", $row['name'], "</TD>";
	  echo "<TD>", $row['SSN'], "</TD>";
	  echo "<TD>", $row['gender'], "</TD>";
	  echo "<TD>", $row["address"], "</TD>";
	  echo "<TD>", $row['phone_number'], "</TD>";
	 echo "<TD>", $row['license_number'], "</TD>";
	 echo "<TD>", $row['vaccination'], "</TD>";
	 echo "<TD>", $row['confirmed'], "</TD>";
	 echo "<TD>", $row['physicianSSN'], "</TD>";
	 echo "<TD>", $row['exam_date'], "</TD>";
		   
	
	  echo "<TD>", "<a href='update.php?SSN=", $row['SSN'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='delete.php?SSN=", $row['SSN'], "'>삭제</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>

