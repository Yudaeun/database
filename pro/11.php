<?php

            $con=mysqli_connect("localhost","root","21912165", "dump20211129") or die("MYSQL 접속 실패 !!");

   $sql ="SELECT * FROM policytbl  ";
 
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
   
   echo "<h1> 지원 종류  </h1>";
     echo mysqli_num_rows($ret), "종류의 정책이 있습니다. <br><br>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>pcID</TH><TH>name</TH><TH>budget</TH>";
   //echo "<TH>전화번호</TH><TH>키</TH><TH>가입일</TH><TH>수정</TH><TH>삭제</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	   
	  echo "<TR>";
	  echo "<TD>", $row['pcID'], "</TD>";
	  echo "<TD>", $row['name'], "</TD>";
	  echo "<TD>", $row['budget'], "</TD>";
	 

	
	
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
      echo "<br> <a href='support.php'> <--돌아가기</a> ";

?>


