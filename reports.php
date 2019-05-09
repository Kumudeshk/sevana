<?php include('dbcon.php'); 
 
  // if user is not logged in, they cannot access this page
  if (empty($_SESSION['u_name'])) {
      header('location: login.php');
  }
?>


<!DOCTYPE html>
<html>
<head>
</head>
<title> Report </title>
<link href="css.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="kb.css">


   <header>

        
            

           <?php if (isset($_SESSION["u_name"])): ?>
              <p>Welcome <strong><?php echo $_SESSION['u_name']; ?></strong></p>
              <p><a href="sendmail.php?logout='1';"> logout</p>
           <?php endif ?>
        </div>
    </header>


	<body bgcolor="#ffffff">
		<div class="head">
			<div class="header1"><img src="d.png" width=100% height=200px/></div>
			<div class="header2"><font face="ALGERIAN" size="8" color="red"><p align="center">SEVEN BANK (PVT) LTD</p></font></div>
		</div>
    <br>
    <hr width=100% size=1 color="black"/>

	<font size="6">
		<ul>
		<a href="users.php"><div class="menuitem">Users</div></a>
		<a href="accounts.php"><div class="menuitem">Accounts</div></a>
		<a href="cards.php"><div class="menuitem">Cards</div></a>
		<a href="send_email.php"><div class="menuitem">Send_Emails</div></ul></a><br/></font>


	
		
</body>
</html>
