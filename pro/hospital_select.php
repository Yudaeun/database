
<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211126") or die("MySQL 접속 실패 !!");

   $sql ="SELECT * FROM wardtbl WHERE  hosCRN ='".$_GET['hosCRN']."'";  
 
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
   
   echo "<h1> 병원에 입원한 사람 조회  </h1>";
     echo mysqli_num_rows($ret), "건이 조회되었습니다. <br><br>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>wardID</TH><TH>hosCRN</TH><TH>patient_SSN</TH><TH>hospitalization_date</TH><TH>discharge_date</TH><TH>death_day</TH>";
   //echo "<TH>전화번호</TH><TH>키</TH><TH>가입일</TH><TH>수정</TH><TH>삭제</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	   
	  echo "<TR>";
	  echo "<TD>", $row['wardID'], "</TD>";
	  echo "<TD>", $row['hosCRN'], "</TD>";
	  echo "<TD>", $row['patient_SSN'], "</TD>";
	  echo "<TD>", $row["hospitalization_date"], "</TD>";
	  echo "<TD>", $row['discharge_date'], "</TD>";
	 echo "<TD>", $row['death_day'], "</TD>";
	
	
	  echo "<TD>", "<a href='update.php?SSN=", $row['SSN'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='deletee.php?SSN=", $row['SSN'], "'>삭제</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>

