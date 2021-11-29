<?php
      $con=mysqli_connect("localhost","root","21912165","Dump20211129") or die("MySQL 접속 실패 !!");
      $msg = '';
      //<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
      if(isset($_POST['admid'])&&isset($_POST['pwd'])){//post방식으로 데이터가 보내졌는지?
        $username=$_POST['admid'];//post방식으로 보낸 데이터를 username이라는 변수에 넣는다.
        $userpw=$_POST['pwd'];//post방식으로 보낸 데이터를 userpw라는 변수에 넣는다.
        
        //sql문을 sql변수에 저장해놓는다.
        $sql="SELECT * FROM logintbl WHERE admin='$username'&&pwd='$userpw'";
        if($result=mysqli_fetch_array(mysqli_query($con,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공
  
          header("location:main.html");
        
        }
        else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
          $msg = '<label>로그인 실패</label>';


        }
      }
    ?>
<!DOCTYPE html>
<html>
<head>
<title>국민관리시스템 로그인</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<br />



<div class="container">
<h2 align="center">관리자로 로그인합니다.(승인된 관리자만 접속 가능)</h2>
<br />
<div class="panel panel-default">
<div class="panel-heading">로그인</div>
<div class="panel-body">

<!-- 로그인 폼 -->
<form method = "post">
<span class="text-danger"><?php echo $msg; ?></span>
<div class="form-group">
<label>id</label>
<input type="text" name="admid" id="admid" class="form-control" />
</div>

<div class="form-group">
<label>비밀번호</label>
<input type="password" name="pwd" id="pwd" class="form-control" />
</div>

<div class="form-group">
<input type="submit" name="login" id="login" class="btn btn-info" value="로그인"/>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>