<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211129") or die("MySQL 접속 실패 !!");

  $name = $_POST["name"];
  $SSN = $_POST["SSN"];
   $gender = $_POST["gender"];
   $address = $_POST["address"];
   $phone_number = $_POST["phone_number"];
 
   $vaccination = $_POST["vaccination"];
   $confirmed = $_POST["confirmed"];   

   $exam_date = $_POST["exam_date"]; 
      $death_day = $_POST["death_day"]; 
   
   $sql =" INSERT INTO publictbl VALUES('".$name."','".$SSN."','".$gender."','".$address;
   $sql = $sql."','".$phone_number."','".$vaccination."','".$confirmed."','".$exam_date."','".$death_day."')";
   
   $ret = mysqli_query($con, $sql);
 
 
    echo "<h1> 신규 국민 입력 결과 </h1>";
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
