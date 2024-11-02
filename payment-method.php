<?php
session_start();
include('include/dbcon.php');

  if(isset($_POST['submit'])){
    mysqli_query($con,"update customer_order set paymentMethod='".$_POST['method']."'where customer_id='".$_SESSION['id']."' and paymentMethod is null");

    if($_POST['method']=='debit')
    {
      header('location:payment.php');
    }
    if($_POST['method']=='cash')
    {
      header('location:customer/orders.php');
    }
    unset($_SESSION['cart']);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay method</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/bootstrap.css.map" rel="stylesheet">
    <link rel="stylesheet" href="css/paymethod.css">
</head>
<body>
<form action="#" method="post">
<div class="container">
	
	<h2>Select Payment Method</h2>
	
  <ul>
  <li>
    <input type="radio" id="f-option" value="cash" name="method">
    <label for="f-option">Cash-On-delivery</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s-option" name="method" value="debit">
    <label for="s-option">Debit-Credit Card</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input class="btn btn-success" style="margin-top:30px;margin-left:70px" type="submit" id="t-option" name="submit"/>
    
    
    <!-- <div class="check"><div class="inside"></div></div> -->
  </li>
</ul>
</div>

<div class="signature">
	<p>Made with <i class="much-heart"></i> by <a href="https://codepen.io/AngelaVelasquez">RR Furniture</a></p>
</div>
</form>
</body>
</html>