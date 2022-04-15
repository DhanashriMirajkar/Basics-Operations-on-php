<?php

include('insert.php');

$value=$_GET['id_value'];

$sql = "DELETE FROM `student_info_2` WHERE `id` = '$value'";

$data = mysqli_query($conn,$sql);

if($data)
{
    echo "<script>alert('Record Deleted Succeessfully')</script>";
    echo "<script>window.location.href='home.php'</script>";
}
else
{
    echo "<script>alert('Failed to Delete')</script>";
    echo "<script>window.location.href='home.php'</script>";
}
?>