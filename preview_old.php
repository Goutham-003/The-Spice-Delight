<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <center>
    <h1>Bill</h1>
    </center>
    <br>
    <table class="table">
        <thead>
            <th>Dish Name</th>
            <th>Price</th>
            <th>Delete</th>
        </thead>
            <tbody>
                <?php
                $server_name="localhost";
                $user_name="root";
                $password="Loveyourself";
                $database_name="restaurant";
                $conn = mysqli_connect($server_name,$user_name,$password,$database_name);
                
                $sql="SELECT dish_name,price FROM bill";
                $res=$conn->query($sql);
                while($row=$res->fetch_assoc())
                {
                    echo"<tr>
                    <td>".$row["dish_name"]."</td>
                    <td>".$row["price"]."</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='delete.php'>Delete</a>  
                    </td>
                </tr>";
                }
                // $qu="SELECT SUM(price) FROM bill";
                // $resu=$conn->query($qu);  
                // print "<center><h3>Total Price</h3></center>";<form action="login.php"method="post">
                    // <input type="submit" class="btn btn-primary" name="TC" value="Tandoori_Chicken"></input>
                    // </form> 
                ?>
            </tbody>
    </table>
    <center>
    <?php
$server_name="localhost";
$user_name="root";
$password="Loveyourself";
$database_name="restaurant";
$conn = mysqli_connect($server_name,$user_name,$password,$database_name);
  
//sql query to find average cost of food items in food table
$sql = "SELECT  SUM(price) FROM bill";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    print "<center><h5>Total Price</h5></center>";
    echo "". $row['SUM(price)'];
      echo "<br />";
}
  
//close the connection
  
$conn->close();
?>

</body>
</html>