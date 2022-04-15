<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "db_dhanashri";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$date = $_POST['date'];
$country = $_POST['country_value'];
$gender = $_POST['gender'];
$password = $_POST['pass'];
$cpassword = $_POST['cpass'];

$conn = mysqli_connect($servername,$username,$pass,$dbname);

if($conn->connect_error){
   die("Connection Error :".$conn->connect_error);
}

$sql = "INSERT INTO `student_info_2` values('$fname','$lname','$email','$date','$country','$gender','$password','$cpassword','$id')";

if($conn->query($sql) === TRUE)
{
    echo '<script>alert("Connection Successful")</script>';
    header("Location:home.php");
   
}
else{
    echo "Connection Failure".$sql.$conn->error;
}


$conn->close();
?>