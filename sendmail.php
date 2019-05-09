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
<title> Health Care Hospital </title>
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
        <br>
        <br>
        <div class="slider1">
		<div class="menuitem1"><p align="center"><img src="sc.png" width=40% height=30%></p>
			<p align="justify"><font color="orange" size="4">Health Care Hospital has a bed strength of 175 in comfortable air conditioned rooms with attached toilets with a television in each room. the hospital is fully equiped with all the up-to date facilities and ....<hr width="100%" size="2" color="black">Health Care Hospitals Private Limited, No.500, Peradeniya Road, Kandy.</p>
		</div>
		<div class="menuitem1"><p align="center"><img src="sc4.jpg" width=40% height=30%></p>
			<b>E-mail:</b><br/>healthcare@sltnet.lk<br/><b>Tel.:</b><br/>+94812222456, +94812245567, +94814498888<br/><b>Fax:</b>+94 0814465543
		</div>
		<div class="menuitem1"><p align="center"><img src="sc1.png" width=40% height=30%></p>
			<p align="center"><img src="ab.jpg" width=50% height=30%></p><br/><b>HEALTH CARE POSTING</b><br/>Health Care..<br/>June 06, 2016</div>
		</font>
		<div class="menuitem1"><p align="center"><img src="sc5.jpg" width=40% height=30%></p>
			<font size="4" color="orange"><p align="center">Mon: 12.00am-12.00pm</p><hr width="100%" size="2" color="black"><p align="center">Tue: 12.00am-12.00pm</p><hr width="100%" size="2" color="black"><p align="center">Wed: 12.00am-12.00pm</p><hr width="100%" size="2" color="black"><p align="center">Thu: 12.00am-12.00pm</p><hr width="100%" size="2" color="black"><p align="center">Fri: 12.00am-12.00pm</p><hr width="100%" size="2" color="black"><p align="center">Sat: 12.00am-12.00pm</p><hr width="100%" size="2" color="black"><p align="center">Sun: 12.00am-12.00pm</p>
		</div>
	</div>
	<div class="footer"><font size="3" color="white">
		<i>Copyrights ©2017: Health Care Hospitals (Pvt) Ltd. Web Developed by K. Kumudesh</i>
	</div>
</body>
</html>
