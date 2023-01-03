<?php
$server_name="localhost";
$user_name="root";
$password="Loveyourself";
$database_name="restaurant";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
//starters
if(isset($_POST['TC'])){
    $item_no=$_POST['TC'];
}
if(isset($_POST['C6'])){
    $item_no=$_POST['C6'];
}
if(isset($_POST['CC'])){
    $item_no=$_POST['CC'];
}
if(isset($_POST['CW'])){
    $item_no=$_POST['CW'];
}
if(isset($_POST['CL'])){
    $item_no=$_POST['CL'];
}
if(isset($_POST['LC'])){
    $item_no=$_POST['LC'];
}


//Main course
if(isset($_POST['CDB'])){
    $item_no=$_POST['CDB'];
}
if(isset($_POST['MDB'])){
    $item_no=$_POST['MDB'];
}
if(isset($_POST['SVB'])){
    $item_no=$_POST['SVB'];
}
if(isset($_POST['SVFR'])){
    $item_no=$_POST['SVFR'];
}
if(isset($_POST['CFR'])){
    $item_no=$_POST['CFR'];
}
if(isset($_POST['SPB'])){
    $item_no=$_POST['SPB'];
}

//Desserts
if(isset($_POST['CI'])){
    $item_no=$_POST['CI'];
}
if(isset($_POST['SI'])){
    $item_no=$_POST['SI'];
}
if(isset($_POST['R'])){
    $item_no=$_POST['R'];
}
if(isset($_POST['DKM'])){
    $item_no=$_POST['DKM'];
}
if(isset($_POST['GJ'])){
    $item_no=$_POST['GJ'];
}
if(isset($_POST['RM'])){
    $item_no=$_POST['RM'];
}

$flag=true;
$que="UPDATE bill SET Qty=Qty+1 WHERE dish_name='$item_no'";
$result = $conn->query($que);
header('Location: http://localhost/project/order.html');

?>