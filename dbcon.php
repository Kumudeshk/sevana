<?php
    session_start();
    $u_name = "";
    $password = "";
    $errors = array();


    
    


  // connect to the database
  $db = mysqli_connect('sevana-test.mysql.database.azure.com', 'sevana_admin@sevana-test', 'kumu@123' , 'sevana_db');



  //log user in from login page
    if (isset($_POST['login'])) {
        $u_name = mysql_real_escape_string($_POST['u_name']);
        $password = mysql_real_escape_string($_POST['password']);

        // ensure that form fields are filled properly
        if (empty($u_name)) {
        array_push($errors, "Username is required"); 
        }

        if (empty($password)) {
        array_push($errors, "Password is required"); 
        }
        if (count($errors) == 0 ) {
            
            $query = "SELECT * FROM user WHERE u_name='$u_name' AND password= '$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1) {
              // log user in
              $_SESSION['u_name'] = $u_name;
              $_SESSION['success'] = "You are now logged in";
              header('location: reports.php'); // redirect to home page
           }else{
              array_push($errors, "Wrong username/password combinatiobn");
              
           }
        }
    }


//logout
  if (isset($_GET['logout'])) {
     session_destroy();
     unset($_SESSION['u_name']);
     header('location: sendmail.php');    
  }
 ?> 