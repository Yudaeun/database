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
        <form METHOD="post"  ACTION="insert_result.php">
          
            <div class="mb-3">
              <label for="name">이름   :</label>
              <INPUT TYPE ="text" NAME="name" placeholder="김땡땡(필수)"  VALUE=<?php echo "$name" ?> >
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
            </div>
            <div class="mb-3">
              <label for="SSN">SSN :</label>
             <INPUT TYPE ="text"  NAME="SSN" placeholder="000000-0000000(필수)" <?php echo $SSN ?> required >
              <div class="invalid-feedback">
                SSN을 입력해주세요.
              </div>
            </div>
         

         	 
		   <div class="row">
		    <div class="col-md-6 mb-3">
            <label for="gender">gender :</label>
             <INPUT TYPE ="text" NAME="gender" placeholder="F/M (필수)" VALUE=<?php echo $gender ?>>
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
							address : <INPUT TYPE ="text" NAME="address" placeholder="대구광역시" VALUE=<?php echo $address ?>>
            <div class="invalid-feedback">
              주소를 입력해주세요.
            </div>
          </div>
		  
		   <div class="mb-3">
          
         phone_number : <INPUT TYPE ="text" NAME="phone_number" placeholder="010-0000-0000" VALUE=<?php echo $phone_number ?>>
            <div class="invalid-feedback">
              phone_number를 입력해주세요.
            </div>
          </div>
	
		  <div class="mb-3">
            
            vaccination : <INPUT TYPE ="text" NAME="vaccination" placeholder="Y/N" VALUE=<?php echo $vaccination ?>>
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
            confirmed : <INPUT TYPE ="text" NAME="confirmed" placeholder="Y/N" VALUE=<?php echo $confirmed ?>>
            <div class="invalid-feedback">
             confirmed를 입력해주세요.
            </div>
          </div>
		  </div>
		  
		  
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="aggrement" required>
            <label class="custom-control-label" for="aggrement">위 내용이 정확하게 입력되었습니다. </label>
          </div>
          <div class="mb-4"></div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">등록완료</button>
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