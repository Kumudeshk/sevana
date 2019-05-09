<?php include('dbcon.php'); 
 
 
?>


<!DOCTYPE html>
<html>
<head>
</head>
<title> User Reg </title>
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

    <form method="post" action="user_reg.php">
        <!---display validation errors here--->
        <?php include('errors.php'); ?>
    	<div class="input-group">
    		
    		<input class="form-control" type="text" name="u_name" placeholder="User Name" required="" value="<?php echo $u_name; ?>">
    	</div>
    	
    	<div class="input-group">
    	 
    		<input class="form-control" type="text" name="password" placeholder="Password" required="" value="<?php echo $password; ?>">
    	</div>    
    	<div class="input-group">
    		<button type="submit" name="save" class="btn">Save</button>
    	</div>
 

    </form>


    <?php 

   // if save button is clicked
  if (isset($_POST['save'])) {
    $u_name = $_POST['u_name'];
    $password = $_POST['password'];
    mysqli_query($db, "INSERT INTO user (u_name, password) VALUES ('$u_name','$password')"); 
    
    header('location: user_reg.php');
  }




     ?>


</body>
</html>
