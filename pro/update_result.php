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
   
   $sql ="UPDATE publictbl SET name='".$name."',SSN='".$SSN."', address='".$address."', gender='".$gender."',phone_number=".$phone_number;
   $sql = $sql.", license_number='".$license_number."', vaccination='".$vaccination."',confirmed='".$confirmed;
   $sql = $sql."', physicianSSN='".$physicianSSN."', exam_date='".$exam_date."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 회원 정보 수정 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>
