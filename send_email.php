<?php include('dbcon.php'); 
 
 
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





	    
    <?php $results = mysqli_query($db, "SELECT * FROM send_email"); ?>

    
<div class="row">
	<div class="col-md-7">

	<table class='table table-bordered table-hover' style="margin-top: 100px;">
	<thead>
		<tr>
			<th>User Name</th>
			<th>Email</th>
			<th>Contact No</th>
			<th>Enquiry</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['c_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['contact_no']; ?></td>
			<td><?php echo $row['enquiry']; ?></td>
		</tr>
	<?php } ?>
</table>
</div>
 </div>

     <div class="row">
     <div class="col-md-2">
    <div class="btn-info" style="margin-left: 725px; margin-right: 190px;">
    	<button type="button" class="btn btn-info"><a href="send_email_reg.php">New </a></button>
    </div>
    </div>
    </div>
     
     
		
</body>
</html>
