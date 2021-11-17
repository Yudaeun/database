<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MYSQL 접속 실패 !!");
	
	
	$sql="SELECT * FROM nationtbl WHERE ssn='".$_GET['ssn']."'";
	
	$ret=mysqli_query($con,$sql);
	
	
	if($ret){
		$count=mysqli_num_rows($ret);
		if($count=0){
			echo $_GET['ssn']." 아이디의 회원이 없음!!"."<br>";
			echo "<br> <a href='main.html'> <-- 초기화면으로 돌아가기</a>";
			exit();
		}	

	}
	else{
		echo "데이터 조회 실패!!"."<br>";
		echo "실패 원인:".mysqli_error($con);
		echo "<br> <a href='main.html'> <--초기화면으로 돌아가기</a> ";
		exit();
	}
	$row=mysqli_fetch_array($ret);
	$ssn=$row["ssn"];
	$name=$row["name"];
	$gender=$row["gender"];
	$address=$row["address"];
	$hic=$row["hic"];
	$phone=$row["phone"];
	$dod=$row["dod"];
	$confirmed=$row["confirmed"];
	$selfquaran=$row["selfquaran"];
	$vaccin=$row["vaccin"];
	
	
	?>
	
	<HTML>
	<HEAD>
	<META http-equiv="content-type" content="text/html; charset=utf-8">
	</HEAD>
	<BODY>
	
	<h1> 국민 정보 수정 </h1>
	<FORM METHOD="post" ACTION="update_result.php">
	주민등록번호: <INPUT TYPE="text" NAME="ssn" VALUE=<?php echo $ssn ?> READONLY> <br>
	이름: <INPUT TYPE="text" NAME="name" VALUE=<?php echo $name ?>> <br>
	성별: <INPUT TYPE="text" NAME="gender" VALUE=<?php echo $gender ?>> <br>
	주소: <INPUT TYPE="text" NAME="address" VALUE=<?php echo $address ?>> <br>
	건강보험증코드: <INPUT TYPE="text" NAME="hic" VALUE=<?php echo $hic ?>> <br>
	연락처: <INPUT TYPE="text" NAME="phone" VALUE=<?php echo $phone ?>> <br>
	사망일: <INPUT TYPE="text" NAME="dod" VALUE=<?php echo $dod ?>> <br>
	확진여부: <INPUT TYPE="text" NAME="confirmed" VALUE=<?php echo $confirmed ?>> <br>
	자가격리여부: <INPUT TYPE="text" NAME="selfquaran" VALUE=<?php echo $selfquaran ?>> <br>
	백신접종여부: <INPUT TYPE="text" NAME="vaccin" VALUE=<?php echo $vaccin ?>> <br>
<BR><BR>
<INPUT TYPE="submit" VALUE="정보 수정">
</FORM>
	</BODY>
	</HTML>