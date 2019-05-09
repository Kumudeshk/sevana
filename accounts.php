<?php include('dbcon.php'); 
 
 
?>


<!DOCTYPE html>
<html>
<head>
</head>
<title> Accounts </title>
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





	    
    <?php $results = mysqli_query($db, "SELECT * FROM accounts"); ?>

    
<div class="row">
	<div class="col-md-7">

	<table class='table table-bordered table-hover' style="margin-top: 100px;">
	<thead>
		<tr>
			<th>Account name</th>
			<th>Account type</th>
			<th>Open Date</th>
			<th>Expire Date</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['a_name']; ?></td>
			<td><?php echo $row['a_type']; ?></td>
			<td><?php echo $row['open_date']; ?></td>
			<td><?php echo $row['expire_date']; ?></td>

			
		</tr>
	<?php } ?>
</table>
</div>
 </div>

     <div class="row">
     <div class="col-md-2">
    <div class="btn-info" style="margin-left: 725px; margin-right: 190px;">
    	<button type="button" class="btn btn-info"><a href="account_reg.php">New </a></button>
    </div>
    </div>
    </div>
     
     
		
</body>
</html>
