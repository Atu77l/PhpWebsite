<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['Age'];
    $address = $_POST['address'];
    $disease = $_POST['disease'];
    $phone = $_POST['phone'];



    $servername = "localhost/appointment";
    $username = "root";
    $passward = "";
    $database = "incredibleindia";

    $conn = mysqli_connect($servername, $username, $passward, $database);

    if (!$conn) {
        die("sorry!we failed to connect: " . mysqli_connect_error());
    } else {
        echo "connection was successful";
    }

    //submitting to database

    $sql = " INSERT INTO `table02` (`S.no.`, `name`, `age`, `address`, `phone`,'disease') VALUES ('', '$name', '$age', '$phone', '$address','$disease'); ";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
    <strong>success!</strong> details submitted 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
        echo " be Ready";
    }
}
?>