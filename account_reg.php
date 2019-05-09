<?php include('dbcon.php'); 
 
  // initialize variables
  $a_name = "";
  $a_type = "";
  $open_date = "";
  $expire_date = "";

?>


<!DOCTYPE html>
<html>
<head>
</head>
<title> Account Reg </title>
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
	  <h2>Account Register</h2>
      </div>

    <form method="post" action="account_reg.php">

    	<div class="input-group">
    		
    		<input class="form-control" type="text" name="a_name" required="" placeholder="A_Name" value="<?php echo $a_name; ?>">
    	</div>
    
    	<div class="input-group">
    	    		<input class="form-control" type="text" name="a_type" required="" placeholder="A_Type" value="<?php echo $a_type; ?>">
    	</div>
    	
        <div class="input-group">
 
            <input class="form-control" type="text" name="open_date" required="" placeholder="Open Date" value="<?php echo $open_date; ?>">
        </div>
       
        <div class="input-group">
            
            <input class="form-control" type="text" name="expire_date" required="" placeholder="Expire Date" value="<?php echo $expire_date; ?>">
        </div>
        
        
    	<div class="input-group">
    		<button type="submit" name="save" class="btn">Save</button>
    	</div>
 

    </form>


    <?php 

   // if save button is clicked
  if (isset($_POST['save'])) {
    $a_name = $_POST['a_name'];
    $a_type = $_POST['a_type'];
    $open_date = $_POST['open_date'];
    $expire_date = $_POST['expire_date'];

    mysqli_query($db, "INSERT INTO accounts (a_name, a_type, open_date, expire_date) VALUES ('$a_name','$a_type', '$open_date', ' $expire_date')"); 
    
    header('location: account_reg.php');
  }




     ?>


</body>
</html>
