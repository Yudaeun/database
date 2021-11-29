<?php
   $con=mysqli_connect("localhost", "root", "21912165", "dump20211129") or die("MySQL 접속 실패 !!");
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

   $vaccination = $row["vaccination"];   
   $confirmed = $row["confirmed"]; 
	$exam_date=$row["exam_date"];
	 $death_day = $row["death_day"];   
	
	 
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입 화면 샘플 - Bootstrap</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    body {
      min-height: 100vh;

      background: -webkit-gradient(linear, left bottom, right top, from(#fff), to(#fff));
      background: -webkit-linear-gradient(bottom left, #fff 0%, #fff 100%);
      background: -moz-linear-gradient(bottom left, #fff 0%, #fff 100%);
      background: -o-linear-gradient(bottom left, #fff 0%, #fff 100%);
      background: linear-gradient(to top right, #fff 0%, #fff 100%);
    }

    .input-form {
      max-width: 680px;

      margin-top: 80px;
      padding: 32px;

      background: #fff;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      -webkit-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
      box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15)
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="input-form-backgroud row">
      <div class="input-form col-md-12 mx-auto">
        <h4 class="mb-3"></h4> 
        <form METHOD="post"  ACTION="update_result.php">
          
            <div class="mb-3">
              <label for="name">이름   :</label>
              <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?> > 
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
            </div>
            <div class="mb-3">
              <label for="SSN">SSN :</label>
             <INPUT TYPE ="text" NAME="SSN" VALUE=<?php echo $SSN ?>  READONLY> 
              <div class="invalid-feedback">
                SSN을 입력해주세요.
              </div>
            </div>
         

         	 
		   <div class="row">
		    <div class="col-md-6 mb-3">
            <label for="gender">gender :</label>
             <INPUT TYPE ="text" NAME="gender" VALUE=<?php echo $gender ?>> 
            <div class="invalid-feedback">
             gender를 입력해주세요.
            </div>
          </div>
		     <div class="col-md-6 mb-3">
            death_day : <INPUT TYPE ="text" NAME="death_day" placeholder="0-0-0(default)" VALUE=<?php echo $death_day ?>>
            <div class="invalid-feedback">
              death_day를 입력해주세요.
            </div>
          </div>
		  </div>
		 

          <div class="mb-3">
							address : <INPUT TYPE ="text" NAME="address" VALUE=<?php echo $address ?> > 
            <div class="invalid-feedback">
              주소를 입력해주세요.
            </div>
          </div>
		  
		   <div class="mb-3">
          
         phone_number : <INPUT TYPE ="text" NAME="phone_number" VALUE=<?php echo $phone_number ?>> 
            <div class="invalid-feedback">
              phone_number를 입력해주세요.
            </div>
          </div>
	
		  <div class="mb-3">
            
            vaccination : <INPUT TYPE ="text" NAME="vaccination" VALUE=<?php echo $vaccination ?>>
            <div class="invalid-feedback">
              vaccination를 입력해주세요.
            </div>
          </div>
		  
	
		  
		  
		  
		  

          

        <div class="row">
		    <div class="col-md-6 mb-3">
           
           exam_date : <INPUT TYPE ="text" NAME="exam_date" placeholder="0-0-0(default)" VALUE=<?php echo $exam_date ?>>
            <div class="invalid-feedback">
             exam_date를 입력해주세요.
            </div>
          </div>
		  <div class="col-md-6 mb-3">
            confirmed : <INPUT TYPE ="text" NAME="confirmed" VALUE=<?php echo $confirmed ?> > 
            <div class="invalid-feedback">
             confirmed를 입력해주세요.
            </div>
          </div>
		  </div>
		  
		  
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="aggrement" required>
            <label class="custom-control-label" for="aggrement">위 내용이 정확하게 수정되었습니다. </label>
          </div>
          <div class="mb-4"></div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">수정완료</button>
        </form>
      </div>
    </div>
    
  </div>
  <script>
    window.addEventListener('load', () => {
      const forms = document.getElementsByClassName('validation-form');

      Array.prototype.filter.call(forms, (form) => {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  </script>
</body>

</html>