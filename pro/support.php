
	<html>
<HAED>
<META http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
 <title>지원 정책 현황</title>
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">




    <style>
	
 *{
    font-family: 'Stylish', sans-serif;
    }
	 .wrap {
                width: 1400px;
                margin: auto;
            }
	 #post-box {
                width: 500px;
                margin: 20px auto;
                padding: 50px;
                border: black solid;
                border-radius: 5px;
            }
	.left-box {
  float: left;
}
.right-box {
  float: right;
}


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  .image {
  position:relative;
}

.image .text {
  position:absolute;
  top:40px;
  left:80px;
  color:#0C2037;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
   
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

        <button type="button" class="btn btn-primary active" id="btn"
	onclick="document.location.href='main.html'">Main</button>

    </nav>
  </div>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-9 px-0">
	 <div class="image">
    <div class="text">
      


    </div>
  </div><br>
      <h1 class="display-4 fst-italic">코로나바이러스감염증-19 관련 지원 정책 현황</h1>

	  <div>
	<form method="POST">
	<br><br>
		<h3><label>조회할 날짜 입력:　 </label><input type="date" name="day0">
		<input type="submit" value="입력" name="submit"></h3>
	</form>
</div>
<?php
if (isset($_POST['submit'])){
            $con=mysqli_connect("localhost","root","21912165", "dump20211129") or die("MYSQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
				echo "입력한 날짜: ";
				echo "".$_POST['day0']."";
}

?>

</div>

</body>


	  
	  <!--<br><FORM METHOD="get" ACTION="new_confirmed.php">
	 조회할 날짜 입력 : <INPUT TYPE="text" day="day">
	<INPUT TYPE="submit" VALUE="입력">
	</FORM>-->

    </div><br>
	<hr color="black"></hr>
    <h1>지원 정책 통계 현황 		<button type="button" class="btn btn-primary active" id="btn"
	onclick="document.location.href='11.php'">
	지원 정책
	</button> 		<button type="button" class="btn btn-primary active" id="btn"
	onclick="document.location.href='aidtbl.php'">
	지원 받은 사람 조회
	</button><hr color="black"></hr></h1><br><br>
	
<div class="row mb-3">
    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Total</strong>
          <h3 class="mb-0">배정 예산 총합계</h3>
          <p class="card-text mb-auto"></p>

        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#A1C5D0"></rect><text font-size="50" x="50%" y="50%" fill="#030303" dy=".3em">		
 <?php
            $con=mysqli_connect("localhost","root","21912165", "dump20211129") or die("MYSQL 접속 실패 !!");
				$mung=$con->query
				("Select sum(budget) as cnt from aidtbl;");//조회할 날짜를 입력 받으면 날짜에 따라 배정 예산 총합계를 나타냄
				$orow = $mung->fetch_array();
					
					
					echo $orow['cnt'], "원";			
				
				
			
		?></text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Total</strong>
          <h3 class="mb-0">신청 날짜별 처리 현황</h3>
          <p class="mb-auto"></p>
   
        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#A1C5D0"></rect><text font-size="50" x="50%" y="50%" fill="#030303" dy=".3em">		
	  <?php
			
if (isset($_POST['submit'])){
            $con=mysqli_connect("localhost","root","21912165", "dump20211129") or die("MYSQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
				//$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				$query1=$con->query
				("select count(budget) as total from aidtbl where application_date<='".$_POST['day0']."' and processing_status='Y'");
				//입력받은 날짜 기준으로 신청 날짜별로 신청 완료된 건수를 나타냄
				
				$row1 = $query1->fetch_array();
					echo $row1['total'],"건수 완료";			
				
}
			
		?></text></svg>

        </div>
      </div>
    </div>
	    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Total</strong>
          <h3 class="mb-0">처리 완료 총예산</h3>
          <p class="mb-auto"></p>
          
        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#A1C5D0"></rect><text font-size="50" x="50%" y="50%" fill="#030303" dy=".3em">		
		  <?php
			
if (isset($_POST['submit'])){
            $con=mysqli_connect("localhost","root","21912165", "dump20211129") or die("MYSQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
				//$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				$query2=$con->query
				("select sum(budget) as total from aidtbl where application_date<='".$_POST['day0']."' and processing_status='Y'");
				//입력받은 날짜 기준으로 처리 완료 된 현재 지원금(사용한 지원금) 합계 나타냄
				
				$row2 = $query2->fetch_array();
					echo $row2['total'],"원";			
				
}			
		?></text></svg>

        </div>
      </div>
    </div>
  </div>



  <br><br>

</body></html>