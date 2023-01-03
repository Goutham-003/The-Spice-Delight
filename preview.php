<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Bill Preview</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <center>
            <h1>Preview Bill</h1>
            </center>
            <hr>


<?php
$server_name="localhost";
$user_name="root";
$password="Loveyourself";
$database_name="restaurant";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);

$query="SELECT dish_name,price,Qty FROM bill WHERE Qty>0";
$res=$conn->query($query);
?>
<table class="table table-bordered" style="background-color-white">
    <thead class="table-dark">
        <tr>
            <th>Dish Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>

<?php
while($row=mysqli_fetch_array($res))
                {
                    ?>
                        <tbody>
                            <tr>
                                <th><?php echo $row['dish_name']; ?> </th>
                                <th><?php echo $row['price']; ?> </th>
                                <th><?php echo $row['Qty']; ?> </th>
                                <form action="delete.php"method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['dish_name'] ?>">
                                    <th><input type="submit" name="delete" class="btn btn-danger" value="Delete"> </th>
                                </form>                           
                            </tr>
                        </tbody>
                    <?php
                    
                }
?> 
</table>
<?php
$sql = "SELECT price,Qty FROM bill WHERE Qty>0";
$result = $conn->query($sql);
$sum=0;
print "<center><h5>Net Price</h5></center>";
//display data on web page
while($row = mysqli_fetch_array($result)){
    //echo "". $row['SUM(price)']."/-";
    $sum=$sum+($row['price']*$row['Qty']);
      //echo
}
?>
<center>
    <h5>
<?php
echo $sum."/-";
?>
</h5>
<br>
    <form action="order.html" method="post">
        <th><input type="submit" name="Add Items" class="btn btn-secondary" value="Add Items"></th>
    </form>
    </center>
        </div>

    </div>
    <br>
    
    <form action="bill.php" method="post" style="position:fixed;left:78%;top:90%" >
        <th><input type="submit" name="Place Order" class="btn btn-primary btn-lg" value="Place Order" ></th>
    </form>
   <br><br>
   
</body>
</html>