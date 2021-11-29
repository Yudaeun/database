<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211129") or die("MySQL 접속 실패 !!");

    $name = $_POST["name"];
  $SSN = $_POST["SSN"];
   $gender = $_POST["gender"];
   $address = $_POST["address"];
   $phone_number = $_POST["phone_number"];
 
   $vaccination = $_POST["vaccination"];
   $confirmed = $_POST["confirmed"];   

   $death_day = $_POST["death_day"]; 
   
  $sql ="UPDATE publictbl SET name='".$name."', gender='".$gender;
   $sql = $sql."', address='".$address."', phone_number='".$phone_number."',vaccination='".$vaccination;
   $sql = $sql."', confirmed='".$confirmed."', death_day='".$death_day."' WHERE SSN='".$SSN."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 정보 수정 결과 </h1>";
   if($ret) {
	   echo $SSN."  정보가 성공적으로 수정되었습니다. ";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>
