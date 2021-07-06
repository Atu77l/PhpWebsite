<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $passward = $_POST['passward'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Rollno = $_POST['Rollno'];



    $servername = "localhost";
    $username = "root";
    $passward = "";
    $database = "university";

    $conn = mysqli_connect($servername, $username, $passward, $database);

    if (!$conn) {
        die("sorry!we failed to connect: " . mysqli_connect_error());
    } else {
        echo "connection was successful";
    }

    //submitting to database

    $sql = " INSERT INTO `table01` (`S.no.`,`Rollno`, `name`, `password`, `email`, `phone`) VALUES ('', '$Rollno',$name', '$passward', '$email', '$phone'); ";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
    <strong>success!</strong> details submitted 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
        echo "Error";
    }
}
?>