<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211126") or die("MySQL 접속 실패 !!");
   $sql ="SELECT * FROM publictbl WHERE SSN ='".$_GET['SSN']."'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['SSN']." 아이디의 회원이 없음!!!"."<br>";
		   echo "<br> <a href='main.html'> <--초기 화면</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "데이터 조회 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   echo "<br> <a href='main.html'> <--초기 화면</a> ";
	   exit();
   }   
  $row = mysqli_fetch_array($ret);
   $name = $row['name'];
   $SSN = $row["SSN"];
   $gender = $row["gender"];
   $address = $row["address"];
   $phone_number = $row["phone_number"];
   $license_number = $row["license_number"];
   $vaccination = $row["vaccination"];   
   $confirmed = $row["confirmed"]; 
    $physicianSSN = $row["physicianSSN"]; 
	 $exam_date = $row["exam_date"];   
	
	 
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 국민 정보 수정 </h1>
<FORM METHOD="post"  ACTION="update_result.php">

	이름 : <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?> > <br>
	SSN : <INPUT TYPE ="text" NAME="SSN" VALUE=<?php echo $SSN ?>  READONLY> <br>
	gender : <INPUT TYPE ="text" NAME="gender" VALUE=<?php echo $gender ?>> <br>
	address : <INPUT TYPE ="text" NAME="address" VALUE=<?php echo $address ?> > <br>
	phone_number : <INPUT TYPE ="text" NAME="phone_number" VALUE=<?php echo $phone_number ?>> <br>
	license_number : <INPUT TYPE ="text" NAME="license_number" VALUE=<?php echo $license_number ?>> <br>
	vaccination : <INPUT TYPE ="text" NAME="vaccination" VALUE=<?php echo $vaccination ?>> <br>
	confirmed : <INPUT TYPE ="text" NAME="confirmed" VALUE=<?php echo $confirmed ?> > <br>
	physicianSSN : <INPUT TYPE ="text" NAME="physicianSSN" VALUE=<?php echo $physicianSSN ?>> <br>
	exam_date : <INPUT TYPE ="text" NAME="exam_date" VALUE=<?php echo $exam_date ?>> <br>
	<BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>