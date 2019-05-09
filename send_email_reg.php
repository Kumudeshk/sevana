<?php include('dbcon.php'); 

   // initialize variables
   $c_name = "";
   $email = "";
   $contact_no = "";
   $enquiry = "";

?>


<!DOCTYPE html>
<html>
<head>
</head>
<title> Send email </title>
<link href="css.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<body bgcolor="#ffffff">
		<div class="head">
			<div class="header1"><img src="d.png" width=100% height=200px/></div>
			<div class="header2"><font face="ALGERIAN" size="8" color="red"><p align="center">SEVEN BANK (PVT) LTD</p></font></div>
		</div>

        <div class="login">
	  <h2>User Register</h2>
      </div>

    <form method="post" action="send_email_reg.php">
        
    	<div class="input-group">
    		
    		<input class="form-control" type="text" name="c_name" required="" placeholder="User Name" value="<?php echo $c_name; ?>">
    	</div>
    	<div class="input-group">
    		
    		<input class="form-control" type="text" name="email" required="" placeholder="Email" value="<?php echo $email; ?>">
    	</div>   
        <div class="input-group">
            
            <input class="form-control" type="text" name="contact_no" required="" placeholder="Contact No" value="<?php echo $contact_no; ?>">
        </div>
        <div class="input-group">
            
            <input class="form-control" type="text" name="enquiry" required="" placeholder="Enquiry" value="<?php echo $enquiry; ?>">
        </div>


    	<div class="input-group">
    		<button type="submit" name="save" class="btn">Save</button>
    	</div>
 

    </form>


    <?php 

   // if save button is clicked
  if (isset($_POST['save'])) {
    $c_name = $_POST['c_name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $enquiry = $_POST['enquiry'];
    mysqli_query($db, "INSERT INTO send_email (c_name, email, contact_no, enquiry) VALUES ('$c_name','$email','$contact_no','$enquiry')"); 
    
    header('location: send_email_reg.php');
  }




     ?>


</body>
</html>
