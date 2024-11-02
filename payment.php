<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="css/payment.css">
</head>
<body>
    <body>
    <div class="container">
        <form action="customer/orders.php">
            
                <legend>
                    <h1 class="main_heading">Payment Form</h1>

                </legend>
                <hr>
                <h2>Contact Information</h2>
               
                    
                    <p>Name: <input type="text" name="name" required placeholder="Your Name"></p>
                
                <fieldset>
                    <legend>Gender</legend>
                    
                    <p>
                        Male <input type="radio" name="gender" id="male" required>
                        Female <input type="radio" name="gender" id="female" required>
                    </p>
                </fieldset>
                <p>Address: <textarea name="address" id="address" cols="30" rows="10"></textarea required></p>
        <p>Email: <input type="email" name="email" id="email" placeholder="email@gmail.com" pattern="^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}"  required></p>
        <p>Pincode: <input type="text" name="number" id="number" placeholder="360050" onkeypress="return onlyNum(event)" minlength="6" maxlength="6" required></p>

        <legend><h2>Payment Information</h2></legend>
        <hr>
        <p>
            Card Type: <select name="card_type" id="card_type"required>
                <option value="">--Select a Card Type--</option>
                <option value="visa">Visa</option>
                <option value="upi">UPI</option>
                <option value="payal">PayPal</option>
            </select>
        
        </p>
        <p>Card Number: <input type="text" name="card_number" id="card_number" placeholder="123 456 789 101" onkeypress="return onlyNum(event)" minlength=8 maxlength=16 required></p>
        <p>Expiration Date: <input type="date" name="exp_date" id="exp_date"required dd-mm-yyyy></p>
        <p>CVV <input type="password" name="cvv" id="cvv"required placeholder="123" onkeypress="return onlyNum(event)" minlength=3 maxlength=3 required></p>
        <input type="Submit"  value="Pay Now" name="pay">
        
        
    </form>
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
</body>
</html>