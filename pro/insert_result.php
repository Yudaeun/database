<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211126") or die("MySQL 접속 실패 !!");

  $name = $_POST["name"];
  $SSN = $_POST["SSN"];
   $gender = $_POST["gender"];
   $address = $_POST["address"];
   $phone_number = $_POST["phone_number"];
   $license_number = $_POST["license_number"];
   $vaccination = $_POST["vaccination"];
   $confirmed = $_POST["confirmed"];   
   $physicianSSN = $_POST["physicianSSN"]; 
   $exam_date = $_POST["exam_date"]; 
   
   $sql =" INSERT INTO publictbl VALUES('".$name."','".$SSN."','".$gender."','".$address;
   $sql = $sql."','".$phone_number."','".$license_number."','".$vaccination."','".$confirmed."','".$physicianSSN."','".$exam_date."')";
   
   $ret = mysqli_query($con, $sql);
 
 
    echo "<h1> 신규 회원 입력 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 입력됨.";
   }
   else {
	   echo "데이터 입력 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--home</a> ";
?>
