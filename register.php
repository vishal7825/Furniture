<?php include('include/header.php'); ?>

                 
                  
                  <form method="post" class="mt-5 p-3">
                    
                    <?php 
                      if(isset($_POST['register'])){
                          
                          $fullname = $_POST['fullname'];
                          $email = $_POST['email'];
                          $password = $_POST['password'];
                          $conf_pass = $_POST['confirm-password'];
                          $address = $_POST['address'];
                          $city = $_POST['city'];
                          $postal_code = $_POST['code'];
                          $number = $_POST['phone_number'];
                          
                          if(!empty($fullname) or !empty($email) or !empty($password) or !empty($conf_pass) or !empty($address) or !empty($city) or !empty($postal_code) or !empty($number)){

                            if($password === $conf_pass){

                              $cust_query="INSERT INTO customer(`cust_name`,`cust_email`,`cust_pass`,`cust_add`,`cust_city`,`cust_postalcode`,`cust_number`) VALUES('$fullname','$email','$password','$address','$city','$postal_code','$number')";


                              if(mysqli_query($con,$cust_query)){
                                echo "<script>alert('Registeration successfully!!!!');</script>";
                                  echo "<script>window.location.assign('sign-in.php');</script>";
                              }
                              
                              
                              
                            } 
                            else{
                                $error="Passwords do not Match";
                            }
                          }
                            else{
                          $error="All (*) Fields Required";
                      }
                      }
                    
                      ?>
                      <?php
                      if(isset($error)){
                      
                        echo "<div class='alert bg-danger' role='alert'>
                                <span class='text-white text-center'> $error</span>
                              </div>";
                    
                        }
                      else if(isset($message)){
                      
                        echo "<div class='alert bg-success' role='alert'>
                                <span class='text-white text-center'> $message</span>
                              </div>";
                    
                        }
                      
                      ?>

<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="Regis/regis.js"></script>
<script src="Regis/regis2.js"></script>
<script src="Regis/regis3.js"></script>


                <body>
<div class="wrapper">
	<div class="r_form_wrap">
		
		<div class="title">
			<p>Registration</p>
            <form name="registration" class="registartion-form" onsubmit="return formValidation()" action="#" method="POST">
		</div>

		<div class="r_form">
			<form>
				<div class="input_wrap">
					<label for="name">Your Name</label>
					<div class="input_item">
						
						<input type="text" name="fullname" class="input" id="name"   required>
					</div>
				</div>
				<div class="input_wrap">
					<label for="emailaddress">Email Address</label>
					<div class="input_item">
						
						<input type="email" name="email" class="input" id="email" pattern="^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}"  required>
					</div>
				</div>
				<div class="input_wrap">
					<label for="password">Password</label>
					<div class="input_item">
					
						<input type="password" name="password" class="input" id="pswd" minlength=4 maxlength=16 required>
					</div>
				</div>
				
    				<div class="input_wrap">
					<label for="cpassword">Conform Password</label>
					<div class="input_item">
					
						<input type="password" name="confirm-password" class="input" id="cpswd"  minlength=4 maxlength=16 required>
					</div>
				</div>
				


				<div class="input_wrap">
					<label for="phoneNumber">Phone Number</label>
					<div class="input_item">
						
						<input type="text" name="phone_number" class="input" id="mno" onkeypress="return onlyNum(event)" minlength=10 maxlength=10 required>
					</div>
				</div>
				
                <div class="input_wrap">
					<label for="address">Address</label>
					<div class="input_item">
						
						<input type="address" name="address" class="input"  placeholder="Write Your Address.." id="address" required>
					</div>
				</div>

        <div class="input_wrap">
					<label for="city">City</label>
					<div class="input_item">
						
						<input type="text" name="city" class="input"  placeholder="Write Your city.." id="city" required>
					</div>
				</div>
       

				<div class="input_wrap">
					<label for="pincode">Pincode</label>
					<div class="input_item">
						
						<input type="text" name="code" class="input" id="pincode" onkeypress="return onlyNum(event)" minlength=6 maxlength=6 required>
					</div>
				</div>
                
			<input type="submit" class="submit" value="Register now"  name="register" />
			</form>
		</div>

	</div>
</div>
<script>
	function onlyNum(event)
	{
		var a=event.which?event.which:event.keyCode;
		if(a<48 || a>57)
			return false;
		return true;
	}
</script>
</body>
</html>

        <?php include('include/footer.php');?>