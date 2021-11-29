
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
 <title>국민정보관리시스템-병원</title>
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
	onclick="document.location.href='ynhos.html'">
	병원으로 바로가기
	</button>

        <button type="button" class="btn btn-primary active" id="btn"
	onclick="document.location.href='main.html'">Main</button>

    </nav>
  </div>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
	 <div class="image">
    <img src="https://yumc.ac.kr:8443/data/bbs/news2/bbs_news2_202111100426277840.jpg" alt="사막">
    <div class="text">
      <h1>코로나-19 병상 보유 병원</h1>
  <h3>영남대학교 병원</h3>
    <h3>경북대학교 병원</h3>
  <h3>대구 병원</h3>

    </div>
  </div><br>
      <h1 class="display-4 fst-italic">확진환자 치료 및 지원</h1>
	  
      <p class="lead my-3">한국 정부는 환자를 중증도에 따라 분류하고 중증환자는 입원 치료를 우선 제공하고, 입원이 필요하지 않은 확진자에 대해서는 생활치료센터에서 의료서비스 지원 및 증상 모니터링 등을 진행하고 있습니다. 먼저, 보건소에서 확진자를 확인하고, 시도별로 구성된 환자관리반에서 확진자 중증도를 3가지(경증·중등증·중증)로 분류합니다.

입원 치료가 필요한 중등증ㆍ중증 환자는 환자 상태에 따라 감염병전담병원 병상, 중증환자 전담치료병상 등을 배정받아 치료를 받게 됩니다.</p>
 	  <div>
	<form method="POST">
	<br><br>
		<h3><label>조회할 날짜 입력:　 </label><input type="date" name="day0">
		<input type="submit" value="입력" name="submit"></h3>
	</form>
</div>
<?php
if (isset($_POST['submit'])){
			$con=mysqli_connect("localhost","root","21912165","dump20211126") or die("MySQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
				echo "입력한 날짜: ";
				echo "".$_POST['day0']."";
}

?>
    </div>
  </div>
  <hr color="black"></hr>
    <h1>병원 통계 현황 		<button type="button" class="btn btn-primary active" id="btn"
	onclick="document.location.href='ward.php'">
	병원 입원 환자 조회
	</button><hr color="black"></hr> </h1>
  <div class="row mb-3">
    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Total</strong>
          <h3 class="mb-0">총 보유병상 현황</h3>
          <p class="card-text mb-auto"></p>

        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text font-size="90" x="50%" y="50%" fill="#eceeef" dy=".3em">		  <?php
			$con=mysqli_connect("localhost","root","21912165","dump20211126") or die("MySQL 접속 실패 !!");
	
	$sql="SELECT SUM(sickbed) as bs FROM hospitaltbl";
	
	$ret=mysqli_query($con,$sql);	
	$row=mysqli_fetch_array($ret);


		echo $row['bs'];

	?></text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Total</strong>
          <h3 class="mb-0">가용병상 현황</h3>
          <p class="mb-auto"></p>
   
        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text font-size="90" x="50%" y="50%" fill="#eceeef" dy=".3em"><?php
			if (isset($_POST['submit'])){
			$con=mysqli_connect("localhost","root","21912165","dump20211126") or die("MySQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
			
				//$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				$mung=$con->query
				("select count(wardID) as cnt from wardtbl where hospitalization_date<='".$_POST['day0']."'");//입력받은 날짜 기준으로 현재 가용병상
				$orow = $mung->fetch_array();
					
					
					echo $orow['cnt'];			
				
				}
			
		?></text></svg>

        </div>
      </div>
    </div>
	    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Total</strong>
          <h3 class="mb-0">가동률</h3>
          <p class="mb-auto"></p>
          
        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text font-size="90" x="50%" y="50%" fill="#eceeef" dy=".3em">		  <?php
			if (isset($_POST['submit'])){
			$con=mysqli_connect("localhost","root","21912165","dump20211126") or die("MySQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
			
				//$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				$mung=$con->query
				("SELECT truncate(count(wardID)/90,2)*100 as per 
FROM wardtbl
where hospitalization_date<='".$_POST['day0']."' and (discharge_date>='".$_POST['day0']."' or discharge_date is null)");
				$orow = $mung->fetch_array();
					
					
					echo $orow['per'], "%";
				
				}
			
		?></text></svg>

        </div>
      </div>
    </div>


    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Total</strong>
          <h3 class="mb-0">경북대병원 가동병상</h3>
          <p class="card-text mb-auto"></p>

        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text font-size="90" x="50%" y="50%" fill="#eceeef" dy=".3em">		  <?php
			if (isset($_POST['submit'])){
			$con=mysqli_connect("localhost","root","21912165","dump20211126") or die("MySQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
			
				//$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				$mung=$con->query
				("SELECT count(wardID) as y
from wardtbl
where hosCRN='112-52-45982' and hospitalization_date<='".$_POST['day0']."' and 
(discharge_date>='".$_POST['day0']."' or discharge_date is null)");
				$orow = $mung->fetch_array();
					
					
					echo $orow['y'];
				
				}
			
		?></text></svg>

        </div>
      </div>
    </div>
	    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Total</strong>
          <h3 class="mb-0">영남대병원 가동병상</h3>
          <p class="card-text mb-auto"></p>

        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text font-size="90" x="50%" y="50%" fill="#eceeef" dy=".3em">		  <?php
			if (isset($_POST['submit'])){
			$con=mysqli_connect("localhost","root","21912165","dump20211126") or die("MySQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
			
				//$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				$mung=$con->query
				("SELECT count(wardID) as y
from wardtbl
where hosCRN='328-09-34183' and hospitalization_date<='".$_POST['day0']."' and 
(discharge_date>='".$_POST['day0']."' or discharge_date is null)");
				$orow = $mung->fetch_array();
					
					
					echo $orow['y'];
				
				}
			
		?></text></svg>

        </div>
      </div>
    </div>
	    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Total</strong>
          <h3 class="mb-0">대구병원 가동병상</h3>

          <p class="card-text mb-auto"></p>

        </div>
        <div class="col-auto d-none d-lg-block">
 <svg class="bd-placeholder-img" width="300" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text font-size="90" x="50%" y="50%" fill="#eceeef" dy=".3em">		 <?php
			if (isset($_POST['submit'])){
			$con=mysqli_connect("localhost","root","21912165","dump20211126") or die("MySQL 접속 실패 !!");

				$from=date('Y-m-d',strtotime($_POST['day0']));
			
				//$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				$mung=$con->query
				("SELECT count(wardID) as y
from wardtbl
where hosCRN='243-48-34791' and hospitalization_date<='".$_POST['day0']."'");
				$orow = $mung->fetch_array();
					
					
					echo $orow['y'];
				
				}
			
		?></text></svg>

        </div>
      </div>
    </div>
	</div>
    
  <br><br><br>

</body></html>