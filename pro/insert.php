<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 신규 국민 입력 </h1>
<FORM METHOD="post"  ACTION="insert_result.php">
	이름 : <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?> > <br>
	SSN : <INPUT TYPE ="text" NAME="SSN" VALUE=<?php echo $SSN ?> > <br>
	gender : <INPUT TYPE ="text" NAME="gender" VALUE=<?php echo $gender ?>> <br>
	address : <INPUT TYPE ="text" NAME="address" VALUE=<?php echo $address ?> > <br>
	phone_number : <INPUT TYPE ="text" NAME="phone_number" VALUE=<?php echo $phone_number ?>> <br>
	license_number : <INPUT TYPE ="text" NAME="license_number" VALUE=<?php echo $license_number ?>> <br>
	vaccination : <INPUT TYPE ="text" NAME="vaccination" VALUE=<?php echo $vaccination ?>> <br>
	confirmed : <INPUT TYPE ="text" NAME="confirmed" VALUE=<?php echo $confirmed ?> > <br>
	physicianSSN : <INPUT TYPE ="text" NAME="physicianSSN" VALUE=<?php echo $physicianSSN ?>> <br>
	exam_date : <INPUT TYPE ="text" NAME="exam_date" VALUE=<?php echo $exam_date ?>> <br>
	<BR><BR>
	<INPUT TYPE="submit"  VALUE="회원 입력">
</FORM>

</BODY>
</HTML>