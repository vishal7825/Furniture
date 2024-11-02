<?php include('include/header.php'); ?>
<?php require('include/dbcon.php'); ?>

       <div class="jumbotron">
           <h1 class="text-center mt-5">Contact us</h1>
       </div>
       
        <div class="container mt-3">
          <div class="row">
            <div class="col-md-6">
              <h3>Our Office</h3>
              <hr>
              <p>Jasdan, Gujrat</p>
            </div>
            <div class="col-md-6">
                  <form action="" method="post" class=" p-3">
                     <div class="form-group">
                      <input type="text" name="email" placeholder="Email" class="form-control">
                     </div>
                     
                     <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" cols="20" placeholder="Message"></textarea>
                    </div>

                      <div class="form-group text-center mt-4">
                        <input type="submit" name="submit" class="btn btn-primary" value="submit">
                      </div>
                  </form>
                </div>
            </div>   
       </div>
       <?php
    
if(isset($_POST['submit']))
{
    if(isset($_SESSION['email']))
    {
      $email  = $_POST['email'];
      $message   = $_POST['message'];
    $date=date('Y-m-d H:m:s');
    if(mysqli_query($con,"insert into contact (email,message,date) values ('$email','$message','$date')")){
        echo "<script>alert('Message sent successfully!!!!');</script>";
        echo "<script>window.location.assign('index.php');</script>";
    }
        else{
        echo "<script>alert('we can't send message at moment!!!!');</script>";
        }

    }
    else
    {
        echo "<script>alert('You must have to loin first!!!!');</script>";
        echo "<script>window.location.assign('sign-in.php');</script>";
    }
}
?>
         
       <?php include('include/footer.php');?>