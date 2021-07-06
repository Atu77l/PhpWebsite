<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Rollno = $_POST['Rollno'];
    $password = $_POST['password'];
    

    $servername = "localhost";
    $username = "root";
    $passward = "";
    $database = "university";

    $conn = mysqli_connect($servername, $username, $passward, $database);

    //submitting to database

// If form submitted, insert values into the database.
if (isset($_POST['Rollno'])){
        // removes backslashes
	$Rollno = stripslashes($_REQUEST['Rollno']);
        //escapes special characters in a string
	$Rollno = mysqli_real_escape_string($con,$Rollno);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `table01` WHERE username='$Rollno'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query);
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("location:appointment.html");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
         }
   }
}
?>