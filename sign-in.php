<?php
include('include/header.php'); ?>

                         
                  <form method="post" class="mt-5 p-3">

                   <?php if(isset($_POST['signin'])){
                        $email     = mysqli_real_escape_string($con,$_POST['email']);    
                        $password  = mysqli_real_escape_string($con,$_POST['password']);    
                        
                        $query = "SELECT * FROM customer";
                        $run   = mysqli_query($con,$query);
                        
                        if(mysqli_num_rows($run) > 0 ){
                           while($row = mysqli_fetch_array($run)){

                            $db_cust_id    = $row['cust_id'];
                            $db_cust_name  = $row['cust_name'];
                            $db_cust_email = $row['cust_email'];
                            $db_cust_pass  = $row['cust_pass'];
                            $db_cust_add   = $row['cust_add'];
                            $db_cust_city  = $row['cust_city'];
                            $db_cust_pcode = $row['cust_postalcode'];
                            $db_cust_number= $row['cust_number'];

                            if($email == $db_cust_email && $password == $db_cust_pass){
                                $_SESSION['id']    = $db_cust_id;
                                $_SESSION['name']  = $db_cust_name;
                                $_SESSION['email'] = $db_cust_email;
                                $_SESSION['add']   = $db_cust_add;
                                $_SESSION['city']  = $db_cust_city;
                                $_SESSION['pcode'] = $db_cust_pcode;
                                $_SESSION['number']= $db_cust_number;
                                
                                header('location:customer/index.php'); 

                            } 
                            else{
                              $error="Invalid Email or Password";
                            }
                           }
                          } 
                          else{
                            $error="This account doesn't exist";
                          }
                            
                         
                        
                      }
                        
                      ?>
                      
                         <?php
                      if(isset($error)){
                      
                        echo "<div class='alert bg-danger' role='alert'>
                                <span class='text-white text-center'> $error</span>
                                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                  </button>
                              </div>";
                    
                        }
                      
                      ?>


<html>
<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
    rel="stylesheet"
      href="css/boots.css"/>
      
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-sd-3 offset-lg-4"
          >
            <h1 class="mb-3 text-center">Please log in</h1>
            <form class="mb-3" action="#" method="post">
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  placeholder="example@email.com"
                  id="email"
                  name="email"
                  pattern="^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}" 
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary btn-block" name="signin" value="Sign in">
                Login
              </button>
            </form>
            <div class="text-center">
              <p>or..</p>
              <a href="register.php" class="btn btn-success">Registretion</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

                      
                    
   
  <?php include('include/footer.php'); ?>