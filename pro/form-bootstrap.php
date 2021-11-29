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
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">이름   :</label>
              <INPUT TYPE ="text" NAME="name" placeholder="김땡땡(필수)"  VALUE=<?php echo $name ?>>
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="SSN">SSN :</label>
             <INPUT TYPE ="text"  NAME="SSN" placeholder="000000-0000000(필수)" <?php echo $SSN ?> required >
              <div class="invalid-feedback">
                SSN을 입력해주세요.
              </div>
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
            exam_date : <INPUT TYPE ="text" NAME="exam_date" placeholder="0-0-0(필수)" VALUE=<?php echo $exam_date ?>>
            <div class="invalid-feedback">
              phone_number를 입력해주세요.
            </div>
          </div>
		  </div>
		 

          <div class="mb-3">
            <label for="address">address</label>
            <input type="text" class="form-control" id="address" placeholder="경상북도 경산"<?php echo $phone_number ?> required>
            <div class="invalid-feedback">
              주소를 입력해주세요.
            </div>
          </div>
		  
		   <div class="mb-3">
            <label for="phone_number">phone_number</label>
            <input type="text" class="form-control" id="phone_number" placeholder="010-0000-0000(필수)"<?php echo $phone_number ?> required>
            <div class="invalid-feedback">
              phone_number를 입력해주세요.
            </div>
          </div>
		  <div class="mb-3">
            <label for="license_number">license_number</label>
            <input type="text" class="form-control" id="license_number" placeholder="000000"<?php echo $license_number ?> >
            <div class="invalid-feedback">
              license_number를 입력해주세요.
            </div>
          </div>
		  <div class="mb-3">
            <label for="physicianSSN">physicianSSN</label>
            <input type="text" class="form-control" id="physicianSSN" placeholder="000000-0000001(필수)"<?php echo $address ?> >
            <div class="invalid-feedback">
              physicianSSN를 입력해주세요.
            </div>
          </div>
		  
	
		  
		  
		  
		  

          

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="vaccination">vaccination</label>
              <select class="custom-select d-block w-100" id="vaccination">
                <option value=<?php echo $vaccination ?>></option>
                <option>y</option>
                <option>n</option>
              </select>
              <div class="invalid-feedback">
                가입 경로를 선택해주세요.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="confirmed">confirmed</label>
              <input type="text" class="form-control" id="confirmed" placeholder=""<?php echo $address ?> >
              <div class="invalid-feedback">
                추천인 코드를 입력해주세요.
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