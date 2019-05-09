<?php include('dbcon.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title> Sevena Bank/Contact</title>
<link href="css.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="kb.css">
</head>
<body>
<body bgcolor="#ffffff">
<div class="head">
<div class="header1"><img src="d.png" width=100% height=200px/></div>
<div class="header2"><font face="ALGERIAN" size="8" color="red"><p align="center">SEVENA BANK (PVT) LTD</p></font></div>
</div><br>
 <hr width=100% size=1 color="black"/>
 <a href="index.php"><div class=" head1">
            <p align="left"><font color="red" size="3">Home </a>>> login</font></p></div>

 <br>
     




	<div class="login">
	  <h2>Member Login</h2>
    </div><!---------login-------->

    <form class="" method="post" action="login.php">
        <!---display validation errors here--->
        <?php include('errors.php'); ?>
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="u_name">
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password">
    	</div>  	
    	<div class="input-group">
    		<button type="submit" name="login" class="btn">login</button>
    	</div>

    </form>


     <br>
     <br>
</body>
</html> 

