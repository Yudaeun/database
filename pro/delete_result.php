<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211129") or die("MySQL 접속 실패 !!");

   $SSN = $_POST["SSN"];
     
   $sql ="DELETE FROM publictbl WHERE SSN='".$SSN."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 정보 삭제 결과 </h1>";
   if($ret) {
	   echo $SSN." 정보가 성공적으로 삭제되었습니다. ";
   }
   else {
	   echo "데이터 삭제 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br><br> <a href='main.html'> <--초기 화면</a> ";
?>
