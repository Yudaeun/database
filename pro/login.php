<?php

include("database_connection.php");

$msg = '';

if(isset($_POST["login"]))
{
if(empty($_POST["id"]) || empty($_POST["pwd"]))
{
$msg = '<label>빈칸을 채워주세요</label>';
}
else
{
$query = "select * from logintbl where id = :id";
$statment = $connect ->prepare($query);
$statment -> execute(
array('id' => $_POST["id"])
);
$count = $statment -> rowCount();

if($count > 0 )
{
$result =$statment ->fetchAll();
foreach($result as $row)
{
if(password_verify($_POST["pwd"],$row["pwd"]))
{
$_SESSION['id'] = $row['id'];
$_SESSION['pwd'] = $row['pwd'];
header("location:main.html");
}else
{
$msg = '<label>잘못된 비밀번호 입니다</label>';
}

}
}
else
{
$msg = '<label>잘못된 아이디 입니다</label>';
}


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
<input type="text" name="id" id="id" class="form-control" />
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
