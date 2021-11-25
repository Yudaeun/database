<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MYSQL 접속 실패 !!");
	
	
	$sql="SELECT * FROM nationtbl WHERE day='".$_GET['day']."'";
	
	$ret=mysqli_query($con,$sql);
	
	
	if($ret){
		$count=mysqli_num_rows($ret);
		if($count=0){
			echo $_GET['day']." null"."<br>";
			echo "<br> <h1><a href='main.html'> <-- main</a></h1>";
			exit();
		}	

	}
	else{
		echo "데이터 조회 실패!!"."<br>";
		echo "실패 원인:".mysqli_error($con);
		echo "<h1><br> <a href='main.html'> <--main</a></h1> ";
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
 <title>확진자 현황</title>
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
    <img src="https://yumc.ac.kr:8443/data/bbs/news2/bbs_news2_202111100426277840.jpg" alt="사막">
    <div class="text">
      <h1>코로나바이러스감염증-19 국내 발생현황</h1>


    </div>
  </div><br>
      <h1 class="display-4 fst-italic">국내 발생 현황</h1>
	 

    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Total</strong>
          <h3 class="mb-0">보유병상 현황</h3>
          <div class="mb-1 text-muted">5월25일</div>
          <p class="card-text mb-auto"></p>

        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">
		  <?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MySQL 접속 실패 !!");
	
	$sql="SELECT SUM(bed_num) as bs FROM hospitaltbl ";
	
	$ret=mysqli_query($con,$sql);

	if($ret){
		$count=mysqli_num_rows($ret);
	}
	else{
		echo "데이터 조회 실패!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		exit();
	}
	
	
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
          <div class="mb-1 text-muted">5월25일</div>
          <p class="mb-auto"></p>
   
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">
	<?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MySQL 접속 실패 !!");

	$sql2="SELECT SUM(available_beds) as ab FROM hospitaltbl;";

	$ret2=mysqli_query($con,$sql2);


		if($ret2){
		$count=mysqli_num_rows($ret2);
	}
	else{
		echo "데이터 조회 실패!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		exit();
	}
		$row1=mysqli_fetch_array($ret2);
	    echo  $row1['ab'];

	?></text></svg>

        </div>
      </div>
    </div>
	    <div class="col-md-4">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Total</strong>
          <h3 class="mb-0">가동률</h3>
          <div class="mb-1 text-muted">5월25일</div>
          <p class="mb-auto"></p>
          
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">
		  <?php
	$con=mysqli_connect("localhost","root","dbspffldks5","govDB") or die("MySQL 접속 실패 !!");
	

	$sql3="SELECT truncate(abs(sum(available_beds)/sum(bed_num)),2)*100 as per FROM hospitaltbl;";
	
	$ret=mysqli_query($con,$sql3);
	if($ret){
		$count=mysqli_num_rows($ret);
	}
	else{
		echo "데이터 조회 실패!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		exit();
	}
	
	$row=mysqli_fetch_array($ret);
		echo  $row['per'],"%";

	?></text></svg>

        </div>
      </div>
    </div>
  </div>


    
  

</body></html>