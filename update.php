<?php
$server_name="localhost";
$user_name="root";
$password="Loveyourself";
$database_name="restaurant";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);

if(isset($_POST['Home']))
{
    $query="UPDATE bill SET Qty=0 WHERE d_id>1";
    $query_run=mysqli_query($conn,$query);
    header("location:home.html");
}
?>
