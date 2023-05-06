<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/87bfe03d6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="form_wrapper">
        <div class="form_container">
          <div class="title_container">
            <h2>Registration Page</h2>
          </div>
          <div class="row clearfix">
            <div class="">
              <form action="#" method='POST'>
                <div class="row clearfix">
                    <div class="col_half">
                      <div class="input_field"> <span><i aria-hidden="true" class="fa-solid fa-user"></i></span>
                        <input type="text" name="fname" placeholder="First Name" />
                      </div>
                    </div>
                    <div class="col_half">
                      <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                        <input type="text" name="lname" placeholder="Last Name" required />
                      </div>
                    </div>
                  </div>
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                  <input type="email" name="email" placeholder="Email" required />
                </div>
                <div class="input_field radio_option">
                    <input type="radio" name="radiogroup1" id="rd1">
                    <label for="rd1">Male</label>
                    <input type="radio" name="radiogroup1" id="rd2">
                    <label for="rd2">Female</label>
                </div>
                <div class="input_field select_option">
                    <select name='occ'>
                      <option value="not selected">whats your occupation</option>
                      <option value="student">student</option>
                      <option value="professional">Professional</option>
                    </select>
                    <div class="select_arrow"></div>
                  </div>
                <div class="input_field"> <span><i class="fa-solid fa-building-columns"></i></span>
                  <input type="text" name="iname" placeholder="Institution Name (if student  )" required />
                </div>
                
                
                    
                    
                  <!-- <div class="input_field checkbox_option">
                      <input type="checkbox" id="cb1">
                      <label for="cb1">I agree with terms and conditions</label>
                  </div>
                  <div class="input_field checkbox_option">
                      <input type="checkbox" id="cb2">
                      <label for="cb2">I want to receive the newsletter</label>
                  </div> -->
                  <center><img src="zerog.png" style="width: 150px;" alt="payment-qr"></center>
                  <div class="input_field" style="margin-top: 10px;"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                    <input type="password" name="tid" placeholder="Transaction-ID"  required />
                  </div>
                <input class="button" type="submit" value="Get Your Tickets" name="reg" />
              </form>
            </div>
          </div>
        </div>
      </div>
      <p class="credit">Developed by <a href="http://thisis-salah.netlify.app" target="_blank">XLRIUM</a></p>
    
</body>
</html>



<?php
if(isset($_POST['reg'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $occ = $_POST['occ'];
  $iname = $_POST['iname'];
  $tid = $_POST['tid'];

  $query = "INSERT INTO REGISTRATION VALUES('$fname','$lname','$email','$occ','$iname','$tid')" ; 
  $data = mysqli_query($conn,$query);
  if($data){
    echo "Inserted";
  }
  else{
    echo "Failed: ".mysqli_error($conn);
  }
}
?>