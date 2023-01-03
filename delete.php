<?php
$server_name="localhost";
$user_name="root";
$password="Loveyourself";
$database_name="restaurant";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);

if(isset($_POST['delete']))
{
    $name=$_POST['id'];

    $query="UPDATE bill SET Qty=Qty-1 WHERE dish_name='$name'";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:preview.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>